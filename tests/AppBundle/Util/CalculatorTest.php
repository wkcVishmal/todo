<?php
/**
 * Created by PhpStorm.
 * User: chamika
 * Date: 9/20/16
 * Time: 2:50 PM
 */

namespace AppBundle\Util;
use AppBundle\Util\Calculator;


class Test extends \PHPUnit_Framework_TestCase
{
    public function testAdd(){
        $calc = new Calculator();
        $result = $calc->add(30, 12);

        $this->assertEquals(42, $result);

    }
}
