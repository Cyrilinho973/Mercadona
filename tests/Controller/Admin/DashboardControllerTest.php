<?php

namespace App\Tests\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DashboardControllerTest extends WebTestCase
{
    public function testDashboardPageIsUp()
    {
      $client = static::createClient();
      $client->request('GET', '/admin');
      $this->assertSame(200, $client->getResponse()->getStatusCode());
      
      echo $client->getResponse()->getContent();
    }
}

?>