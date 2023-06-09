<?php

namespace ContainerQuBSaSj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0ZWZcejService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0ZWZcej' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0ZWZcej'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'anneepedagogique' => ['privates', '.errored..service_locator.0ZWZcej.App\\Entity\\Anneepedagogique', NULL, 'Cannot autowire service ".service_locator.0ZWZcej": it references class "App\\Entity\\Anneepedagogique" but no such service exists.'],
            'anneepedagogiqueRepository' => ['privates', 'App\\Repository\\AnneepedagogiqueRepository', 'getAnneepedagogiqueRepositoryService', true],
        ], [
            'anneepedagogique' => 'App\\Entity\\Anneepedagogique',
            'anneepedagogiqueRepository' => 'App\\Repository\\AnneepedagogiqueRepository',
        ]);
    }
}
