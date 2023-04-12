<?php

namespace ContainerZM22mvx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_League_Oauth2Server_Command_CreateClient_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.league.oauth2_server.command.create_client.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.league.oauth2_server.command.create_client.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('league:oauth2-server:create-client', [], 'Creates a new OAuth2 client', false, #[\Closure(name: 'league.oauth2_server.command.create_client', class: 'League\\Bundle\\OAuth2ServerBundle\\Command\\CreateClientCommand')] function () use ($container): \League\Bundle\OAuth2ServerBundle\Command\CreateClientCommand {
            return ($container->privates['league.oauth2_server.command.create_client'] ?? $container->load('getLeague_Oauth2Server_Command_CreateClientService'));
        });
    }
}
