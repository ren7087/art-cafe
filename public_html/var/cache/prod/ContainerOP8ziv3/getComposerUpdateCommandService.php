<?php

namespace ContainerOP8ziv3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getComposerUpdateCommandService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Command\ComposerUpdateCommand' shared autowired service.
     *
     * @return \Eccube\Command\ComposerUpdateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Command/ComposerUpdateCommand.php';

        $container->privates['Eccube\\Command\\ComposerUpdateCommand'] = $instance = new \Eccube\Command\ComposerUpdateCommand(($container->services['Eccube\\Service\\Composer\\ComposerApiService'] ?? $container->load('getComposerApiServiceService')));

        $instance->setName('eccube:composer:update');

        return $instance;
    }
}
