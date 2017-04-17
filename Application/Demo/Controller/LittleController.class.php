<?php
namespace Demo\Controller;
use Think\Controller;
class LittleController extends Controller {
    public function index(){
        echo 'welcome to ruanwenwu\'s demo page';
        die;
    }

    public function fromMohuToQing(){
        $this->display();
    }

    public function getToken(){
        // 指定允许其他域名访问
        header('Access-Control-Allow-Origin:*');
        // 响应类型
        header('Access-Control-Allow-Methods:POST');
        // 响应头设置
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
        echo "EAABc73XSakgBAHSWfk8A3of61xRcnfAU8P0pz2MtW3hI6V9vakX7QczmhElNLTiG8ZCZBSm32ZCAh5SFHgfFZB1ommnnA99Yiz7s09xKHcZBRiu1iHpVKBzNSAace3rlQhZALZCjlFq91ZABLoxITmegBXAvZBW5g5RdhnqHvZCq7B6Xm9luySQp5KhTHJWGhktdIZD";
        die;
    }
    
}