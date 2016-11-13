<?php
namespace Admin\Controller;
use Think\Controller;

class AjaxController extends Controller{
    public function _initialize(){
        //echo '1';
    }
    
    public function login(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        //$res = M("zshospitallogin")->where(array("username"=>$username,"password"=>$password))->find();
        
        if($username == "ruanwenwu" && $password == "chillylips88"){
            $data = array(
                "status"  => "y",
            );
            //$userInfo = M("zshospital")->where(array("id"=>$res['id']))->find();
            session("login",true);
        }else{
            $data = array(
                "status"  =>  "n",
            );
        }
        
        echo json_encode($data);
        
        
        exit;
    }
    
    //上传图片
    public function upload(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
        $upload->savePath  =     date("Y/m/d/",time()); // 设置附件上传（子）目录
        $upload->saveName = 'time';
        // 上传文件 
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            $this->ajaxReturn($info);
            die;
        }
    }
    
    //添加新文章
    public function addNewPost(){
        if($_POST['id']){
            $_POST['mtime'] = time();
            if(M("post")->data($_POST)->save()){
                echo json_encode(array("status"=>"y","id"=>$id));
            }else{
                echo json_encode(array("status"=>"n","msg"=>"更新失败"));
            }
        }else{
            $_POST['ctime'] = $_POST['mtime'] = $_POST['pubtime'] = time();
            if($id = M("post")->data($_POST)->add()){
                echo json_encode(array("status"=>"y","id"=>$id));
            }else{
                echo json_encode(array("status"=>"n","msg"=>"插入失败"));
            }
        }
        
        //处理分类和标签
        if($_POST['category']){
            if(!M("category")->where(array("name"=>$_POST['category']))->find()){
                M("category")->add(array("name"=>$_POST['category']));
            }
        }
        //$sql = M("category")->fetchSql(true)->add(array("name"=>$_POST['category']));
     
        if($_POST['tag']){
            if(!M("tag")->where(array("name"=>$_POST['tag']))->find()){
                M("tag")->add(array("name"=>$_POST['tag']));
            }
        }
        exit;
    }
    
    /**
     * 删除文章
     */
    public function delPost(){
        $id = $_GET['id'];
        if(M("post")->delete($id)){
            echo json_encode(array("status"=>true));
        }else{
            echo json_encode(array("status"=>false,"message"=>"系统故障"));
        }
        exit;
    }
}