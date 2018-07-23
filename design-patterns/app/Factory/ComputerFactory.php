<?php
/**
 * Created by PhpStorm.
 * User: ccb
 * Date: 2018/7/24
 * Time: 01:35
 */

namespace App\Factory;


interface ComputerFactory
{
    public function get($name=null);
}
