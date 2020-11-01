<?php
/**
 * Created by PhpStorm.
 * User: nahid
 * Date: 10/8/20
 * Time: 11:19 PM
 */

namespace App\observer;


use SplSubject;

class ConcreteObserver2 implements \SplObserver
{

    /**
     * Receive update from subject
     * @link http://php.net/manual/en/splobserver.update.php
     * @param SplSubject $subject <p>
     * The <b>SplSubject</b> notifying the observer of an update.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function update(SplSubject $subject)
    {
        // TODO: Implement update() method.
        if ($subject->state >= 3) {
            echo "ConcreteObserverA: Reacted to the event.\n";
        }
    }
}