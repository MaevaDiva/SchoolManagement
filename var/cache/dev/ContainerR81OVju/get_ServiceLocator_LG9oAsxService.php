<?php

namespace ContainerR81OVju;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LG9oAsxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lG9oAsx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lG9oAsx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'anneepedagogiqueRepository' => ['privates', 'App\\Repository\\AnneepedagogiqueRepository', 'getAnneepedagogiqueRepositoryService', true],
        ], [
            'anneepedagogiqueRepository' => 'App\\Repository\\AnneepedagogiqueRepository',
        ]);
    }
}
