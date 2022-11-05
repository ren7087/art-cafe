<?php

namespace ContainerOP8ziv3;

include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PluginService.php';
class PluginService_e75fd88 extends \Eccube\Service\PluginService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder3c7be = null;
    private $initializera7529 = null;
    private static $publicProperties7a971 = [
        
    ];
    public function install($path, $source = 0)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'install', array('path' => $path, 'source' => $source), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->install($path, $source);
    }
    public function installWithCode($code)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'installWithCode', array('code' => $code), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->installWithCode($code);
    }
    public function preInstall()
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'preInstall', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->preInstall();
    }
    public function postInstall($config, $source)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'postInstall', array('config' => $config, 'source' => $source), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->postInstall($config, $source);
    }
    public function generateProxyAndUpdateSchema(\Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $saveMode = true)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'generateProxyAndUpdateSchema', array('plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'saveMode' => $saveMode), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->generateProxyAndUpdateSchema($plugin, $config, $uninstall, $saveMode);
    }
    public function generateProxyAndCallback(callable $callback, \Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $tmpProxyOutputDir = null)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'generateProxyAndCallback', array('callback' => $callback, 'plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'tmpProxyOutputDir' => $tmpProxyOutputDir), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->generateProxyAndCallback($callback, $plugin, $config, $uninstall, $tmpProxyOutputDir);
    }
    public function createTempDir()
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'createTempDir', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->createTempDir();
    }
    public function deleteDirs($arr)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'deleteDirs', array('arr' => $arr), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->deleteDirs($arr);
    }
    public function unpackPluginArchive($archive, $dir)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'unpackPluginArchive', array('archive' => $archive, 'dir' => $dir), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->unpackPluginArchive($archive, $dir);
    }
    public function checkPluginArchiveContent($dir, array $config_cache = [])
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'checkPluginArchiveContent', array('dir' => $dir, 'config_cache' => $config_cache), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->checkPluginArchiveContent($dir, $config_cache);
    }
    public function readConfig($pluginDir)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'readConfig', array('pluginDir' => $pluginDir), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->readConfig($pluginDir);
    }
    public function checkSymbolName($string)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'checkSymbolName', array('string' => $string), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->checkSymbolName($string);
    }
    public function deleteFile($path)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'deleteFile', array('path' => $path), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->deleteFile($path);
    }
    public function checkSamePlugin($code)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'checkSamePlugin', array('code' => $code), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->checkSamePlugin($code);
    }
    public function calcPluginDir($code)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'calcPluginDir', array('code' => $code), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->calcPluginDir($code);
    }
    public function createPluginDir($d)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'createPluginDir', array('d' => $d), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->createPluginDir($d);
    }
    public function registerPlugin($meta, $source = 0)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'registerPlugin', array('meta' => $meta, 'source' => $source), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->registerPlugin($meta, $source);
    }
    public function callPluginManagerMethod($meta, $method)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'callPluginManagerMethod', array('meta' => $meta, 'method' => $method), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->callPluginManagerMethod($meta, $method);
    }
    public function uninstall(\Eccube\Entity\Plugin $plugin, $force = true)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'uninstall', array('plugin' => $plugin, 'force' => $force), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->uninstall($plugin, $force);
    }
    public function unregisterPlugin(\Eccube\Entity\Plugin $p)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'unregisterPlugin', array('p' => $p), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->unregisterPlugin($p);
    }
    public function disable(\Eccube\Entity\Plugin $plugin)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'disable', array('plugin' => $plugin), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->disable($plugin);
    }
    public function enable(\Eccube\Entity\Plugin $plugin, $enable = true)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'enable', array('plugin' => $plugin, 'enable' => $enable), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->enable($plugin, $enable);
    }
    public function update(\Eccube\Entity\Plugin $plugin, $path)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'update', array('plugin' => $plugin, 'path' => $path), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->update($plugin, $path);
    }
    public function updatePlugin(\Eccube\Entity\Plugin $plugin, $meta)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'updatePlugin', array('plugin' => $plugin, 'meta' => $meta), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->updatePlugin($plugin, $meta);
    }
    public function getPluginRequired($plugin)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'getPluginRequired', array('plugin' => $plugin), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->getPluginRequired($plugin);
    }
    public function findDependentPluginNeedDisable($pluginCode)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'findDependentPluginNeedDisable', array('pluginCode' => $pluginCode), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->findDependentPluginNeedDisable($pluginCode);
    }
    public function findDependentPlugin($pluginCode, $enableOnly = false)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'findDependentPlugin', array('pluginCode' => $pluginCode, 'enableOnly' => $enableOnly), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->findDependentPlugin($pluginCode, $enableOnly);
    }
    public function getDependentByCode($pluginCode, $libraryType = null)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'getDependentByCode', array('pluginCode' => $pluginCode, 'libraryType' => $libraryType), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->getDependentByCode($pluginCode, $libraryType);
    }
    public function parseToComposerCommand(array $packages, $getVersion = true)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'parseToComposerCommand', array('packages' => $packages, 'getVersion' => $getVersion), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->parseToComposerCommand($packages, $getVersion);
    }
    public function copyAssets($pluginCode)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'copyAssets', array('pluginCode' => $pluginCode), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->copyAssets($pluginCode);
    }
    public function removeAssets($pluginCode)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'removeAssets', array('pluginCode' => $pluginCode), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->removeAssets($pluginCode);
    }
    public function checkPluginExist($plugins, $pluginCode)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'checkPluginExist', array('plugins' => $plugins, 'pluginCode' => $pluginCode), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return $this->valueHolder3c7be->checkPluginExist($plugins, $pluginCode);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig, $instance->entityManager, $instance->pluginRepository, $instance->entityProxyService, $instance->schemaService, $instance->composerService, $instance->container, $instance->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $instance, 'Eccube\\Service\\PluginService')->__invoke($instance);
        $instance->initializera7529 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Eccube\Repository\PluginRepository $pluginRepository, \Eccube\Service\EntityProxyService $entityProxyService, \Eccube\Service\SchemaService $schemaService, \Eccube\Common\EccubeConfig $eccubeConfig, \Symfony\Component\DependencyInjection\ContainerInterface $container, \Eccube\Util\CacheUtil $cacheUtil, \Eccube\Service\Composer\ComposerServiceInterface $composerService, \Eccube\Service\PluginApiService $pluginApiService, \Eccube\Service\SystemService $systemService, \Eccube\Service\PluginContext $pluginContext)
    {
        static $reflection;
        if (! $this->valueHolder3c7be) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\PluginService');
            $this->valueHolder3c7be = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);
        }
        $this->valueHolder3c7be->__construct($entityManager, $pluginRepository, $entityProxyService, $schemaService, $eccubeConfig, $container, $cacheUtil, $composerService, $pluginApiService, $systemService, $pluginContext);
    }
    public function & __get($name)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, '__get', ['name' => $name], $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        if (isset(self::$publicProperties7a971[$name])) {
            return $this->valueHolder3c7be->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3c7be;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder3c7be;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3c7be;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder3c7be;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, '__isset', array('name' => $name), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3c7be;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder3c7be;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, '__unset', array('name' => $name), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3c7be;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder3c7be;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, '__clone', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        $this->valueHolder3c7be = clone $this->valueHolder3c7be;
    }
    public function __sleep()
    {
        $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, '__sleep', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
        return array('valueHolder3c7be');
    }
    public function __wakeup()
    {
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera7529 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera7529;
    }
    public function initializeProxy() : bool
    {
        return $this->initializera7529 && ($this->initializera7529->__invoke($valueHolder3c7be, $this, 'initializeProxy', array(), $this->initializera7529) || 1) && $this->valueHolder3c7be = $valueHolder3c7be;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3c7be;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3c7be;
    }
}

if (!\class_exists('PluginService_e75fd88', false)) {
    \class_alias(__NAMESPACE__.'\\PluginService_e75fd88', 'PluginService_e75fd88', false);
}
