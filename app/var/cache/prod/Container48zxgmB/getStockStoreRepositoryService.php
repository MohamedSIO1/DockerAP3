<?php

namespace Container48zxgmB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStockStoreRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\StockStoreRepository' shared autowired service.
     *
     * @return \App\Repository\StockStoreRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\StockStoreRepository'] = new \App\Repository\StockStoreRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}