<?php

namespace ContainerS1fCgB9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHomeController2Service extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Logistics\HomeController' shared autowired service.
     *
     * @return \App\Controller\Logistics\HomeController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Logistics\\HomeController'] = $instance = new \App\Controller\Logistics\HomeController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\Logistics\\HomeController', $container));

        return $instance;
    }
}
