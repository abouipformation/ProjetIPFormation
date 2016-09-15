<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 14/09/16
 * Time: 16:43
 */

namespace PortFolioBundle\Tests\Controller;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PortFolioControllerTest extends WebTestCase
{
    public function testHome()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');
        return $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testContact()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/portfolio/contact');
        return $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testAbout()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/portfolio/about');
        return $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testProject()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/portfolio/project');
        return $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}