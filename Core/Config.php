<?php
namespace Core;

class Config
{
    public static $configMap;
    public static function get($key){
        list($filename, $config) = explode('.', $key); 
        if(APP_DEBUG == false && isset(self::$config[$key])){
            return self::$configMap[$key][$config];
        }else{
            $file = APP_PATH . 'Common/Config/' . $filename . '.php';
            if(is_file($file)){
                $data = include $file;
                self::$configMap[$key] = $data;
                return $data[$config];
            }else{
                die('配置文件不存在：' . $file . '!\n');
            }
        }
    }
}
