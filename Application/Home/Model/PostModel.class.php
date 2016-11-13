<?php
namespace  Home\Model;
use Think\Model;

class PostModel extends Model{
    public function getPost($where = null,$count = null,$limit=null){
        if($count){
            $total = $this->where($where)->count();
            return $total;
        }
        $res = $this->where($where)->order("ctime desc")->limit($limit)->select();
        return $res;
    }
}