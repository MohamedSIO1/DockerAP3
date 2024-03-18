<?php

namespace ContainerS1fCgB9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Listener_Exception_ValidationService extends App_KernelProdContainer
{
    /*
     * Gets the private 'api_platform.listener.exception.validation' shared service.
     *
     * @return \ApiPlatform\Symfony\Validator\EventListener\ValidationExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['api_platform.listener.exception.validation'] = new \ApiPlatform\Symfony\Validator\EventListener\ValidationExceptionListener(($container->privates['serializer'] ?? self::getSerializerService($container)), $container->parameters['api_platform.error_formats'], $container->parameters['api_platform.exception_to_status'], ($container->privates['api_platform.listener.exception'] ?? $container->load('getApiPlatform_Listener_ExceptionService')));
    }
}
