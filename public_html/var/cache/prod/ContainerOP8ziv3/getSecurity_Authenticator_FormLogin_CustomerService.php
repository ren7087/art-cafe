<?php

namespace ContainerOP8ziv3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_FormLogin_CustomerService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'security.authenticator.form_login.customer' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AbstractAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/InteractiveAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AbstractLoginFormAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/FormLoginAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/CustomAuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationFailureHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/CustomAuthenticationFailureHandler.php';

        return $container->privates['security.authenticator.form_login.customer'] = new \Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator(($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), ($container->privates['Eccube\\Security\\Core\\User\\CustomerProvider'] ?? $container->load('getCustomerProviderService')), new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler(($container->privates['eccube.security.success_handler'] ?? $container->load('getEccube_Security_SuccessHandlerService')), ['login_path' => 'mypage_login', 'default_target_path' => 'homepage', 'always_use_default_target_path' => false, 'target_path_parameter' => '_target_path', 'use_referer' => false], 'customer'), new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler(($container->privates['eccube.security.failure_handler'] ?? $container->load('getEccube_Security_FailureHandlerService')), ['login_path' => 'mypage_login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']), ['enable_csrf' => true, 'check_path' => 'mypage_login', 'login_path' => 'mypage_login', 'username_parameter' => 'login_email', 'password_parameter' => 'login_pass', 'use_forward' => false, 'require_previous_session' => false, 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true, 'form_only' => false]);
    }
}
