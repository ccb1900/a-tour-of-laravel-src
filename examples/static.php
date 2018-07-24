<?php
/**
 * Created by PhpStorm.
 * User: ccb
 * Date: 2018/7/24
 * Time: 21:39
 * @url http://php.net/manual/zh/language.oop5.late-static-bindings.php
 */
class Test {
    public function __construct($a,$b,$c,$d)
    {
        var_dump($a,$b,$c,$d);
    }
    public static function get()
    {
        print_r(func_get_args());
        print_r(new static(...func_get_args()));
    }
}

$test = new Test(1,2,3,4);

Test::get(1,2,3,4);
