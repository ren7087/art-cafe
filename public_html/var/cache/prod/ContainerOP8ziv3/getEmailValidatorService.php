<?php

namespace ContainerOP8ziv3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailValidatorService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Form\Validator\EmailValidator' shared autowired service.
     *
     * @return \Eccube\Form\Validator\EmailValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Form/Validator/EmailValidator.php';

        return $container->privates['Eccube\\Form\\Validator\\EmailValidator'] = new \Eccube\Form\Validator\EmailValidator();
    }
}