<?php

namespace ContainerGMaEg4F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeague_Oauth2Server_Listener_AuthorizationRequestUserResolvingService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'league.oauth2_server.listener.authorization_request_user_resolving' shared service.
     *
     * @return \League\Bundle\OAuth2ServerBundle\EventListener\AuthorizationRequestUserResolvingListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server-bundle/src/EventListener/AuthorizationRequestUserResolvingListener.php';

        $a = ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService'));

        if (isset($container->privates['league.oauth2_server.listener.authorization_request_user_resolving'])) {
            return $container->privates['league.oauth2_server.listener.authorization_request_user_resolving'];
        }

        return $container->privates['league.oauth2_server.listener.authorization_request_user_resolving'] = new \League\Bundle\OAuth2ServerBundle\EventListener\AuthorizationRequestUserResolvingListener($a);
    }
}
