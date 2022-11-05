<?php

namespace ContainerOP8ziv3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMemberProviderService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Security\Core\User\MemberProvider' shared autowired service.
     *
     * @return \Eccube\Security\Core\User\MemberProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Security/Core/User/MemberProvider.php';

        return $container->privates['Eccube\\Security\\Core\\User\\MemberProvider'] = new \Eccube\Security\Core\User\MemberProvider(($container->privates['Eccube\\Repository\\MemberRepository'] ?? $container->load('getMemberRepositoryService')));
    }
}
