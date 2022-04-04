<?php

namespace ContainerMXzsuAx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ris3J8lService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ris3J8l' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ris3J8l'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'auth' => ['privates', 'App\\Service\\Auth', 'getAuthService', true],
        ], [
            'auth' => 'App\\Service\\Auth',
        ]);
    }
}