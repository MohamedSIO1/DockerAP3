<?php

namespace Container48zxgmB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCredentialRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\CredentialRepository' shared autowired service.
     *
     * @return \App\Repository\CredentialRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\CredentialRepository'] = new \App\Repository\CredentialRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}