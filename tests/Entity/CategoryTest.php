<?php

namespace App\Tests\Entity;

use App\Entity\Category;
use PHPUnit\Framework\TestCase;

class CategoryTest extends TestCase
{
  public function testToString()
  {
    $category = (new Category())
      ->setLabel("Chaussures Femme");

    $this->assertEquals("Chaussures Femme", $category);
  }
}

?>