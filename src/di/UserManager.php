<?php
/**
 * Created by PhpStorm.
 * User: nahid
 * Date: 10/15/20
 * Time: 12:17 AM
 */

namespace App\di;


class UserManager
{

    public function __construct(MyMailer $mailer)
    {
        $this->mailer=$mailer;
    }


    public function register($email, $password)
    {
        $this->mailer->mail($email, 'Hello and welcome!');
    }

}