<?php
/**
 * Created by PhpStorm.
 * User: nahid
 * Date: 10/9/20
 * Time: 9:11 AM
 */

namespace App\userobserver;


use SplObserver;

class UserSubject implements \SplSubject
{
    public $password_changed=false;

    private $observers;

    public function __construct($password_changed)
    {
        $this->password_changed=$password_changed;
        // Standard php object storage that add objects in the SplObject storage
        //https://www.php.net/manual/en/class.splobjectstorage.php
        $this->observers=new \SplObjectStorage();
    }

    //attach objects
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }


    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    //notify observers and call the update function of
    // each observer to update the observer about the changes
    public function notify()
    {
        foreach ($this->observers as $observer)
        {
            $observer->update($this);
        }
    }
}