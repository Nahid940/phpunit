<?php
/**
 * Created by PhpStorm.
 * User: nahid
 * Date: 10/8/20
 * Time: 12:52 AM
 */

namespace App;


class Man implements \Countable
{

    /**
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1.0
     */

    public function yo()
    {

    }

    public function count()
    {
        return 10;
    }
}