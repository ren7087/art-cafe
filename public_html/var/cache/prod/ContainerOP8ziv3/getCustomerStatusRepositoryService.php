<?php

namespace ContainerOP8ziv3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCustomerStatusRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Repository\Master\CustomerStatusRepository' shared autowired service.
     *
     * @return \Eccube\Repository\Master\CustomerStatusRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/Master/CustomerStatusRepository.php';

        return $container->privates['Eccube\\Repository\\Master\\CustomerStatusRepository'] = new \Eccube\Repository\Master\CustomerStatusRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}