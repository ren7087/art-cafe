<?php

namespace ContainerOP8ziv3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEccube_Security_FailureHandlerService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'eccube.security.failure_handler' shared autowired service.
     *
     * @return \Eccube\Security\Http\Authentication\EccubeAuthenticationFailureHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationFailureHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/DefaultAuthenticationFailureHandler.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Security/Http/Authentication/EccubeAuthenticationFailureHandler.php';

        return $container->privates['eccube.security.failure_handler'] = new \Eccube\Security\Http\Authentication\EccubeAuthenticationFailureHandler(($container->services['http_kernel'] ?? $container->getHttpKernelService()), ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), [], ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
