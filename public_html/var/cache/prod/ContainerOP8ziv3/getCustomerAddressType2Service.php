<?php

namespace ContainerOP8ziv3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCustomerAddressType2Service extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Form\Type\Shopping\CustomerAddressType' shared autowired service.
     *
     * @return \Eccube\Form\Type\Shopping\CustomerAddressType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Form/Type/Shopping/CustomerAddressType.php';

        return $container->privates['Eccube\\Form\\Type\\Shopping\\CustomerAddressType'] = new \Eccube\Form\Type\Shopping\CustomerAddressType();
    }
}
