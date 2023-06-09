<?php

namespace ContainerGUZXxQa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WrlJH2aService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wrlJH2a' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wrlJH2a'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'eleveRepository' => ['privates', 'App\\Repository\\EleveRepository', 'getEleveRepositoryService', true],
        ], [
            'eleveRepository' => 'App\\Repository\\EleveRepository',
        ]);
    }
}
