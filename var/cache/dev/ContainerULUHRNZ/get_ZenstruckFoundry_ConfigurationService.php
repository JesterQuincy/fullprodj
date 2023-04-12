<?php

namespace ContainerULUHRNZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ZenstruckFoundry_ConfigurationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public '.zenstruck_foundry.configuration' shared service.
     *
     * @return \Zenstruck\Foundry\Configuration
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/Configuration.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/StoryManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/ModelFactoryManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/Instantiator.php';
        include_once \dirname(__DIR__, 4).'/vendor/fakerphp/faker/src/Faker/Generator.php';
        include_once \dirname(__DIR__, 4).'/vendor/fakerphp/faker/src/Faker/Factory.php';

        $container->services['.zenstruck_foundry.configuration'] = $instance = new \Zenstruck\Foundry\Configuration([], [], 'schema', []);

        $instance->setManagerRegistry(($container->privates['.zenstruck_foundry.chain_manager_registry'] ?? $container->load('get_ZenstruckFoundry_ChainManagerRegistryService')));
        $instance->setStoryManager(new \Zenstruck\Foundry\StoryManager(new RewindableGenerator(function () use ($container) {
            return new \EmptyIterator();
        }, 0)));
        $instance->setModelFactoryManager(new \Zenstruck\Foundry\ModelFactoryManager(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['App\\Factory\\UserFactory'] ??= new \App\Factory\UserFactory());
        }, 1)));
        $instance->setInstantiator(new \Zenstruck\Foundry\Instantiator());
        $instance->setFaker(\Faker\Factory::create());
        $instance->enableDefaultProxyAutoRefresh();

        return $instance;
    }
}
