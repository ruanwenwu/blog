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
        // ָ������������������
        header('Access-Control-Allow-Origin:*');
        // ��Ӧ����
        header('Access-Control-Allow-Methods:POST');
        // ��Ӧͷ����
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
        echo "EAABc73XSakgBAHSWfk8A3of61xRcnfAU8P0pz2MtW3hI6V9vakX7QczmhElNLTiG8ZCZBSm32ZCAh5SFHgfFZB1ommnnA99Yiz7s09xKHcZBRiu1iHpVKBzNSAace3rlQhZALZCjlFq91ZABLoxITmegBXAvZBW5g5RdhnqHvZCq7B6Xm9luySQp5KhTHJWGhktdIZD";
        die;
    }
    
}