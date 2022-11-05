<?php

namespace ContainerOP8ziv3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductClassControllerService extends Eccube_KernelProdContainer
{
    /*
     * Gets the public 'Eccube\Controller\Admin\Product\ProductClassController' shared autowired service.
     *
     * @return \Eccube\Controller\Admin\Product\ProductClassController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/ProductClassController.php';

        $container->services['Eccube\\Controller\\Admin\\Product\\ProductClassController'] = $instance = new \Eccube\Controller\Admin\Product\ProductClassController(($container->privates['Eccube\\Repository\\ProductRepository'] ?? $container->getProductRepositoryService()), ($container->privates['Eccube\\Repository\\ProductClassRepository'] ?? $container->getProductClassRepositoryService()), ($container->privates['Eccube\\Repository\\ClassCategoryRepository'] ?? $container->load('getClassCategoryRepositoryService')), ($container->privates['Eccube\\Repository\\BaseInfoRepository'] ?? $container->getBaseInfoRepositoryService()), ($container->privates['Eccube\\Repository\\TaxRuleRepository'] ?? $container->getTaxRuleRepositoryService()));

        $instance->setEccubeConfig(($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))));
        $instance->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
        $instance->setTranslator(($container->services['translator'] ?? $container->getTranslatorService()));
        $instance->setSession(($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()));
        $instance->setFormFactory(($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService')));
        $instance->setEventDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
        $instance->setContainer(($container->privates['.service_locator.hmsvTXS'] ?? $container->load('get_ServiceLocator_HmsvTXSService'))->withContext('Eccube\\Controller\\Admin\\Product\\ProductClassController', $container));

        return $instance;
    }
}