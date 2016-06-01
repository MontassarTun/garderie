<?php

namespace BackEnd\NewsBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class mainControllerTest extends WebTestCase
{
    public function testAddnews()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin_space/add_news');
    }

    public function testRecoveringnews()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin_space/recovering_news');
    }

    public function testDeletenews()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin_space/delete_news');
    }

}
