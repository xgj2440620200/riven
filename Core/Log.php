<?php
namespace Core;

class Log
{
    public static function write($message){
        $dir = APP_PATH . 'Log/'; 
        if(is_writable($dir)){
           $file = $dir . date("Y-m-d") . '.log'; 
           $message = $_SERVER['HTTP_HOST'] . ' ' . date("Y-m-d H:i:s") . ' ' . $message . PHP_EOL;
           file_put_contents($file, $message, FILE_APPEND);
        }else{
            die('日志目录不可写：' . $dir . "!");
        }
    }
}
