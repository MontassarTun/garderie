<?php

namespace Common\AccessBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class mainControllerTest extends WebTestCase
{
    public function testLogin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/login');
    }

    public function testRegistration()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/registration');
    }

    public function testRenewpassword()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/renew_password');
    }

    public function testChangepassword()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/change_password');
    }

}
