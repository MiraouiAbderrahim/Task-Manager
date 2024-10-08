<?php

namespace ContainerYfIBaUi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTask1TypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\Task1Type' shared autowired service.
     *
     * @return \App\Form\Task1Type
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Task1Type.php';

        return $container->privates['App\\Form\\Task1Type'] = new \App\Form\Task1Type();
    }
}
