<?php

namespace ExamplePlugin;

use Shopware\Components\Plugin;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ExamplePlugin extends Plugin
{
    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        require __DIR__ . '/vendor/autoload.php';

        parent::build($container);
    }
}
