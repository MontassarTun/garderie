<?php

namespace BackEnd\KidsManagementBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class mainControllerTest extends WebTestCase
{
    public function testAddplug()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin_space/add_plug');
    }

    public function testRecoveringplug()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin_space/recovering_plug');
    }

    public function testUpdateplug()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin_space/update_plug');
    }

    public function testDeleteplug()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin_space/delete_plug');
    }

}
