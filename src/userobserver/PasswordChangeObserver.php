<?php
/**
 * Created by PhpStorm.
 * User: nahid
 * Date: 10/9/20
 * Time: 9:24 AM
 */

namespace App\userobserver;


use SplSubject;

class PasswordChangeObserver implements \SplObserver
{

    protected $smsender;

    public function __construct(SmsSender $smsSender)
    {
        $this->smsender=$smsSender;
    }

    public function update(SplSubject $subject)
    {
        if($subject->password_changed)
        {
            $this->smsender->sendMessage();
        }else
        {
            echo "Password not changed.. No notification has been sent";
        }
    }
}