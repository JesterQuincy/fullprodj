<?php

namespace ContainerGMaEg4F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeague_Oauth2Server_Command_ClearExpiredTokensService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'league.oauth2_server.command.clear_expired_tokens' shared service.
     *
     * @return \League\Bundle\OAuth2ServerBundle\Command\ClearExpiredTokensCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server-bundle/src/Command/ClearExpiredTokensCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server-bundle/src/Manager/AccessTokenManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server-bundle/src/Manager/InMemory/AccessTokenManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server-bundle/src/Manager/RefreshTokenManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server-bundle/src/Manager/InMemory/RefreshTokenManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server-bundle/src/Manager/AuthorizationCodeManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server-bundle/src/Manager/InMemory/AuthorizationCodeManager.php';

        $container->privates['league.oauth2_server.command.clear_expired_tokens'] = $instance = new \League\Bundle\OAuth2ServerBundle\Command\ClearExpiredTokensCommand(($container->privates['league.oauth2_server.manager.in_memory.access_token'] ??= new \League\Bundle\OAuth2ServerBundle\Manager\InMemory\AccessTokenManager(true)), ($container->privates['league.oauth2_server.manager.in_memory.refresh_token'] ??= new \League\Bundle\OAuth2ServerBundle\Manager\InMemory\RefreshTokenManager(NULL)), ($container->privates['league.oauth2_server.manager.in_memory.authorization_code'] ??= new \League\Bundle\OAuth2ServerBundle\Manager\InMemory\AuthorizationCodeManager(NULL)));

        $instance->setName('league:oauth2-server:clear-expired-tokens');
        $instance->setDescription('Clears all expired access and/or refresh tokens and/or auth codes');

        return $instance;
    }
}