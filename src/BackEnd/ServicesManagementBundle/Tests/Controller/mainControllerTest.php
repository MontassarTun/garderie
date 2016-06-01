<?php

namespace BackEnd\ServicesManagementBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class mainControllerTest extends WebTestCase
{
    public function testAdd_service()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin_space/add_service');
    }

    public function testRecoveringservice()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin_space/recovering_service');
    }

    public function testAddservice()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin_space/dele');
    }

}
