<?php

namespace ContainerZOrATML;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LiOQ1RgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LiOQ1Rg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LiOQ1Rg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'post' => ['privates', '.errored..service_locator.LiOQ1Rg.App\\Entity\\Post', NULL, 'Cannot autowire service ".service_locator.LiOQ1Rg": it references class "App\\Entity\\Post" but no such service exists.'],
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
        ], [
            'post' => 'App\\Entity\\Post',
            'serializer' => '?',
        ]);
    }
}
