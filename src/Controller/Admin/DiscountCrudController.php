<?php

namespace App\Controller\Admin;

use App\Entity\Discount;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class DiscountCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Discount::class;
    }
}
