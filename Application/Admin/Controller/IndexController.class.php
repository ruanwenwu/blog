<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function _initialize(){
       $isLogin =  checkLogin();
       if(!$isLogin){
           header("location:/admin.php/Login/login");
           die;
       }
    }
    public function index(){
        $dashBoard = array(
            "parent" => array(
                "name"  =>  "阮文武的博客"
            ),
            "child"  => array(
                "name"  =>  "新博客"
            )
        );
        $this->assign("act","post_index");
        $this->assign("ctl","post");
        //取得分类
        $category = M("category")->select();
        
        //取得tag
        $tag = M("tag")->select();
        
        $this->assign("Dashboard",$dashBoard);
        $this->assign("tag",$tag);
        $this->assign("category",$category);
        $this->display();
    }
    
    /**
     * 更新博客
     */
    public function updatePost(){
        if(IS_GET){
            $id = I("get.id");
            $data = M("post")->find($id);
            $this->assign("data",$data);
            $this->display();
        }else if(IS_POST){
            
        }
        
    }
    
    
    
}