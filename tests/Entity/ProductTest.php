<?php

namespace App\Tests\Entity;

use App\Entity\Product;
use App\Entity\Discount;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
  public function testCalculatePriceDiscount()
  {
    $discount = (new Discount())
      ->setRate(10);
    
    $product = (new Product())
      ->setPrice(35.70)
      ->setDiscount($discount);

    $this->assertEquals(32.13, $product->calculatePriceDiscount());
  }

  public function testCheckDiscountValidity()
  {
    $startDateGone = new \DateTime();
    $startDateGone->sub(new \DateInterval('P2D'));
    $stopDateGone = new \DateTime();
    $stopDateGone->sub(new \DateInterval('P1D'));
    $discountGone = (new Discount())
      ->setLabel("Promotion 10%")
      ->setRate(10)
      ->setStartDate($startDateGone)
      ->setStopDate($stopDateGone);
    $product1 = (new Product())
      ->setDiscount($discountGone);
    $this->assertEquals(false, $product1->checkDiscountValidity());

    $startDateGoing = new \DateTime();
    $startDateGoing->sub(new \DateInterval('P1D'));
    $stopDateGoing = new \DateTime();
    $stopDateGoing->add(new \DateInterval('P1D'));
    $discountGoing = (new Discount())
      ->setLabel("Promotion 10%")
      ->setRate(10)
      ->setStartDate($startDateGoing)
      ->setStopDate($stopDateGoing);
    $product2 = (new Product())
      ->setDiscount($discountGoing);
    $this->assertEquals(true, $product2->checkDiscountValidity());

    $startDateWillGo = new \DateTime();
    $startDateWillGo->add(new \DateInterval('P1D'));
    $stopDateWillGo = new \DateTime();
    $stopDateWillGo->add(new \DateInterval('P2D'));
    $discountWillGo = (new Discount())
      ->setLabel("Promotion 10%")
      ->setRate(10)
      ->setStartDate($startDateWillGo)
      ->setStopDate($stopDateWillGo);
    $product3 = (new Product())
      ->setDiscount($discountWillGo);
    $this->assertEquals(false, $product3->checkDiscountValidity());
  }
}

?>