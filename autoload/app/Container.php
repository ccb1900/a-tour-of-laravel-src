<?php
/**
 * Created by PhpStorm.
 * User: ccb
 * Date: 2018/7/23
 * Time: 10:22
 */

namespace App;


class Container
{
    public $instances=[];
    public function bind($key,$value)
    {
        $this->instances[$key]=$value;
    }
    public function get($key){
        return $this->instances[$key];
    }
}
