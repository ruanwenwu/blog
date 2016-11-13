<?php
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller{
    public function login(){
        $this->display();
    }
    
    public function logout(){
        session("login",null);
        header("Location:/manage/index.php?c=login&a=login");
        die;
    }
}