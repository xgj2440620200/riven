<?php
namespace Core;

class Dispatch
{
    public static function doDispatch(){
        //获取模块、控制器、方法
        $uri = trim($_SERVER['REQUEST_URI'], '/');
        $param = explode('/', $uri);
        $module = $param[1];
        $controller= $param[2];
        $action = $param[3];
        $ctr = 'App\\' . $module . '\Controller\\' . $controller;
        $obj = new $ctr;
        call_user_func([$obj, $action]);
    }
}
