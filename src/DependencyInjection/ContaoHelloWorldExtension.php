<?php

namespace Solidconcept\ContaoHelloWorldBundle\DependencyInjection;

use ReflectionExtension;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\containerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class ContaoHelloWorldExtension extends Extension
{
    public function load(array $mergedConfig, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../Resources/config')
        );
        $loader->load('service.yml');
    }
}