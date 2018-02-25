<?php
namespace Core;

class App
{
    public static $classMap = [];

    public static function run(){
        //注册autoload
        include ROOT . 'vendor/autoload.php'; 
        spl_autoload_register("Core\App::autoload");
        //注册错误处理
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();
        //调度
        Dispatch::doDispatch();
    }

    public static function autoload($class){
        if(isset(self::$classMap[$class])){
            include self::$classMap[$class]; 
        }else{
            $file = str_replace('\\', '/', $class) . '.php'; 
            if(is_file($file)){
                self::$classMap[$class] = $file;
                include $file;
            }else{
                echo '类文件没有找到：' . $file . "!\n";
            }
        }
    }
}
