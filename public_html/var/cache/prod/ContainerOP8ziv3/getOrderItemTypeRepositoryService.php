<?php

namespace ContainerOP8ziv3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderItemTypeRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Repository\Master\OrderItemTypeRepository' shared autowired service.
     *
     * @return \Eccube\Repository\Master\OrderItemTypeRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/Master/OrderItemTypeRepository.php';

        return $container->privates['Eccube\\Repository\\Master\\OrderItemTypeRepository'] = new \Eccube\Repository\Master\OrderItemTypeRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
