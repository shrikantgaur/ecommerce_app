<?php

namespace App\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin", name="_admin")
 */
class AdminController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('@AdminBundle/index.html.twig');
    }  
    
}
