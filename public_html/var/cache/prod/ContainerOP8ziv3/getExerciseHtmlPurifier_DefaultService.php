<?php

namespace ContainerOP8ziv3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExerciseHtmlPurifier_DefaultService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'exercise_html_purifier.default' shared service.
     *
     * @return \HTMLPurifier
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/ezyang/htmlpurifier/library/HTMLPurifier.php';
        include_once \dirname(__DIR__, 4).'/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Config.php';
        include_once \dirname(__DIR__, 4).'/vendor/exercise/htmlpurifier-bundle/src/HTMLPurifierConfigFactory.php';

        return $container->privates['exercise_html_purifier.default'] = new \HTMLPurifier(\Exercise\HTMLPurifierBundle\HTMLPurifierConfigFactory::create('default', ['Cache.SerializerPath' => ($container->targetDir.''.'/htmlpurifier')], NULL, [], [], [], []));
    }
}
