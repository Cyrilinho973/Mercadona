<?php

namespace App\Tests\Entity;

use App\Entity\Discount;
use App\Entity\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
  public function testToString()
  {
    $discount = (new Discount())
      ->setRate(10);
    
    $product = (new Product())
      ->setPrice(100)
      ->setDiscount($discount);

    $this->assertEquals(90, $product->calculatePriceDiscount());
  }
}

?>