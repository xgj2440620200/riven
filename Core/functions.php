<?php
/**
 * 工具函数
 */
//获取配置文件中的配置
function C($key){
    return \Core\Config::get($key); 
}
