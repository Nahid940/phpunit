<?php
/**
 * Created by PhpStorm.
 * User: nahid
 * Date: 7/4/20
 * Time: 10:45 AM
 */

namespace App\Test;

use App\Person;
use PHPUnit\Framework\TestCase;
class PersonTest extends TestCase
{

    public function setUp()
    {
        $this->Person=new Person();
    }

    public function tearDown()
    {
        unset($this->Person);
    }

    public function testGetExactAges()
    {
        $output=$this->Person->getExactAge();
        $this->assertEquals(25,$output,"Age didn't match !!");
    }
}