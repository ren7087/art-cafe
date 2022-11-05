<?php

namespace ContainerOP8ziv3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwigLintValidatorService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Form\Validator\TwigLintValidator' shared autowired service.
     *
     * @return \Eccube\Form\Validator\TwigLintValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Form/Validator/TwigLintValidator.php';

        return $container->privates['Eccube\\Form\\Validator\\TwigLintValidator'] = new \Eccube\Form\Validator\TwigLintValidator(($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()));
    }
}
