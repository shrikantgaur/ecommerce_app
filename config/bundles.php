<?php

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Symfony\Bundle\MakerBundle\MakerBundle::class => ['dev' => true],
    App\FrontendBundle\FrontendBundle::class => ['all' => true],
    App\AdminBundle\AdminBundle::class => ['all' => true,'test' => true],
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
];
