<?php
/**
 * Created by PhpStorm.
 * User: ccb
 * Date: 2018/7/24
 * Time: 20:44
 */
function events(...$args){
    dispatch(...$args);
}
function dispatch($a,$b,$c){
    var_dump($a,$b,$c);
}

/**
 * ...$args意味着可以传任意个参数
 * 只有和参数数量匹配的是有效的
 */
events(11,22,33,44);
dispatch(...[1,2,3,4]);
