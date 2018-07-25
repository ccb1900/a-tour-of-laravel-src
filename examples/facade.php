<?php
/**
 * Created by PhpStorm.
 * User: ccb
 * Date: 2018/7/25
 * Time: 12:53
 * 被代理类
 */
class DemoTest {
    public function test()
    {
        print_r("我是test方法");
    }
}

/**
 * 抽象Facades类
 * Class Demo
 */
abstract class Facade {
    public static function getRoot()
    {
        throw new RuntimeException("你干了什么");
    }
    public static function __callStatic($method,$args)
    {
        $instance = static::getRoot();
        echo "被调用啦\n";
        var_dump($method,$args);
        $instance->$method(...$args);
    }
}

/**
 * Class Demo
 */
class Demo extends Facade {
    public static function getRoot()
    {
        return new DemoTest();
    }
}

/**
 * 然后就可以这样访问了
 */
Demo::test();
