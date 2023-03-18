<?php

namespace App\FrontendBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class FrontendBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->loadFromExtension('twig', [
            'paths' => [
                __DIR__.'/templates' => 'AppFrontend',
            ],
        ]);

        $container->setParameter('frontend_bundle/.public_dir', __DIR__.'/public');
    }
}
