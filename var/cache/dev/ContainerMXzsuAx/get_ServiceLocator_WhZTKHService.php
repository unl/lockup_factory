<?php

namespace ContainerMXzsuAx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WhZTKHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.whZT_KH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.whZT_KH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'auth' => ['privates', 'App\\Service\\Auth', 'getAuthService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'auth' => 'App\\Service\\Auth',
            'doctrine' => '?',
        ]);
    }
}