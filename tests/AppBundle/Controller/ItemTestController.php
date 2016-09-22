<?php


namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ItemTestController extends WebTestCase
{
    //test for getdata function (Get item list)
    public function testItemApi()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'http://localhost:8000/listdata');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        //print_r($client->getResponse()->getContent());
        //exit;
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
        $res = $client->getResponse()->getContent();

    }

    //Test the oder of list is odered by priority high > normal > low
    public function testOrderByPriority(){
        $client = static::createClient();

        $crawler = $client->request('GET', 'http://localhost:8000/listdata');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $items = $client->getResponse()->getContent();
        $data = json_decode($items, true);
        $p1 = 0;
        foreach ($data as $item){
            $p2 = $item['priority'];
            $this->assertGreaterThanOrEqual($p1,$p2);
            $p1 = $p2;
        }

    }

    //Test list is odered by priority desc and created date asc
    public function testOrderByPrioDate(){
        $client = static::createClient();

        $crawler = $client->request('GET', 'http://localhost:8000/listdata');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $items = $client->getResponse()->getContent();
        //exit;
        $data = json_decode($items, true);
        $p1 = 0;
        $d1 = 0;
        foreach ($data as $item){
            $p2 = $item['priority'];
            $d2 = $item['created'];
            if($p1 == $p2){
                $this->assertLessThan($d1,$d2);
            }
        }
    }


    //test for deletion API
    public function testDelete(){
        $client = static::createClient();
        $json = '{"id":"5"}';
        $jsonDecode = json_decode($json, true);
        $crawler = $client->request('DELETE', 'http://localhost:8000/delete/{$jsonDecode}');
        $this->assertNotEmpty($client->getResponse()->getContent());
    }

    /*
    public function testShowPost()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/post/hello-world');

        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("Hello World")')->count()
        );
    }
    */

}