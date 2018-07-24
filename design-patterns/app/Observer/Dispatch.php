<?php
/**
 * Created by PhpStorm.
 * User: ccb
 * Date: 2018/7/24
 * Time: 21:57
 */

namespace App\Observer;


class Dispatch
{
    public function dispatch(\SplSubject $splSubject)
    {
        $splSubject->notify();
    }
}
