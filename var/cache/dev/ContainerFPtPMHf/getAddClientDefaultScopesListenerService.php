<?php

namespace ContainerFPtPMHf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddClientDefaultScopesListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'League\Bundle\OAuth2ServerBundle\EventListener\AddClientDefaultScopesListener' shared service.
     *
     * @return \League\Bundle\OAuth2ServerBundle\EventListener\AddClientDefaultScopesListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server-bundle/src/EventListener/AddClientDefaultScopesListener.php';

        return $container->privates['League\\Bundle\\OAuth2ServerBundle\\EventListener\\AddClientDefaultScopesListener'] = new \League\Bundle\OAuth2ServerBundle\EventListener\AddClientDefaultScopesListener($container->parameters['league.oauth2_server.scopes.default']);
    }
}