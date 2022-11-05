<?php

namespace ContainerOP8ziv3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeague_Oauth2Server_Manager_Doctrine_ClientService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'league.oauth2_server.manager.doctrine.client' shared service.
     *
     * @return \League\Bundle\OAuth2ServerBundle\Manager\Doctrine\ClientManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server-bundle/src/Manager/ClientManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server-bundle/src/Manager/Doctrine/ClientManager.php';

        return $container->privates['league.oauth2_server.manager.doctrine.client'] = new \League\Bundle\OAuth2ServerBundle\Manager\Doctrine\ClientManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), 'League\\Bundle\\OAuth2ServerBundle\\Model\\Client');
    }
}
