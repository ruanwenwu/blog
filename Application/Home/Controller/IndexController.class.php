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
        $perpage = 10;
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
        $this->title = "阮文武 ";
        $this->assign("index",true);    //首页标志，显示隐藏的h1
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
            $pageUrlInitial = "/blog/tag/$tag/".urlencode("[PAGE]")."/";
        }else if($category){
            $where = array("category"=>$category);
            $pageUrlInitial = "/blog/category/$category/".urlencode("[PAGE]")."/";
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
        if($_COOKIE['userinfo']){
            $userInfo = json_decode($_COOKIE['userinfo'],true);
            $this->assign("userinfo",$userInfo);
        }
        $currentUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        setcookie("back_url",$currentUrl,time()+3600*24,"/",".ruanwenwu.cn");
        $id = I("get.id");
        
        //更新pv
        M("post")->where(array("id" =>  $id))->setInc("pv",1);
        
        //得到详情
        $detail = M("post")->find($id);
        if(trim($detail['summary']) == ""){
            $detail['summary'] = $detail['title'];  //seo处理
        }
        if(trim($detail['tag']) == ""){
            $detail['tag'] = $detail['title'];  //seo处理
        }
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
        $comments = M("comment")->where(array("postid"=>$id,"status"=>1))->select();
        $firstClassComments = array();
        foreach($comments as $k => &$v){
            $v['userinfo'] = M("user")->find($v['uid']);
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
        $commentsNum = M("comment")->where(array("postid"=>$id,"status"=>1))->count();

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
        $now = time();
        $_POST['ctime'] = time();
        $_POST['ip'] = $_SERVER['REMOTE_ADDR'];
        if(!$_POST['ip']){
            die("hack stoped");
        }
        //验证验证码是否正确
        $vcode = $_POST['vcode'];
        if(!$vcode){
            echo '<script>alert("hack detected");history.go(-1);</script>';
            die;
        }
               
        if(!self::checkVerifyCode($vcode)){
            header("content-type:text/html;charset=utf-8");
            echo '<script>alert("验证码错误，请重新输入");history.go(-1);</script>';
            die;
        }

        $userinfo = $_COOKIE['userinfo'];
        if(!$userinfo){
            header("content-type:text/html;charset=utf-8");
            echo '<script>alert("使用github登陆后才能评论");history.go(-1);</script>';
            die;
        }
        
        $userinfoArr = json_decode($userinfo,true);
        $userid = $userinfoArr['id'];
        $registerUserInfo = M("user")->where(array("openid"=>$userid))->find();
        if(!$registerUserInfo){
            header("content-type:text/html;charset=utf-8");
            echo '<script>alert("非法请求");history.go(-1);</script>';
            die;
        }
        
        $webSite = $_POST['website'];
        $domainNameParts = explode(".", $webSite);
        $domain = $domainNameParts[1];
        if (M("black_website")->where(array("name"=>$domain))->find() ){
        header("content-type:text/html;charset=utf-8");
            echo '<script>alert("非法请求");history.go(-1);</script>';
            die;
        }

        $content = $_POST['content'];
        $pattern = "/<a[^<>]*>/";
        if (preg_match($pattern, $content)) { 
            header("content-type:text/html;charset=utf");
            echo '<script>alert("非法请求");history.go(-1);</script>';
            die;
        }

        $_POST['uid'] = $registerUserInfo['id'];
              
        if(M("comment")->add($_POST)){
            $baseUrl = C("BASE_URL");
            $postId = $_POST['postid'];
            //更新评论数量
            M("post")->where(array("id" =>  $postId))->setInc("comment_num",1);
            //echo '<script>history.go(-1);</script>';
            header("location:{$_COOKIE['back_url']}");
            die;
        }
        die;
    }
    
    /**
     * 生成验证码
     */
    public function showVerifyCode(){
        $verifyCode = new \Org\Util\Vcode();
        $verifyCode->doimg();
        //将验证码保存在session中
        $pre = "addcomment_";
        $ipNumber = ip2long($_SERVER['REMOTE_ADDR']);
        $_SESSION[$pre.$ipNumber] = $verifyCode->getCode();
    }
    
    /**
     * 验证验证码
     */
    private function checkVerifyCode($code){
        if(!$code){
            return false;
        }
        $pre = "addcomment_";
        $ipNumber = ip2long($_SERVER['REMOTE_ADDR']);
        
        if(!$ipNumber || $code != $_SESSION[$pre.$ipNumber]){
            return false;
        }
        return true;
    }

    /**
     * 搜索功能
     */
    public function search(){
        $keywords = $_GET['keywords'];
        $page = I("get.page") ? I("get.page"):1;
        $perpage = 5;
        $start = ($page - 1)*$perpage;
        $s = new \SphinxClient;
        $s->setServer("127.0.0.1", 9312);
        $s->setMatchMode(SPH_MATCH_PHRASE);
        $s->setMaxQueryTime(30);
        $s->setLimits($start, $perpage);
        $res = $s->query($keywords,'*'); #[宝马]关键字，[main]数据源source
        $err = $s->GetLastError();
        $total = $res['total'];
        $pages = ceil($total/$perpage);
        
        $show = ""; //初始化分页模版为空
        if($pages > 1){
            $pageObj    = new \Org\Util\Page($total,$perpage,array(),"/blog/search/$keywords/page/".urlencode("[PAGE]")."/");// 实例化分页类 传入总记录数和每页显示的记录数(25)
            $pageObj->setConfig("next","下一页");
            $pageObj->setConfig("prev","上一页");
            $show       = $pageObj->show();// 分页显示输出
        }
        
        //得到数据
        //$limit = $pageObj->firstRow.','.$pageObj->listRows;
        //$post = $this->postModel->getPost(null,null,$limit);
	    $matches = $res['matches'];
	    $postId = array_keys($matches);
	    $post = $this->postModel->getSearchRes($postId);
        $this->assign("index_current","current");
        $this->assign("post",$post);
        $this->assign("show",$show);
        $this->title = "阮文武 ";
        $this->assign("index",true);    //首页标志，显示隐藏的h1
        $this->display("index");
    }

    public function authorize(){
        $url = "https://github.com/login/oauth/access_token";
        $headers = array(
            "Accept:application/json"
        );
        $postData = array(
            "client_id" =>  "3d1ac5a564661c9e25ba",
            "client_secret" =>    "04fa187560a79c7117b5b52b2d977718d2fa9b5e",
            "code"          =>  $_GET['code'],
            'state'         =>  $_GET['state'],
        );
        $res = self::curlrequest(array(
            "data"  =>  $postData,
            "header"    =>  $headers,
            "url"       =>  $url,
        ));
        
        $resArr = json_decode($res, true);
        $accesstoken = $resArr['access_token'];
        if ($accesstoken){
            $userInfo = self::curlrequest(array(
                "url"   =>  "https://api.github.com/user",
                "request_type"  =>  "get",
                "header"    =>  array(
                    "Authorization:token $accesstoken",
                    "User-Agent:{$_SERVER['HTTP_USER_AGENT']}",
                ),
            ));
            $userInfoArr = json_decode($userInfo,true);
            if ($userInfoArr['id']) {
                $userInfoStr = json_encode($userInfoArr);
                setcookie("userinfo",$userInfoStr,time()+3600,"/",".ruanwenwu.cn");
                if ($_COOKIE['back_url']){ 
                    header("location:{$_COOKIE['back_url']}");
                }

                //看是否已经记录到库里
                if (!M("user")->where(array("openid"=>$userInfoArr['id']))->find()){
                    M("user")->add(array(
                        "openid"  =>  $userInfoArr['id'],
                        "nickname"  =>  $userInfoArr['login'],
                        "ctime" =>  time(),
                        "lastlogin" => time(),
                        "avatar"    =>  $userInfoArr['avatar_url'],
                    ));
                }
                die;
            } else {
                echo '授权失败';
            }
        } else {
            echo 'error';die;
        }
        die;
    }
    
    private function curlrequest($param){
        $option = array(
            "request_type"  =>  "post",
            "data"          =>  array(),
            "header"        =>  array(),
            "show_header_info"  =>  0,
            "url"           =>  "",
        );
        
        if ($param && is_array($param)) {
            $option = array_merge($option, $param);
        }

        extract($option);

        if (!$url) return false;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, $show_header_info);    //是否显示头信息
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

        if ($request_type == "post") {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }

        $res = curl_exec($ch);
        curl_close($ch);
        return $res;
    }

    public function go(){
        var_dump($_COOKIE);
        die;
    }

}
