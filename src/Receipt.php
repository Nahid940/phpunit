<?php
/**
 * Created by PhpStorm.
 * User: nahid
 * Date: 7/4/20
 * Time: 9:42 AM
 */

namespace App;


class Receipt
{

    public function total(array $items=[])
    {
        return array_sum($items);
    }

    public function vat($amount,$tax)
    {
        return $amount*$tax;
    }

}