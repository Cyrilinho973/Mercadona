<?php

namespace App\Tests\Entity;

use App\Entity\Discount;
use PHPUnit\Framework\TestCase;

class DiscountTest extends TestCase
{
  public function testToString()
  {
    $discount = (new Discount())
      ->setLabel("Promotion été - 10%");

    $this->assertEquals("Promotion été - 10%", $discount);
  }
}

?>