<?php 
namespace Admin\Controller;
use Think\Controller;
    
class PostController extends Controller{
    public function _initialize(){
        $this->assign("ctl","post");
    }
    public function add(){
        $dashBoard = array(
            "parent" => array(
                "name"  =>  "阮文武的Blog"
            ),
            "child"  => array(
                "name"  =>  "发表新博客"
            )
        );
        $this->assign("Dashboard",$dashBoard);
        $this->display();
    }
    
    public function all(){
        $dashBoard = array(
            "parent" => array(
                "name"  =>  "阮文武的Blog"
            ),
            "child"  => array(
                "name"  =>  "博客列表"
            )
        );
       $this->assign("act","post_all");
       $total = M("post")->count();
       $Page       = new \Think\Page($total,20);// 实例化分页类 传入总记录数和每页显示的记录数(25)
       $show       = $Page->show();// 分页显示输出
       // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
       $data = M("post")->order('ctime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
       $this->assign("data",$data);
       $this->assign("show",$show);
       $this->assign("Dashboard",$dashBoard);
       $this->display();
    }
    
    public function updatePost(){
        $dashBoard = array(
            "parent" => array(
                "name"  =>  "阮文武的Blog"
            ),
            "child"  => array(
                "name"  =>  "修改博文"
            )
        );
        $this->assign("act","post_update");
        $id = I("get.id");
        $data = M("post")->find($id);
        //取得分类
        $category = M("category")->select();
        
        //取得tag
        $tag = M("tag")->select();
        
        $this->assign("tag",$tag);
        $this->assign("category",$category);
        $this->assign("data",$data);
        $this->assign("Dashboard",$dashBoard);
        $this->display();
    }
}
?>