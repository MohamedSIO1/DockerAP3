<?php

namespace Container48zxgmB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWarehouseRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\WarehouseRepository' shared autowired service.
     *
     * @return \App\Repository\WarehouseRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\WarehouseRepository'] = new \App\Repository\WarehouseRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
