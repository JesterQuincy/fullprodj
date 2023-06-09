<?php

namespace ContainerGMaEg4F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_Doctrine_Orm_EntityValueResolver_InnerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'debug.doctrine.orm.entity_value_resolver.inner' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/ArgumentResolver/EntityValueResolver.php';

        return $container->privates['debug.doctrine.orm.entity_value_resolver.inner'] = new \Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver(($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->privates['doctrine.orm.entity_value_resolver.expression_language'] ??= new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()));
    }
}
