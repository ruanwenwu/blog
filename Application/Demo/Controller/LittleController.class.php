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
        echo "EAABc73XSakgBAIHERvh0ShX2ZBTrdEBHwBFBaEK4ZAHpfbof7jRJzi6rlq8UjgJ01YF5PfEAbsLh4GUMEJBBB34GQVLEj8wfg3ROScriAA8yvuu95bURcgf1K2FrYbWIbGscJNutq6qkvoVdZBPGAx7YPnTH2QZD";
        die;
    }
    
}