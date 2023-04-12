<?php

namespace ContainerZM22mvx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_League_Oauth2Server_Command_ClearExpiredTokens_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.league.oauth2_server.command.clear_expired_tokens.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.league.oauth2_server.command.clear_expired_tokens.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('league:oauth2-server:clear-expired-tokens', [], 'Clears all expired access and/or refresh tokens and/or auth codes', false, #[\Closure(name: 'league.oauth2_server.command.clear_expired_tokens', class: 'League\\Bundle\\OAuth2ServerBundle\\Command\\ClearExpiredTokensCommand')] function () use ($container): \League\Bundle\OAuth2ServerBundle\Command\ClearExpiredTokensCommand {
            return ($container->privates['league.oauth2_server.command.clear_expired_tokens'] ?? $container->load('getLeague_Oauth2Server_Command_ClearExpiredTokensService'));
        });
    }
}
