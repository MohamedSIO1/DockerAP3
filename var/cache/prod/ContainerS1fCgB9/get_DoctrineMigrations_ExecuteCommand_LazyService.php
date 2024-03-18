<?php

namespace ContainerS1fCgB9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_DoctrineMigrations_ExecuteCommand_LazyService extends App_KernelProdContainer
{
    /*
     * Gets the private '.doctrine_migrations.execute_command.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.doctrine_migrations.execute_command.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('doctrine:migrations:execute', [], 'Execute one or more migration versions up or down manually.', false, #[\Closure(name: 'doctrine_migrations.execute_command', class: 'Doctrine\\Migrations\\Tools\\Console\\Command\\ExecuteCommand')] fn (): \Doctrine\Migrations\Tools\Console\Command\ExecuteCommand => ($container->privates['doctrine_migrations.execute_command'] ?? $container->load('getDoctrineMigrations_ExecuteCommandService')));
    }
}
