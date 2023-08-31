<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/', name: 'app_product')]
    public function index(CategoryRepository $categoryRepository ,ProductRepository $productRepository): Response
    {
        $category_id = "";

        if($_POST){
            $category_id = $_POST["categories"];
            if($category_id){
                return $this->render('product/index.html.twig', [
                    'categories' => $categoryRepository->findAll(),
                    'products' => $productRepository->findByCategory($category_id),
                    'typeSelected' => $category_id,
                    'form' => $category_id,
                ]);
            }
        };
        
        return $this->render('product/index.html.twig', [
            'categories' => $categoryRepository->findBy([], ['label' => 'ASC']),
            'products' => $productRepository->findBy([], ['label' => 'ASC']),
            'typeSelected' => $category_id,
        ]);
    }
}
