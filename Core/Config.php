<?php
namespace Core;

class Config
{
    public static function get($key){
        list($filename, $config) = explode('.', $key); 
        $file = APP_PATH . 'Common/Config/' . $filename . '.php';
        if(is_file($file)){
            $data = include $file;
            return $data[$config];
        }else{
            die('配置文件不存在：' . $file . '!\n');
        }
    }
}
