<?php

namespace ContainerOP8ziv3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderHelperService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Service\OrderHelper' shared autowired service.
     *
     * @return \Eccube\Service\OrderHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/OrderHelper.php';

        return $container->privates['Eccube\\Service\\OrderHelper'] = new \Eccube\Service\OrderHelper($container, ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['Eccube\\Repository\\OrderRepository'] ?? $container->getOrderRepositoryService()), ($container->privates['Eccube\\Repository\\Master\\OrderItemTypeRepository'] ?? $container->load('getOrderItemTypeRepositoryService')), ($container->privates['Eccube\\Repository\\Master\\OrderStatusRepository'] ?? $container->load('getOrderStatusRepositoryService')), ($container->privates['Eccube\\Repository\\DeliveryRepository'] ?? $container->load('getDeliveryRepositoryService')), ($container->privates['Eccube\\Repository\\PaymentRepository'] ?? $container->load('getPaymentRepositoryService')), ($container->privates['Eccube\\Repository\\Master\\DeviceTypeRepository'] ?? $container->getDeviceTypeRepositoryService()), ($container->privates['Eccube\\Repository\\Master\\PrefRepository'] ?? $container->load('getPrefRepositoryService')), ($container->services['Detection\\MobileDetect'] ?? ($container->services['Detection\\MobileDetect'] = new \Detection\MobileDetect())), ($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()));
    }
}
