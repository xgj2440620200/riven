<?php
namespace Core;

class Controller
{
    public $view;
    public $data;

    public function __construct(){
        $this->view = new \Core\View;
    }

    public function display($tpl){
        $this->view->display($tpl, $this->data);
    }

    public function assign($key, $value){
        $this->data[$key] = $value; 
    }
}
