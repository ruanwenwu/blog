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
        echo "EAACEdEose0cBABNWZCWgU75jt8eGjeos6QljQD7wSl6bCF4EdkWaP2wzMZBG4bbqTsWgsXtQyaFaXWBXRyBknhh4tkJDZBaRUWu200JBemgacxZBnw54UpyophrlXOAWo1ZAIAHW9CRsDRGjAyyj2j0ktkYLacMQVGh9pYyOOIPA4aoPLCh7cZCFjXqZB9hoQMZD";
        die;
    }
    
}