<?php
error_reporting(-1);
/**
 * @url http://php.net/manual/zh/function.set-error-handler.php
 */
set_error_handler(function ($errno,$errstr,$errfile,$errline){
    var_dump($errno,$errstr,$errfile,$errline);
});
/**
 * 自 PHP 7 以来，大多数错误抛出 Error 异常，也能被捕获。 Error 和 Exception 都实现了 Throwable 接口。 PHP 7 起，处理程序的签名：
 * void handler ( Throwable $ex )
 * @url http://php.net/manual/zh/function.set-exception-handler.php
 */
set_exception_handler(function (Throwable $throwable){
    var_dump($throwable);
});
/**
 * 注册一个 callback ，它会在脚本执行完成或者 exit() 后被调用。
 * @url http://php.net/manual/zh/function.register-shutdown-function.php
 */
register_shutdown_function(function ($a,$b){
    var_dump($a,$b);
},1,2);
/**
 * 设置ini
 */
ini_set('display_errors', 'Off');

trigger_error("出粗辣",E_USER_ERROR);//set_error_handler
$t = new Test();//set_exception_handler
