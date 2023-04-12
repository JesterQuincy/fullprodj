<?php

namespace ContainerZM22mvx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeague_Oauth2Server_Command_ListClientsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'league.oauth2_server.command.list_clients' shared service.
     *
     * @return \League\Bundle\OAuth2ServerBundle\Command\ListClientsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server-bundle/src/Command/ListClientsCommand.php';

        $container->privates['league.oauth2_server.command.list_clients'] = $instance = new \League\Bundle\OAuth2ServerBundle\Command\ListClientsCommand(($container->privates['league.oauth2_server.manager.doctrine.client'] ?? $container->load('getLeague_Oauth2Server_Manager_Doctrine_ClientService')));

        $instance->setName('league:oauth2-server:list-clients');
        $instance->setDescription('Lists existing OAuth2 clients');

        return $instance;
    }
}
