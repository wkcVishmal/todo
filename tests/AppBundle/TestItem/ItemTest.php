<?php
/**
 * Created by PhpStorm.
 * User: chamika
 * Date: 9/21/16
 * Time: 3:10 PM
 */

namespace AppBundle\TestItem;


use AppBundle\Entity\Item;

class ItemTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateItem(){
        $item = new Item();
        $item->setId(11);
        $item->setName("TestItem1");
        $item->setState("notDone");
        $item->setPriority("normal");

        $this->assertEquals("11",$item->getId());
        $this->assertEquals("TestItem1",$item->getName());
        $this->assertEquals("notDone",$item->getState());
        $this->assertEquals("normal",$item->getPriority());
    }
}
