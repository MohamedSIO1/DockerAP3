<?php

namespace Container48zxgmB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IDorLiYService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.iDorLiY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iDorLiY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'credentialRepository' => ['privates', 'App\\Repository\\CredentialRepository', 'getCredentialRepositoryService', true],
            'serializer' => ['privates', 'serializer', 'getSerializerService', false],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'credentialRepository' => 'App\\Repository\\CredentialRepository',
            'serializer' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
