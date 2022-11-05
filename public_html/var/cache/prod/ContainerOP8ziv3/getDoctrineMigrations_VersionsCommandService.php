<?php

namespace ContainerOP8ziv3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMigrations_VersionsCommandService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'doctrine_migrations.versions_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\ListCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/ListCommand.php';

        $container->privates['doctrine_migrations.versions_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\ListCommand(($container->privates['doctrine.migrations.dependency_factory'] ?? $container->load('getDoctrine_Migrations_DependencyFactoryService')), 'doctrine:migrations:versions');

        $instance->setName('doctrine:migrations:list');

        return $instance;
    }
}
