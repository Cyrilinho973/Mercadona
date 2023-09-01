<?php

namespace App\Controller\Admin;

use App\Entity\Discount;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

class DiscountCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Discount::class;
    }

    public function configureFields(string $pageName): iterable
    {  
        yield TextField::new('label');
        yield IntegerField:: new('rate');
        yield DateTimeField::new('start_date');
        yield DateTimeField::new('stop_date');
    }
}
