<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }

    
    public function configureFields(string $pageName): iterable
    {  
        yield TextField::new('label');
        yield ImageField::new('imageName', 'Photo')->onlyOnIndex()->setBasePath('/images/products');
        yield TextField::new('price');
        yield AssociationField::new('category');
        yield TextareaField::new('imageFile')->setFormType(VichImageType::class)->onlyOnForms();
        yield AssociationField::new('discount');
    }
}