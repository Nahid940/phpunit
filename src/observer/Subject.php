<?php
/**
 * Created by PhpStorm.
 * User: nahid
 * Date: 10/8/20
 * Time: 11:12 PM
 */

namespace App\observer;


use SplObserver;

class Subject implements \SplSubject
{

    public $state;

    private $observers;

    public function __construct()
    {
        //echo "Subject: attached an observer\n";
        $this->observers=new \SplObjectStorage();
    }


    /**
     * Attach an SplObserver
     * @link http://php.net/manual/en/splsubject.attach.php
     * @param SplObserver $observer <p>
     * The <b>SplObserver</b> to attach.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function attach(SplObserver $observer)
    {
        // TODO: Implement attach() method.
        echo "Subject: Attached an observer<br>";
        $this->observers->attach($observer);
    }

    /**
     * Detach an observer
     * @link http://php.net/manual/en/splsubject.detach.php
     * @param SplObserver $observer <p>
     * The <b>SplObserver</b> to detach.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function detach(SplObserver $observer)
    {
        echo "Subject: Detached an observer<br>";
        $this->observers->detach($observer);
        // TODO: Implement detach() method.
    }

    /**
     * Notify an observer
     * @link http://php.net/manual/en/splsubject.notify.php
     * @return void
     * @since 5.1.0
     */
    public function notify()
    {
        // TODO: Implement notify() method.
        echo "Subject: Notifying observers......<br>";
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function someBusinessLogic(): void
    {
        echo "\nSubject: I'm doing something important.<br>";
//        $this->state = rand(0, 10);
        echo "Subject: My state has just changed to: {$this->state}<br>";
        $this->notify();
    }

    public function changeState($val)
    {
        $this->state=$val;
    }

    public function getobj()
    {
        print_r($this->observers);
    }
}