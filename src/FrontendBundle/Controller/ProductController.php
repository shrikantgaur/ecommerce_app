<?php

namespace App\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends AbstractController
{
    public function shop(): Response
    {
        $products = ['products'];
        return $this->render('@AppFrontend/product/shop.html.twig', [
            'products' => $products
        ]);
    }

    public function show($id): Response
    {
        $product = [
                'id' => 1,
                'name' => 'Product A',
                'description' => 'This is Product A',
                'price' => 10.99,
                'image' => "image1.png"           
        ];
        return $this->render('@AppFrontend/product/single.html.twig', [
            'product' => $product
        ]);
    }

    public function cart(): Response
    {
        $item = [
            'id' => 1,
            'name' => 'Product A',
            'description' => 'This is Product A',
            'price' => 10.99,
            'image' => "image1.png"           
        ];
        $cart = [
            'id' => 1,
            'name' => 'Product A',
            'description' => 'This is Product A',
            'price' => 10.99,
            'image' => "image1.png"           
        ];
        return $this->render('@AppFrontend/product/cart.html.twig', [
            'item' => $item,
            'cart' => $cart
        ]);
    }

    public function checkout(): Response
    {
        $cart = ['total'=>100];
        return $this->render('@AppFrontend/product/checkout.html.twig', [
            'cart' => $cart
        ]);
    }

    public function checkout_confirm(){
        $products = ['products'];
        return $this->render('@AppFrontend/product/checkout.html.twig', [
            'products' => $products
        ]);
    }

    public function cart_add(){
        $cart = ['total'=>100];
        return $this->render('@AppFrontend/product/checkout.html.twig', [
            'cart' => $cart
        ]);
    }
    
}
