<?php
/**
 * Created by PhpStorm.
 * User: ccb
 * Date: 2018/7/24
 * Time: 01:35
 */

namespace App\Factory;


class ComputerManager implements ComputerFactory
{
    public function __construct()
    {

    }
    public function get($name = null)
    {
        // TODO: Implement get() method.
        // 选择是集群还是非集群

    }
}
