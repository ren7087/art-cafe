<?php

namespace ContainerOP8ziv3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Oxb94C7Service extends Eccube_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.Oxb94C7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Oxb94C7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Order' => ['privates', '.errored..service_locator.Oxb94C7.Eccube\\Entity\\Order', NULL, 'Cannot autowire service ".service_locator.Oxb94C7": it references class "Eccube\\Entity\\Order" but no such service exists.'],
        ], [
            'Order' => 'Eccube\\Entity\\Order',
        ]);
    }
}
