<?php

namespace ContainerGMaEg4F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeague_Oauth2Server_SymfonyLeagueListenerProviderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'league.oauth2_server.symfony_league_listener_provider' shared service.
     *
     * @return \League\Bundle\OAuth2ServerBundle\Service\SymfonyLeagueEventListenerProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/league/event/src/ListenerProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server-bundle/src/Service/SymfonyLeagueEventListenerProvider.php';

        return $container->privates['league.oauth2_server.symfony_league_listener_provider'] = new \League\Bundle\OAuth2ServerBundle\Service\SymfonyLeagueEventListenerProvider(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
