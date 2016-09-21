<?php
namespace AppBundle\Util;
use AppBundle\Util\Calculator;
//use AppBundle\Controller\ItemController;

class Test extends \PHPUnit_Framework_TestCase
{
    public function testAdd(){
        $calc = new Calculator();
        $result = $calc->add(30, 12);

        $this->assertEquals(42, $result);

    }
}
