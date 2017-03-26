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

    public function getSearchRes($ids){
        if ($ids && is_array($ids)){
           $idStr = rtrim(implode(",", $ids),",");
           $where = "id in ($idStr)";
           $res = $this->where($where)->order("ctime desc")->limit($limit)->select();
           return $res;         
        }
        
        return false;
    }
}