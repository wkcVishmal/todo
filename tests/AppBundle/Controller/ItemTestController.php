<?php


namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ItemTestController extends WebTestCase
{
    //Test home page
    public function testShowPost()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'http://localhost:8000/');

        $this->assertGreaterThan(
            0,
            $crawler->filter('div:contains("ToDo List")')->count()
        );

        //$heading = $crawler->filter('html')->first()->text();
        //$this->assertEquals('head', $heading);
    }

    //test for getdata function (Get item list)
    public function testItemApi()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'http://localhost:8000/listdata');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertNotEmpty($client->getResponse()->getContent());
    }

    //test for save item API
    public function testSaveItem()
    {
        $client = static::createClient();

        $json = '{"name":"FOO", "state":"fubar City", "priority":"fubar","created":"null"}';
        $jsonDecode = json_decode($json, true);

        $crawler = $client->request('POST', 'http://localhost:8000/saveItem', $jsonDecode);
        $this->assertNotEmpty($client->getResponse()->getContent());
    }

    public function testOrderByPriority(){

    }

    public function testOrderByPrioDate(){

    }

    public function testDelete(){
        $client = static::createClient();
        $json = '{"id":"5"}';
        $jsonDecode = json_decode($json, true);
        $crawler = $client->request('POST', 'http://localhost:8000/deleteItem', $jsonDecode);
        $this->assertNotEmpty($client->getResponse()->getContent());
    }

}