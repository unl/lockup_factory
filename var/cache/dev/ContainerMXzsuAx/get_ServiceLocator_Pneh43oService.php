<?php

namespace ContainerMXzsuAx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Pneh43oService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Pneh43o' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Pneh43o'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'auth' => ['privates', 'App\\Service\\Auth', 'getAuthService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'lockupsGenerator' => ['privates', 'App\\Service\\LockupsGenerator', 'getLockupsGeneratorService', true],
            'validator' => ['privates', 'debug.validator', 'getDebug_ValidatorService', false],
        ], [
            'auth' => 'App\\Service\\Auth',
            'doctrine' => '?',
            'lockupsGenerator' => 'App\\Service\\LockupsGenerator',
            'validator' => '?',
        ]);
    }
}
