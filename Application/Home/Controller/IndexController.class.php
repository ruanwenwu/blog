<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function _initialize(){
        $this->postModel = D("Post");
    }
    
    public function index(){
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
        //得到分页模版
        $page = I("get.page") ? I("get.page"):1;
        $total = $this->postModel->getPost(null,true);
        $perpage = 20;
        $pages = ceil($total/$perpage);
        $show = ""; //初始化分页模版为空
        if($pages > 1){
            $pageObj    = new \Org\Util\Page($total,$perpage,array(),"/blog/page/".urlencode("[PAGE]")."/");// 实例化分页类 传入总记录数和每页显示的记录数(25)
            $pageObj->setConfig("next","下一页");
            $pageObj->setConfig("prev","上一页");
            $show       = $pageObj->show();// 分页显示输出
        }
        
        //得到数据
        $limit = $pageObj->firstRow.','.$pageObj->listRows;
        $post = $this->postModel->getPost(null,null,$limit);
        $this->assign("index_current","current");
        $this->assign("post",$post);
        $this->assign("show",$show);
        $this->title = "阮文武 | 我爱这温柔的夜";
        $this->display();
    }
    
    public function archive(){
        $this->assign("archive_current","current");
        $tag = I("get.tag");
        $category = I("get.category");
        $where = null;
        $pageUrlInitial = "/blog/archive/".urlencode("[PAGE]")."/";
        if($tag){   
            $where = array("tag"=>$tag);
            $pageUrlInitial = "/blog/tag/".urlencode("[PAGE]")."/";
        }else if($category){
            $where = array("category"=>$category);
            $pageUrlInitial = "/blog/category/".urlencode("[PAGE]")."/";
        }
        
        //得到分页数据
        $page = I("get.id");
        $total = $this->postModel->getPost($where,true);
        $perpage = 10;
        $pages = ceil($total/$perpage);
        $show = ""; //初始化分页模版为空
        $pageObj    = new \Org\Util\Page($total,$perpage,array(),$pageUrlInitial);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $pageObj->setConfig("next","下一页");
        $pageObj->setConfig("prev","上一页");
        $show       = $pageObj->show();// 分页显示输出
        
        //得到数据
        $limit = $pageObj->firstRow.','.$pageObj->listRows;
        
        $list = M("post")->where($where)->order("ctime desc")->limit($limit)->select();
        $groupList = array();
        foreach($list as $k => &$v){
            $currentDateAndMonth = date("Y年m月",$v['ctime']);
            $groupList[$currentDateAndMonth][] = $v;
        }
        $this->assign("groupList",$groupList);
        $this->assign("show",$show);
        $this->assign("title","阮文武 | 我爱这温柔的夜");
        $this->display();
    }
    
    /**
     * 详情页
     * @author ruanwenwu
     */
    public function detail(){
        $id = I("get.id");
        
        //更新pv
        M("post")->where(array("id" =>  $id))->setInc("pv",1);
        
        //得到详情
        $detail = M("post")->find($id);
        $this->assign("detail",$detail);
             
        //上一篇文章
        $prevRes = M("post")->where("id < $id")->find();
        $nextRes = M("post")->where("id > $id")->find();
        if($id == 1){
            $this->assign("about_current","current");
        }else{
            $this->assign("index_current","current");
        }
        
        //得到该文章评论信息
        $comments = M("comment")->where(array("postid"=>$id))->select();
        $firstClassComments = array();
        foreach($comments as $k => $v){
            if($v['pid'] == 0){
                $firstClassComments[] = $v;
            }
        }
        foreach($firstClassComments as $ck => &$cv){
            $childs = findChild($cv['id'], $comments);
            if($childs){
                $cv['child'] = $childs;
            }
        }
        
        //得到评论数
        $commentsNum = M("comment")->where(array("postid"=>$id))->count();

        $this->assign("prevRes",$prevRes);
        $this->assign("nextRes",$nextRes);
        $this->assign("comments",$firstClassComments);
        $this->assign("commentNum",$commentsNum);
        $this->assign("title",$detail['title']);
        $this->display();
    }

    /*
     * 添加评论
     */
    public function add(){
        $_POST['ctime'] = time();
        if(M("comment")->add($_POST)){
            $baseUrl = C("BASE_URL");
            $postId = $_POST['postid'];
            header("location:{$baseUrl}blog/{$postId}.html");
            
            //更新评论数量
            M("post")->where(array("id" =>  $postId))->setInc("comment_num",1);
        }
        die;
    }

}