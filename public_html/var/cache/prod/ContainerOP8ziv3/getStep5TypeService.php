<?php

namespace ContainerOP8ziv3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStep5TypeService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Form\Type\Install\Step5Type' shared autowired service.
     *
     * @return \Eccube\Form\Type\Install\Step5Type
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Form/Type/Install/Step5Type.php';

        return $container->privates['Eccube\\Form\\Type\\Install\\Step5Type'] = new \Eccube\Form\Type\Install\Step5Type();
    }
}