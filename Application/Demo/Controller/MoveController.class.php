<?php
namespace Demo\Controller;
use Think\Controller;
class MoveController extends Controller {
    public function _initialize(){
        $this->assign("description","js运动框架入门");
        $this->assign("keywords","阮文武,阮文武的博客,js运动,js运动框架,运动框架入门");
    }
    //运动基础
    public function basic(){
        $this->assign("title","js匀速运动原理基础");
        $this->display();   
    }
    
    //运动基础示例简单2例
    public function basicdemo(){
        $this->assign("title","js匀速运动基础框架示例");
        $this->display();
    }
    
    //缓冲运动基础
    public function buffermove(){
        $this->assign("title","js缓冲运动基础框架示例");
        $this->display();
    }
    
    //缓冲运动春联
    public function chunlian(){
        $this->assign("title","js缓冲运动实现春联效果");
        $this->display();
    }
    
    //多物体
    public function duowuti(){
        $this->assign("title","js多物体运动框架");
        $this->display();
    }
    
    //任意值
    public function renyizhi(){
        $this->assign("title","任意值运动框架");
        $this->display();
    }
    
    //运动框架应用
    public function yingyong(){
        $this->assign("title", "运动框架应用");
        $this->display();
    }
    
    //完美运动框架
    public function perfect(){
        $this->assign("title","完美运动框架");
        $this->display();
    }
}