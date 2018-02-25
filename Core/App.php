<?php
namespace Core;

class App
{
    public static function run(){
        spl_autoload_register("Core\App::autoload");
        Dispatch::doDispatch();
    }

    public static function autoload($class){
        $file = str_replace('\\', '/', $class) . '.php'; 
        if(is_file($file)){
            include $file;
        }else{
            echo '类文件没有找到：' . $file . "!\n";
        }
    }
}
