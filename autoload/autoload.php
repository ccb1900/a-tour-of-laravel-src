<?php
/**
 * Created by PhpStorm.
 * User: ccb
 * Date: 2018/7/23
 * Time: 10:15
 */
class Autoloader {
    private $config=[];
    public function __construct()
    {
        $this->config = require_once "./autoload-config.php";
        $this->file_autoload();
    }
    function file_autoload(){
        foreach ($this->config["files"] as $file){
            include_once __DIR__."/php-note/".$file;
        }
    }
    function namespace_autoload($class)
    {
        if (isset($this->config["autoload"][$class])){
            include_once __DIR__."/php-note/".$this->config["autoload"][$class].".php";
        }else{
            $arr = explode("\\",$class);
            for ($i=0;$i<count($arr);$i++){
                if (isset($this->config["autoload"][$arr[$i]."\\"]))
                {
                    $arr[$i] = $this->config["autoload"][$arr[$i]."\\"];
                    include_once __DIR__."/public/".implode("/",$arr).".php";
                    break;
                }
            }

//            print_r($arr);
//            print_r($this->config);
        }

    }
}

class Loader {
//    private $loader;
//    public function __construct($loader)
//    {
//        $this->loader=$loader;
//    }
    public static function run()
    {
        $loader = new Autoloader();
        spl_autoload_extensions(".php");
        spl_autoload_register([$loader,"namespace_autoload"]);
        spl_autoload_register([$loader,"file_autoload"]);
    }
}


Loader::run();


