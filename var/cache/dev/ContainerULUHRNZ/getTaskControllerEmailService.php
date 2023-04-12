<?php

namespace ContainerULUHRNZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTaskControllerEmailService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\TaskControllerEmail' shared autowired service.
     *
     * @return \App\Controller\TaskControllerEmail
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/TaskControllerEmail.php';

        $container->services['App\\Controller\\TaskControllerEmail'] = $instance = new \App\Controller\TaskControllerEmail(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\TaskControllerEmail', $container));

        return $instance;
    }
}
