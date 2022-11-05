<?php

namespace ContainerOP8ziv3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTradeLawRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Repository\TradeLawRepository' shared autowired service.
     *
     * @return \Eccube\Repository\TradeLawRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/TradeLawRepository.php';

        return $container->privates['Eccube\\Repository\\TradeLawRepository'] = new \Eccube\Repository\TradeLawRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
