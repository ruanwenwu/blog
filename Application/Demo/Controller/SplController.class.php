<?php
namespace Demo\Controller;
use Think\Controller;
use Boris\Config;

class SplController extends Controller
{
    //栈结构，后进先出，就像步枪压子弹。
    public function splstack(){
        $stack = new \SplStack();
        $stack->push(3);
        $stack->push("jack");
        var_dump($stack->pop());
        echo '<br/>';
        foreach($stack as $k => $v){
            echo $k.'-'.$v.'<br/>';
        }
        die;
    }
    
    //队列，像排队一样，先进先出
    public function splqueue(){
        $queue = new \SplQueue();
        $queue -> enqueue(3);
        $queue -> enqueue("jack");
        $queue -> enqueue("lucy");
        $queue -> shift();
        foreach($queue as $k => $v){
            echo $k.'-'.$v.'<br/>';
        }
        die;
    }
}