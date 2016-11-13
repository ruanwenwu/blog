<?php
namespace Home\Controller;
use Think\Controller;

class BaseController extends Controller{
    public function __construct(){
        parent::__construct();
        $post = M("post")->where(array("category"=>"说说"))->order("id desc")->find();
        $this->assign("motto",$post['title']);
    }
}