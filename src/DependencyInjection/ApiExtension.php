<?php

declare(strict_types=1);

namespace CarlosChininin\ApiBundle\DependencyInjection;

use CarlosChininin\ApiBundle\AbstractApi;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

class ApiExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $container->registerForAutoconfiguration(AbstractApi::class)
            ->addTag('controller.service_arguments');
    }
}
