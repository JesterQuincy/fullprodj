<?php

namespace ContainerGMaEg4F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSession_Storage_Factory_MockFileService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'session.storage.factory.mock_file' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorageFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/SessionStorageFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/MockFileSessionStorageFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/SessionBagInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/MetadataBag.php';

        return $container->privates['session.storage.factory.mock_file'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorageFactory(($container->targetDir.''.'/sessions'), 'MOCKSESSID', new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0));
    }
}
