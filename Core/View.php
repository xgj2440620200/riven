<?php
namespace Core;

class View
{
    public function display($tpl, $data){
        $file = APP_PATH . 'Home/View/' . $tpl . '.html'; 
        if(is_file($file)){
            extract($data);
            include $file;
        }else{
            die('模板文件不存在：' . $file . "!");
        }
    }
}
