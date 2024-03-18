<?php

namespace Container48zxgmB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_M8GYPKuService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.M8GYPKu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.M8GYPKu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'cartService' => ['privates', 'App\\Service\\CartService', 'getCartServiceService', true],
            'storeRepository' => ['privates', 'App\\Repository\\StoreRepository', 'getStoreRepositoryService', true],
        ], [
            'cartService' => 'App\\Service\\CartService',
            'storeRepository' => 'App\\Repository\\StoreRepository',
        ]);
    }
}
