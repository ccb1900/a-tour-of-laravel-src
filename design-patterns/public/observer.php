<?php
/**
 * Created by PhpStorm.
 * User: ccb
 * Date: 2018/7/24
 * Time: 20:58
 */
/**
 * @url http://www.runoob.com/design-pattern/observer-pattern.html
 * @url http://www.runoob.com/design-pattern/observer-pattern.html
 */
require_once __DIR__.'/../vendor/autoload.php';
$os1 = new \App\Observer\Observer1();
$os2 = new \App\Observer\Observer2();
$os3 = new \App\Observer\Observer3();

$subject = new \App\Observer\Subject();
$subject->attach($os1);
$subject->attach($os2);
$subject->attach($os3);

/**
 * 对应laravel的Dispatcher类,event函数
 */
$dispatch = new \App\Observer\Dispatch();

$dispatch->dispatch($subject);


