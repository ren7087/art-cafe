<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eccube\Service;

use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\MappingException as ORMMappingException;
use Doctrine\Persistence\Mapping\MappingException as PersistenceMappingException;
use Eccube\Common\Constant;
use Eccube\Common\EccubeConfig;
use Eccube\Entity\Plugin;
use Eccube\Exception\PluginException;
use Eccube\Repository\PluginRepository;
use Eccube\Service\Composer\ComposerServiceInterface;
use Eccube\Util\CacheUtil;
use Eccube\Util\StringUtil;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;

class PluginService
{
    /**
     * @var EccubeConfig
     */
    protected $eccubeConfig;

    /**
     * @var EntityManager
     */
    protected $entityManager;

    /**
     * @var PluginRepository
     */
    protected $pluginRepository;

    /**
     * @var EntityProxyService
     */
    protected $entityProxyService;

    /**
     * @var SchemaService
     */
    protected $schemaService;

    /**
     * @var ComposerServiceInterface
     */
    protected $composerService;

    public const VENDOR_NAME = 'ec-cube';

    /**
     * Plugin type/library of ec-cube
     */
    public const ECCUBE_LIBRARY = 1;

    /**
     * Plugin type/library of other (except ec-cube)
     */
    public const OTHER_LIBRARY = 2;

    /**
     * @var string %kernel.project_dir%
     */
    private $projectRoot;

    /**
     * @var string %kernel.environment%
     */
    private $environment;

    /**
     * @var ContainerInterface
     */
    protected $container;

    /** @var CacheUtil */
    protected $cacheUtil;

    /**
     * @var PluginApiService
     */
    private $pluginApiService;

    /**
     * @var SystemService
     */
    private $systemService;

    /**
     * @var PluginContext
     */
    private $pluginContext;

    /**
     * PluginService constructor.
     *
     * @param EntityManagerInterface $entityManager
     * @param PluginRepository $pluginRepository
     * @param EntityProxyService $entityProxyService
     * @param SchemaService $schemaService
     * @param EccubeConfig $eccubeConfig
     * @param ContainerInterface $container
     * @param CacheUtil $cacheUtil
     * @param ComposerServiceInterface $composerService
     * @param PluginApiService $pluginApiService
     * @param SystemService $systemService
     * @param PluginContext $pluginContext
     */
    public function __construct(
        EntityManagerInterface $entityManager,
        PluginRepository $pluginRepository,
        EntityProxyService $entityProxyService,
        SchemaService $schemaService,
        EccubeConfig $eccubeConfig,
        ContainerInterface $container,
        CacheUtil $cacheUtil,
        ComposerServiceInterface $composerService,
        PluginApiService $pluginApiService,
        SystemService $systemService,
        PluginContext $pluginContext
    ) {
        $this->entityManager = $entityManager;
        $this->pluginRepository = $pluginRepository;
        $this->entityProxyService = $entityProxyService;
        $this->schemaService = $schemaService;
        $this->eccubeConfig = $eccubeConfig;
        $this->projectRoot = $eccubeConfig->get('kernel.project_dir');
        $this->environment = $eccubeConfig->get('kernel.environment');
        $this->container = $container;
        $this->cacheUtil = $cacheUtil;
        $this->composerService = $composerService;
        $this->pluginApiService = $pluginApiService;
        $this->systemService = $systemService;
        $this->pluginContext = $pluginContext;
    }

    /**
     * ????????????????????????????????????????????????????????????
     *
     * @param string $path   path to tar.gz/zip plugin file
     * @param int    $source
     *
     * @return boolean
     *
     * @throws PluginException
     * @throws \Exception
     */
    public function install($path, $source = 0)
    {
        $pluginBaseDir = null;
        $tmp = null;
        try {
            // ?????????????????????????????????????????????
            $this->preInstall();
            $tmp = $this->createTempDir();

            // ??????????????????????????????
            $this->unpackPluginArchive($path, $tmp);
            $this->checkPluginArchiveContent($tmp);

            $config = $this->readConfig($tmp);
            // ???????????????????????????????????????
            $this->deleteFile($tmp);

            // ????????????????????????????????????
            $this->checkSamePlugin($config['code']);

            $pluginBaseDir = $this->calcPluginDir($config['code']);
            // ??????????????????????????????
            $this->createPluginDir($pluginBaseDir);

            // ???????????????????????????plugindir???
            $this->unpackPluginArchive($path, $pluginBaseDir);

            // ????????????????????????????????????
            $this->copyAssets($config['code']);
            // ?????????????????????????????????????????????
            $this->postInstall($config, $source);
        } catch (PluginException $e) {
            $this->deleteDirs([$tmp, $pluginBaseDir]);
            throw $e;
        } catch (\Exception $e) {
            // ??????????????????????????????Exception????????????????????????????????????
            $this->deleteDirs([$tmp, $pluginBaseDir]);
            throw $e;
        }

        return true;
    }

    /**
     * @param $code string s????????????????????????
     *
     * @throws PluginException
     */
    public function installWithCode($code)
    {
        $this->pluginContext->setCode($code);
        $this->pluginContext->setInstall();

        $pluginDir = $this->calcPluginDir($code);
        $this->checkPluginArchiveContent($pluginDir);
        $config = $this->readConfig($pluginDir);

        if (isset($config['source']) && $config['source']) {
            // ?????????????????????????????????????????????????????????????????????
            $requires = $this->getPluginRequired($config);
            $notInstalledOrDisabled = array_filter($requires, function ($req) {
                $code = preg_replace('/^ec-cube\//i', '', $req['name']);
                /** @var Plugin $DependPlugin */
                $DependPlugin = $this->pluginRepository->findByCode($code);

                return $DependPlugin ? $DependPlugin->isEnabled() == false : true;
            });

            if (!empty($notInstalledOrDisabled)) {
                $names = array_map(function ($p) { return $p['name']; }, $notInstalledOrDisabled);
                throw new PluginException(implode(', ', $names).'?????????????????????????????????');
            }
        }

        $this->checkSamePlugin($config['code']);
        $this->copyAssets($config['code']);
        $this->postInstall($config, $config['source']);
    }

    // ??????????????????????????????
    public function preInstall()
    {
        // ????????????????????????
        // FIXME: Please fix clearCache function (because it's clear all cache and this file just upload)
//        $this->cacheUtil->clearCache();
    }

    // ??????????????????????????????
    public function postInstall($config, $source)
    {
        // db????????????????????????
        $this->entityManager->getConnection()->beginTransaction();
        try {
            $Plugin = $this->pluginRepository->findByCode($config['code']);

            if (!$Plugin) {
                $Plugin = new Plugin();
                // ???????????????????????????????????????????????????????????????
                $Plugin->setName($config['name'])
                    ->setEnabled(false)
                    ->setVersion($config['version'])
                    ->setSource($source)
                    ->setCode($config['code']);
                $this->entityManager->persist($Plugin);
                $this->entityManager->flush();
            }

            $this->generateProxyAndUpdateSchema($Plugin, $config);

            $this->callPluginManagerMethod($config, 'install');

            $Plugin->setInitialized(true);
            $this->entityManager->persist($Plugin);
            $this->entityManager->flush();

            if ($this->entityManager->getConnection()->getNativeConnection()->inTransaction()) {
                $this->entityManager->getConnection()->commit();
            }
        } catch (\Exception $e) {
            if ($this->entityManager->getConnection()->getNativeConnection()->inTransaction()) {
                if ($this->entityManager->getConnection()->isRollbackOnly()) {
                    $this->entityManager->getConnection()->rollback();
                }
            }

            throw new PluginException($e->getMessage(), $e->getCode(), $e);
        }
    }

    /**
     * ?????????????????? Proxy ??????????????????????????? UpdateSchema ???????????????.
     *
     * @param Plugin $plugin ?????????????????????????????????
     * @param array $config ?????????????????? composer.json ?????????
     * @param bool $uninstall ??????????????????????????????????????? true
     * @param bool $saveMode SQL ?????????????????????????????? true
     */
    public function generateProxyAndUpdateSchema(Plugin $plugin, $config, $uninstall = false, $saveMode = true)
    {
        // ????????????????????????????????????????????????????????????????????????????????????????????????????????????
        $this->entityManager->getMetadataFactory()->setCacheDriver(null);

        $this->generateProxyAndCallback(function ($generatedFiles, $proxiesDirectory) use ($saveMode) {
            $this->schemaService->updateSchema($generatedFiles, $proxiesDirectory, $saveMode);
        }, $plugin, $config, $uninstall);
    }

    /**
     * ?????????????????? Proxy ??????????????????????????????????????????????????????????????????.
     *
     * ????????????????????????????????? SchemaTool ?????????????????????.
     * Proxy ????????????????????????????????????????????????????????????????????????????????????????????????, ??????????????????????????????????????????????????????.
     *
     * @param callable $callback Proxy ????????????????????????????????????????????????????????????????????????
     * @param Plugin $plugin ?????????????????????????????????
     * @param array $config ?????????????????? composer.json ?????????
     * @param bool $uninstall ??????????????????????????????????????? true
     * @param string $tmpProxyOutputDir Proxy ???????????????????????????????????????????????????
     */
    public function generateProxyAndCallback(callable $callback, Plugin $plugin, $config, $uninstall = false, $tmpProxyOutputDir = null)
    {
        if ($plugin->isEnabled()) {
            $generatedFiles = $this->regenerateProxy($plugin, false, $tmpProxyOutputDir ? $tmpProxyOutputDir : $this->projectRoot.'/app/proxy/entity');

            call_user_func($callback, $generatedFiles, $tmpProxyOutputDir ? $tmpProxyOutputDir : $this->projectRoot.'/app/proxy/entity');
        } else {
            // Proxy????????????????????????????????????????????????????????????????????????
            // ????????????????????????????????????????????????????????????Proxy???????????????
            $createOutputDir = false;
            if (is_null($tmpProxyOutputDir)) {
                $tmpProxyOutputDir = sys_get_temp_dir().'/proxy_'.StringUtil::random(12);
                @mkdir($tmpProxyOutputDir);
                $createOutputDir = true;
            }

            try {
                if (!$uninstall) {
                    // ???????????????metadata???????????????
                    $entityDir = $this->eccubeConfig['plugin_realdir'].'/'.$plugin->getCode().'/Entity';
                    if (file_exists($entityDir)) {
                        $ormConfig = $this->entityManager->getConfiguration();
                        $chain = $ormConfig->getMetadataDriverImpl()->getDriver();
                        $driver = $ormConfig->newDefaultAnnotationDriver([$entityDir], false);
                        $namespace = 'Plugin\\'.$config['code'].'\\Entity';
                        $chain->addDriver($driver, $namespace);
                        $ormConfig->addEntityNamespace($plugin->getCode(), $namespace);
                    }
                }

                // ????????????????????????Proxy????????????????????????????????????????????????
                $generatedFiles = $this->regenerateProxy($plugin, true, $tmpProxyOutputDir, $uninstall);

                call_user_func($callback, $generatedFiles, $tmpProxyOutputDir);
            } finally {
                if ($createOutputDir) {
                    $files = Finder::create()
                        ->in($tmpProxyOutputDir)
                        ->files();
                    $f = new Filesystem();
                    $f->remove($files);
                }
            }
        }
    }

    public function createTempDir()
    {
        $tempDir = $this->projectRoot.'/var/cache/'.$this->environment.'/Plugin';
        @mkdir($tempDir);
        $d = ($tempDir.'/'.sha1(StringUtil::random(16)));

        if (!mkdir($d, 0777)) {
            throw new PluginException(trans('admin.store.plugin.mkdir.error', ['%dir_name%' => $d]));
        }

        return $d;
    }

    public function deleteDirs($arr)
    {
        foreach ($arr as $dir) {
            if (file_exists($dir)) {
                $fs = new Filesystem();
                $fs->remove($dir);
            }
        }
    }

    /**
     * @param string $archive
     * @param string $dir
     *
     * @throws PluginException
     */
    public function unpackPluginArchive($archive, $dir)
    {
        $extension = pathinfo($archive, PATHINFO_EXTENSION);
        try {
            if ($extension == 'zip') {
                $zip = new \ZipArchive();
                $zip->open($archive);
                $zip->extractTo($dir);
                $zip->close();
            } else {
                $phar = new \PharData($archive);
                $phar->extractTo($dir, null, true);
            }
        } catch (\Exception $e) {
            throw new PluginException(trans('pluginservice.text.error.upload_failure'));
        }
    }

    /**
     * @param $dir
     * @param array $config_cache
     *
     * @throws PluginException
     */
    public function checkPluginArchiveContent($dir, array $config_cache = [])
    {
        try {
            if (!empty($config_cache)) {
                $meta = $config_cache;
            } else {
                $meta = $this->readConfig($dir);
            }
        } catch (\Symfony\Component\Yaml\Exception\ParseException $e) {
            throw new PluginException($e->getMessage(), $e->getCode(), $e);
        }

        if (!is_array($meta)) {
            throw new PluginException('config.yml not found or syntax error');
        }
        if (!isset($meta['code']) || !$this->checkSymbolName($meta['code'])) {
            throw new PluginException('config.yml code empty or invalid_character(\W)');
        }
        if (!isset($meta['name'])) {
            // name????????????????????????PATH????????????????????????????????????????????????????????????????????????
            throw new PluginException('config.yml name empty');
        }
        if (!isset($meta['version'])) {
            // version????????????????????????PATH????????????????????????????????????????????????????????????????????????
            throw new PluginException('config.yml version invalid_character(\W) ');
        }
    }

    /**
     * @param $pluginDir
     *
     * @return array
     *
     * @throws PluginException
     */
    public function readConfig($pluginDir)
    {
        $composerJsonPath = $pluginDir.DIRECTORY_SEPARATOR.'composer.json';
        if (file_exists($composerJsonPath) === false) {
            throw new PluginException("${composerJsonPath} not found.");
        }

        $json = json_decode(file_get_contents($composerJsonPath), true);
        if ($json === null) {
            throw new PluginException("Invalid json format. [${composerJsonPath}]");
        }

        if (!isset($json['version'])) {
            throw new PluginException("`version` is not defined in ${composerJsonPath}");
        }

        if (!isset($json['extra']['code'])) {
            throw new PluginException("`extra.code` is not defined in ${composerJsonPath}");
        }

        return [
            'code' => $json['extra']['code'],
            'name' => isset($json['description']) ? $json['description'] : $json['extra']['code'],
            'version' => $json['version'],
            'source' => isset($json['extra']['id']) ? $json['extra']['id'] : 0,
        ];
    }

    public function checkSymbolName($string)
    {
        return strlen($string) < 256 && preg_match('/^\w+$/', $string);
        // plugin_name???plugin_code?????????????????????????????????
        // a-z A-Z 0-9 _
        // ????????????????????????????????????????????????????????????
    }

    /**
     * @param string $path
     */
    public function deleteFile($path)
    {
        $f = new Filesystem();
        $f->remove($path);
    }

    public function checkSamePlugin($code)
    {
        /** @var Plugin $Plugin */
        $Plugin = $this->pluginRepository->findOneBy(['code' => $code]);
        if ($Plugin && $Plugin->isInitialized()) {
            throw new PluginException('plugin already installed.');
        }
    }

    public function calcPluginDir($code)
    {
        return $this->projectRoot.'/app/Plugin/'.$code;
    }

    /**
     * @param string $d
     *
     * @throws PluginException
     */
    public function createPluginDir($d)
    {
        $b = @mkdir($d);
        if (!$b) {
            throw new PluginException(trans('admin.store.plugin.mkdir.error', ['%dir_name%' => $d]));
        }
    }

    /**
     * @param $meta
     * @param int $source
     *
     * @return Plugin
     *
     * @throws PluginException
     */
    public function registerPlugin($meta, $source = 0)
    {
        try {
            $p = new Plugin();
            // ???????????????????????????????????????????????????????????????
            $p->setName($meta['name'])
                ->setEnabled(false)
                ->setVersion($meta['version'])
                ->setSource($source)
                ->setCode($meta['code']);

            $this->entityManager->persist($p);
            $this->entityManager->flush();

            $this->pluginApiService->pluginInstalled($p);
        } catch (\Exception $e) {
            throw new PluginException($e->getMessage(), $e->getCode(), $e);
        }

        return $p;
    }

    /**
     * @param $meta
     * @param string $method
     */
    public function callPluginManagerMethod($meta, $method)
    {
        $class = '\\Plugin'.'\\'.$meta['code'].'\\'.'PluginManager';
        if (class_exists($class)) {
            $installer = new $class(); // ?????????????????????????????????????????????????????????????????????????????????
            if (method_exists($installer, $method)) {
                $installer->$method($meta, $this->container);
            }
        }
    }

    /**
     * @param Plugin $plugin
     * @param bool $force
     *
     * @return bool
     *
     * @throws \Exception
     */
    public function uninstall(Plugin $plugin, $force = true)
    {
        $pluginDir = $this->calcPluginDir($plugin->getCode());
        $this->cacheUtil->clearCache();
        $config = $this->readConfig($pluginDir);

        if ($plugin->isEnabled()) {
            $this->disable($plugin);
        }

        // ????????????????????????????????????PluginManager#uninstall()??????????????????
        if ($plugin->isInitialized()) {
            $this->callPluginManagerMethod($config, 'uninstall');
        }
        $this->unregisterPlugin($plugin);

        try {
            // ???????????????????????????
            $this->generateProxyAndUpdateSchema($plugin, $config, true);

            // ??????????????????????????????????????????????????????Entity??????????????????????????????
            $namespace = 'Plugin\\'.$plugin->getCode().'\\Entity';
            $this->schemaService->dropTable($namespace);
        } catch (PersistenceMappingException $e) {
        } catch (ORMMappingException $e) {
            // XXX ??????????????? Bundle ??? MappingException ??????????????????????????????????????????????????????????????????????????????
        }

        if ($force) {
            $this->deleteFile($pluginDir);
            $this->removeAssets($plugin->getCode());
        }
        $this->pluginApiService->pluginUninstalled($plugin);

        return true;
    }

    public function unregisterPlugin(Plugin $p)
    {
        try {
            $em = $this->entityManager;
            $em->remove($p);
            $em->flush();
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function disable(Plugin $plugin)
    {
        return $this->enable($plugin, false);
    }

    /**
     * Proxy?????????????????????.
     *
     * @param Plugin $plugin ???????????????
     * @param boolean $temporary ????????????????????????????????????????????????????????????????????????
     * @param string|null $outputDir ?????????
     * @param bool $uninstall ?????????????????????????????????true
     *
     * @return array ????????????????????????????????????
     */
    private function regenerateProxy(Plugin $plugin, $temporary, $outputDir = null, $uninstall = false)
    {
        if (is_null($outputDir)) {
            $outputDir = $this->projectRoot.'/app/proxy/entity';
        }
        @mkdir($outputDir);

        $enabledPluginCodes = array_map(
            function ($p) { return $p->getCode(); },
            $temporary ? $this->pluginRepository->findAll() : $this->pluginRepository->findAllEnabled()
        );

        $excludes = [];
        if (!$uninstall && ($temporary || $plugin->isEnabled())) {
            $enabledPluginCodes[] = $plugin->getCode();
        } else {
            $index = array_search($plugin->getCode(), $enabledPluginCodes);
            if ($index !== false && $index >= 0) {
                array_splice($enabledPluginCodes, $index, 1);
                $excludes = [$this->projectRoot.'/app/Plugin/'.$plugin->getCode().'/Entity'];
            }
        }

        $enabledPluginEntityDirs = array_map(function ($code) {
            return $this->projectRoot."/app/Plugin/${code}/Entity";
        }, $enabledPluginCodes);

        return $this->entityProxyService->generate(
            array_merge([$this->projectRoot.'/app/Customize/Entity'], $enabledPluginEntityDirs),
            $excludes,
            $outputDir
        );
    }

    public function enable(Plugin $plugin, $enable = true)
    {
        $em = $this->entityManager;
        try {
            $pluginDir = $this->calcPluginDir($plugin->getCode());
            $config = $this->readConfig($pluginDir);
            $em->getConnection()->beginTransaction();

            $this->callPluginManagerMethod($config, $enable ? 'enable' : 'disable');

            $plugin->setEnabled($enable ? true : false);
            $em->persist($plugin);

            // Proxy???????????????????????????????????????????????????
            $this->regenerateProxy($plugin, false);

            $em->flush();
            $em->getConnection()->commit();

            if ($enable) {
                $this->pluginApiService->pluginEnabled($plugin);
            } else {
                $this->pluginApiService->pluginDisabled($plugin);
            }
        } catch (\Exception $e) {
            $em->getConnection()->rollback();
            throw $e;
        }

        return true;
    }

    /**
     * Update plugin
     *
     * @param Plugin $plugin
     * @param string $path
     *
     * @return bool
     *
     * @throws PluginException
     * @throws \Exception
     */
    public function update(Plugin $plugin, $path)
    {
        $tmp = null;
        try {
            $this->cacheUtil->clearCache();
            $tmp = $this->createTempDir();

            $this->unpackPluginArchive($path, $tmp); // ??????????????????????????????
            $this->checkPluginArchiveContent($tmp);

            $config = $this->readConfig($tmp);

            if ($plugin->getCode() != $config['code']) {
                throw new PluginException('new/old plugin code is different.');
            }

            $pluginBaseDir = $this->calcPluginDir($config['code']);
            $this->deleteFile($tmp); // ???????????????????????????????????????
            $this->unpackPluginArchive($path, $pluginBaseDir); // ???????????????????????????plugindir???

            $this->copyAssets($plugin->getCode());
            $this->updatePlugin($plugin, $config); // db????????????????????????
        } catch (PluginException $e) {
            $this->deleteDirs([$tmp]);
            throw $e;
        } catch (\Exception $e) {
            // catch exception of composer
            $this->deleteDirs([$tmp]);
            throw $e;
        }

        return true;
    }

    /**
     * Update plugin
     *
     * @param Plugin $plugin
     * @param array  $meta     Config data
     *
     * @throws \Exception
     */
    public function updatePlugin(Plugin $plugin, $meta)
    {
        $em = $this->entityManager;
        try {
            $em->getConnection()->beginTransaction();
            $plugin->setVersion($meta['version'])
                ->setName($meta['name']);

            $em->persist($plugin);

            $this->generateProxyAndUpdateSchema($plugin, $meta);

            if ($plugin->isInitialized()) {
                $this->callPluginManagerMethod($meta, 'update');
            }
            $this->copyAssets($plugin->getCode());
            $em->flush();
            if ($em->getConnection()->getNativeConnection()->inTransaction()) {
                $em->getConnection()->commit();
            }
        } catch (\Exception $e) {
            if ($em->getConnection()->getNativeConnection()->inTransaction()) {
                if ($em->getConnection()->isRollbackOnly()) {
                    $em->getConnection()->rollback();
                }
            }
            throw $e;
        }
    }

    /**
     * Get array require by plugin
     * Todo: need define dependency plugin mechanism
     *
     * @param array|Plugin $plugin format as plugin from api
     *
     * @return array|mixed
     *
     * @throws PluginException
     */
    public function getPluginRequired($plugin)
    {
        $pluginCode = $plugin instanceof Plugin ? $plugin->getCode() : $plugin['code'];
        $pluginVersion = $plugin instanceof Plugin ? $plugin->getVersion() : $plugin['version'];

        $results = [];

        $this->composerService->foreachRequires('ec-cube/'.strtolower($pluginCode), $pluginVersion, function ($package) use (&$results) {
            $results[] = $package;
        }, 'eccube-plugin');

        return $results;
    }

    /**
     * Find the dependent plugins that need to be disabled
     *
     * @param string $pluginCode
     *
     * @return array plugin code
     */
    public function findDependentPluginNeedDisable($pluginCode)
    {
        return $this->findDependentPlugin($pluginCode, true);
    }

    /**
     * Find the other plugin that has requires on it.
     * Check in both dtb_plugin table and <PluginCode>/composer.json
     *
     * @param string $pluginCode
     * @param bool   $enableOnly
     *
     * @return array plugin code
     */
    public function findDependentPlugin($pluginCode, $enableOnly = false)
    {
        $criteria = Criteria::create()
            ->where(Criteria::expr()->neq('code', $pluginCode));
        if ($enableOnly) {
            $criteria->andWhere(Criteria::expr()->eq('enabled', Constant::ENABLED));
        }
        /**
         * @var Plugin[]
         */
        $plugins = $this->pluginRepository->matching($criteria);
        $dependents = [];
        foreach ($plugins as $plugin) {
            $dir = $this->eccubeConfig['plugin_realdir'].'/'.$plugin->getCode();
            $fileName = $dir.'/composer.json';
            if (!file_exists($fileName)) {
                continue;
            }
            $jsonText = file_get_contents($fileName);
            if ($jsonText) {
                $json = json_decode($jsonText, true);
                if (!isset($json['require'])) {
                    continue;
                }
                if (array_key_exists(self::VENDOR_NAME.'/'.$pluginCode, $json['require']) // ???????????????
                    || array_key_exists(self::VENDOR_NAME.'/'.strtolower($pluginCode), $json['require'])) {
                    $dependents[] = $plugin->getCode();
                }
            }
        }

        return $dependents;
    }

    /**
     * Get dependent plugin by code
     * It's base on composer.json
     * Return the plugin code and version in the format of the composer
     *
     * @param string   $pluginCode
     * @param int|null $libraryType
     *                      self::ECCUBE_LIBRARY only return library/plugin of eccube
     *                      self::OTHER_LIBRARY only return library/plugin of 3rd part ex: symfony, composer, ...
     *                      default : return all library/plugin
     *
     * @return array format [packageName1 => version1, packageName2 => version2]
     */
    public function getDependentByCode($pluginCode, $libraryType = null)
    {
        $pluginDir = $this->calcPluginDir($pluginCode);
        $jsonFile = $pluginDir.'/composer.json';
        if (!file_exists($jsonFile)) {
            return [];
        }
        $jsonText = file_get_contents($jsonFile);
        $json = json_decode($jsonText, true);
        $dependents = [];
        if (isset($json['require'])) {
            $require = $json['require'];
            switch ($libraryType) {
                case self::ECCUBE_LIBRARY:
                    $dependents = array_intersect_key($require, array_flip(preg_grep('/^'.self::VENDOR_NAME.'\//i', array_keys($require))));
                    break;

                case self::OTHER_LIBRARY:
                    $dependents = array_intersect_key($require, array_flip(preg_grep('/^'.self::VENDOR_NAME.'\//i', array_keys($require), PREG_GREP_INVERT)));
                    break;

                default:
                    $dependents = $json['require'];
                    break;
            }
        }

        return $dependents;
    }

    /**
     * Format array dependent plugin to string
     * It is used for commands.
     *
     * @param array $packages   format [packageName1 => version1, packageName2 => version2]
     * @param bool  $getVersion
     *
     * @return string format if version=true: "packageName1:version1 packageName2:version2", if version=false: "packageName1 packageName2"
     */
    public function parseToComposerCommand(array $packages, $getVersion = true)
    {
        $result = array_keys($packages);
        if ($getVersion) {
            $result = array_map(function ($package, $version) {
                return $package.':'.$version;
            }, array_keys($packages), array_values($packages));
        }

        return implode(' ', $result);
    }

    /**
     * ???????????????????????????????????????
     * ?????????????????????????????????????????????????????????????????????
     * [????????????????????????]/Resource/assets
     * ??????????????????????????????????????????????????????????????????????????????
     *
     * @param $pluginCode
     */
    public function copyAssets($pluginCode)
    {
        $assetsDir = $this->calcPluginDir($pluginCode).'/Resource/assets';

        // ?????????????????????????????????????????????????????????????????????????????????
        if (file_exists($assetsDir)) {
            $file = new Filesystem();
            $file->mirror($assetsDir, $this->eccubeConfig['plugin_html_realdir'].$pluginCode.'/assets');
        }
    }

    /**
     * ???????????????????????????????????????????????????
     *
     * @param string $pluginCode
     */
    public function removeAssets($pluginCode)
    {
        $assetsDir = $this->eccubeConfig['plugin_html_realdir'].$pluginCode;

        // ??????????????????????????????????????????????????????????????????
        if (file_exists($assetsDir)) {
            $file = new Filesystem();
            $file->remove($assetsDir);
        }
    }

    /**
     * Plugin is exist check
     *
     * @param array  $plugins    get from api
     * @param string $pluginCode
     *
     * @return false|int|string
     */
    public function checkPluginExist($plugins, $pluginCode)
    {
        if (strpos($pluginCode, self::VENDOR_NAME.'/') !== false) {
            $pluginCode = str_replace(self::VENDOR_NAME.'/', '', $pluginCode);
        }
        // Find plugin in array
        $index = array_search($pluginCode, array_column($plugins, 'product_code')); // ???????????????
        if (false === $index) {
            $index = array_search(strtolower($pluginCode), array_column($plugins, 'product_code'));
        }

        return $index;
    }
}
