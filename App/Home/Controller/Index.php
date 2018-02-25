<?php
namespace App\Home\Controller;
use Core\Controller;

class Index extends Controller
{
    public function index(){
        $model = new \Core\Model();
        $query = "select * from a";
        foreach($model->query($query) as $row){
//            print_r($row);
        }
        \Core\Log::write('testqqq');
        echo 0/0;
        $this->assign('name', 'jerry');
        $this->display('Index/index');
    }
}
