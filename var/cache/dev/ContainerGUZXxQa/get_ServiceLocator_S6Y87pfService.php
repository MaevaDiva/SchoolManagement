<?php

namespace ContainerGUZXxQa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_S6Y87pfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.S6Y87pf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.S6Y87pf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'eleve' => ['privates', '.errored..service_locator.S6Y87pf.App\\Entity\\Eleve', NULL, 'Cannot autowire service ".service_locator.S6Y87pf": it references class "App\\Entity\\Eleve" but no such service exists.'],
        ], [
            'eleve' => 'App\\Entity\\Eleve',
        ]);
    }
}
