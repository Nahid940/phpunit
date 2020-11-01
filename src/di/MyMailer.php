<?php
/**
 * Created by PhpStorm.
 * User: nahid
 * Date: 10/15/20
 * Time: 12:17 AM
 */

namespace App\di;


class MyMailer
{
    public function mail($recipient, $content)
    {
        // send an email to the recipient

        echo $content;
    }
}