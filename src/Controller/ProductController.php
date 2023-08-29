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
        $discount = [
            'id' => 1,
            'label' => 'Promotion de 10%',
            'rate' => 10,
            'stop_date' => '10/12/2023',
        ];
        $products = [
            [
                'id' => 1,
                'label' => 'Baskets rouges',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',
                'price' => 45.99,
                'category' => 'Chaussures Homme',
                'image_name' => 'basket.jpg',
            ],
            [
                'id' => 2,
                'label' => 'Jeans de cow-boy',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',
                'price' => 33.49,
                'category' => 'Pantalons Homme',
                'image_name' => 'jeans.jpg',
            ],
            [
                'id' => 3,
                'label' => 'Chemises coton',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',
                'price' => 17.29,
                'category' => 'Chemises Homme',
                'image_name' => 'chemises.jpg',
            ],
            [
                'id' => 4,
                'label' => 'Echarpe hiver',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',
                'price' => 21.99,
                'category' => 'Accessoires Femme',
                'image_name' => 'echarpe.jpg',
            ],
            [
                'id' => 5,
                'label' => 'Escarpins vintage',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',
                'price' => 41.99,
                'category' => 'Chaussures Femme',
                'image_name' => 'escarpin.jpg',
            ],
            [
                'id' => 6,
                'label' => 'Chaussures à talon haut',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',
                'price' => 32.59,
                'category' => 'Chaussures Femme',
                'image_name' => 'talons.jpg',
            ],
        ];
        return $this->render('product/index.html.twig', [
            'categories' => $categories,
            'typeSelected' => "",
            'products' => $products,
        ]);
    }
}
