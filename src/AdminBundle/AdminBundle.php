<?php

namespace App\AdminBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class AdminBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->loadFromExtension('twig', [
            'paths' => [
                __DIR__.'/templates' => 'AdminBundle',
            ],
        ]);

        $container->setParameter('admin_bundle/.public_dir', __DIR__.'/public');
    }
}
