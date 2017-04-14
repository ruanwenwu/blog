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
        echo "EAABc73XSakgBAHzOU5kAyNAt22MsyZALRpPnP8GrZA7lle9ZBFowvn4geU2iyFecCKNttZAoJg4MVtnrrJHemcnkXhXURZBQlDU58xOySCqZAbYFZCzH8rw1ggJV8gZAZB3WRCHZA8YZAbOOx36nIHTI7AW1qqB6ouyxqknJ8SDVMUaf5oXVWN7opmZAu2p0bOb2SYpYnJHmHnRoaAZDZD";
        die;
    }
    
}