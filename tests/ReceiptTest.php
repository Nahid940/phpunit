<?php
/**
 * Created by PhpStorm.
 * User: nahid
 * Date: 7/4/20
 * Time: 9:49 AM
 */

namespace App\Test;
use App\Receipt;
use PHPUnit\Framework\TestCase;

class ReceiptTest extends TestCase
{
    protected $Receipt;

    public function setUp()
    {
        $this->Receipt=new Receipt();
    }

    public function tearDown()
    {
        unset($this->Receipt);
    }

    public function testTotal()
    {
        $input=[0,2,5,8];
        $output=$this->Receipt->total($input);
        $this->assertEquals(15,$output,"Sum should be 14");
    }

    public function testVat()
    {
        $inputAmount=10.00;
        $taxInput=.10;
        $output=$this->Receipt->vat($inputAmount,$taxInput);
        $this->assertEquals(1.00,$output,"The tax calculation should be equal to 1.00");
    }

}