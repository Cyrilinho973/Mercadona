<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/', name: 'app_product')]
    public function index(): Response
    {
        $categories = [
            [
                'id' => 1,
                'label' => 'Chaussures',
            ],
            [
                'id' => 2,
                'label' => 'Pantalons',
            ],
        ];
        return $this->render('product/index.html.twig', [
            'categories' => $categories,
            'typeSelected' => "",
        ]);
    }
}
