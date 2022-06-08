<?php

declare(strict_types=1);

/*
 * This file is part of the PIDIA
 * (c) Carlos Chininin <cio@pidia.pe>
 */

namespace CarlosChininin\ApiBundle;

use CarlosChininin\ApiBundle\DependencyInjection\CompilerPass\ControllersAsServices;
use Symfony\Component\DependencyInjection\Compiler\PassConfig;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

final class CarlosChinininApiBundle extends AbstractBundle
{
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $container->import('../config/services.yaml');
    }

    public function build(ContainerBuilder $container)
    {

        $container->addCompilerPass(new ControllersAsServices(), PassConfig::TYPE_BEFORE_OPTIMIZATION, -1);

        parent::build($container);
    }
}
