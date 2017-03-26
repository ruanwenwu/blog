<?php 
function test(){
    echo 'a';
    die;
}

/*
 * 找到评论的子评论
 * @param $id 评论id
 * @param $arr 所有评论数组
 */
function findChild($id,$arr){
    $res = array();
    foreach($arr as $k => $v){
        if($v['pid'] == $id){
            $res[$v['id']] = $v;
        }
    }

    if($res){
        foreach($res as $ck => $cv){
            $cres = findChild($cv['id'],$arr);
            if($cres){
                $res[$cv['id']]['child'] = $cres;
            }
        }
    }
    return $res;
}
?>