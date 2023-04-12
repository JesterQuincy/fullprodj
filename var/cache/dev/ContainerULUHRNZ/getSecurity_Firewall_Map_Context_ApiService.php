<?php

namespace ContainerULUHRNZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Map_Context_ApiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.firewall.map.context.api' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ExceptionListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/HttpUtils.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';

        $a = ($container->privates['security.authenticator.oauth2.api'] ?? $container->load('getSecurity_Authenticator_Oauth2_ApiService'));

        if (isset($container->privates['security.firewall.map.context.api'])) {
            return $container->privates['security.firewall.map.context.api'];
        }
        $b = ($container->services['router'] ?? $container->getRouterService());

        return $container->privates['security.firewall.map.context.api'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.channel_listener'] ?? $container->load('getSecurity_ChannelListenerService'));
            yield 1 => ($container->privates['debug.security.firewall.authenticator.api'] ?? $container->load('getDebug_Security_Firewall_Authenticator_ApiService'));
            yield 2 => ($container->privates['security.access_listener'] ?? $container->load('getSecurity_AccessListenerService'));
        }, 3), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($container->privates['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->privates['security.authentication.trust_resolver'] ??= new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver()), new \Symfony\Component\Security\Http\HttpUtils($b, $b, '{^https?://%s$}i', '{^https://%s$}i'), 'api', $a, NULL, NULL, ($container->privates['logger'] ?? $container->getLoggerService()), true), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('api', 'security.user_checker', '.security.request_matcher.yy_ZK6T', true, true, 'security.user.provider.concrete.app_user_provider', NULL, 'security.authenticator.oauth2.api', NULL, NULL, [0 => 'oauth2'], NULL, NULL));
    }
}
