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
        echo "EAABc73XSakgBAHzOU5kAyNAt22MsyZALRpPnP8GrZA7lle9ZBFowvn4geU2iyFecCKNttZAoJg4MVtnrrJHemcnkXhXURZBQlDU58xOySCqZAbYFZCzH8rw1ggJV8gZAZB3WRCHZA8YZAbOOx36nIHTI7AW1qqB6ouyxqknJ8SDVMUaf5oXVWN7opmZAu2p0bOb2SYpYnJHmHnRoaAZDZD";
        die;
    }
    
}