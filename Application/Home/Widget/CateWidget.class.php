<?php
namespace Home\Widget;
use Think\Controller;

class CateWidget extends Controller{
    public function category(){
        //echo 'category here';
        $res = M("category")->select();
        $this->assign("data",$res);
        $this->display('Cate:category');
    }
    
    public function tag(){
        //echo 'category here';
        $res = M("tag")->select();
        $this->assign("data",$res);
        $this->display('Cate:tag');
    }
    
    public function latest(){
        //echo 'category here';
        $res = M("post")->order("ctime desc")->limit(5)->select();
        $this->assign("data",$res);
        $this->display('Cate:latest');
    }
    
    public function friendlink(){
        //echo 'category here';
        $this->display('Cate:friendlink');
    }
}