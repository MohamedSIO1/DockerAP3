<?php

namespace ContainerS1fCgB9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_LocaleSwitcherService extends App_KernelProdContainer
{
    /*
     * Gets the private 'translation.locale_switcher' shared service.
     *
     * @return \Symfony\Component\Translation\LocaleSwitcher
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['translation.locale_switcher'] = new \Symfony\Component\Translation\LocaleSwitcher('fr', new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['slugger'] ??= new \Symfony\Component\String\Slugger\AsciiSlugger('fr'));
            yield 1 => ($container->services['translator'] ?? self::getTranslatorService($container));
        }, 2), ($container->privates['router.request_context'] ?? self::getRouter_RequestContextService($container)));
    }
}
