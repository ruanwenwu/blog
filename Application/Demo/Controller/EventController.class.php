<?php
namespace Demo\Controller;

use Think\Controller;

class EventController extends Controller{
    //拖拽基础
    public function dragbasic(){
        $this->assign("title","js拖拽基础demo");
        $this->display();
    }
    
    public function perfectdrag(){
        $this->assign("title","js完美拖拽示例");
        $this->display();
    }
    
    public function pullrefresh(){
        $this->assign("title","js下拉刷新");
        $this->display();
    }
}
?>