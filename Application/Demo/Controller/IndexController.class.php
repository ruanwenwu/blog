<?php
namespace Demo\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo 'welcome to ruanwenwu\'s demo page';
        die;
    }

    public function seajs(){
        $this->display();
    }
}