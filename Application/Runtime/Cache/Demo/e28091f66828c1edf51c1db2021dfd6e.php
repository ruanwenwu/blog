<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($title); ?> - 阮文武的网络日志</title>
<meta name="keywords" content="<?php echo ($keywords); ?>" />
<meta name="description" content="<?php echo ($description); ?>" />

<style>
	#div1{width:200px;height:100px;background:red;margin:10px;border:1px solid black;}
	#div2{width:200px;height:100px;background:red;margin:10px;}
	#div3{width:200px;height:100px;background:red;margin:10px;opacity:0.3}
	#div4{width:200px;height:100px;background:red;margin:10px;opacity:0.3}
	#div5{width:200px;height:100px;background:red;margin:10px;opacity:0.3}
</style>

</head>
<body>
<h1><?php echo ($title); ?></h1>

<div id="div1"></div>
<div id="div2"></div>
<div id="div3"></div>
<div id="div4"></div>
<div id="div5"></div>


<script>
	var oDiv1 = document.getElementById("div1");
	var oDiv2 = document.getElementById("div2");
	var oDiv3 = document.getElementById("div3");
	var oDiv4 = document.getElementById("div4"); 
	var oDiv5 = document.getElementById("div5"); 
	oDiv1.onmouseover = function(){
		startMove(this,"width",500);
	}
	oDiv1.onmouseout = function(){
		startMove(this,"width",100);
	}

	oDiv2.onmouseover = function(){
		startMove(this,"height",500);
	}
	oDiv2.onmouseout = function(){
		startMove(this,"height",100);
	}

	oDiv3.onmouseover = function(){
		startMove(this,"opacity",100);
	}
	oDiv3.onmouseout = function(){
		startMove(this,"opacity",30);
	}
	
	oDiv4.onmouseover = function(){
		startMove(this,"opacity",90);
	}
	oDiv4.onmouseout = function(){
		startMove(this,"opacity",10);
	}

	function startMove(obj, attr, target){
		clearInterval(obj.timer);
		obj.timer = setInterval(function(){
			var cur = 0;
			if(attr == "opacity"){
				//��Ҫround����Ϊ������Ĳ���ȷ��
				cur = Math.round(parseFloat(getStyle(obj,attr))*100);
				console.log(cur);
			}else{
			    cur = parseInt(getStyle(obj,attr));
			}
			var speed = (target - cur)/10;
			speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);
			if(target == cur){
				clearInterval(obj.timer);
			}else{
				if(attr != "opacity"){
					obj.style[attr] = cur + speed + "px";
				}else{
					obj.style[attr] = (cur + speed)/100;
					obj.style.filter = "alpha(opacity:"+(cur+speed)+")";
				}
			}
		},30);
	}
	
	function getStyle(obj, attr){
		if(obj.currentstyle){
			return obj.currentStyle[attr];
		}else{
			return getComputedStyle(obj,false)[attr];
		}
	}
	
	
	//������������Ǹ�͸��������ѭ��������
	var ftarget = 0;		//�����ʼֵ
	var div5Timer = setInterval(function(){
		var curOpacity = Math.round(parseFloat(getStyle(oDiv5,"opacity"))*100);
		var fspeed = (ftarget - curOpacity)/5000;
		fspeed = fspeed > 0 ? Math.ceil(fspeed) : Math.floor(fspeed);
		oDiv5.style.opacity = (curOpacity + fspeed)/100;
		if(curOpacity == 20){
			ftarget = 60;
		}
		if(curOpacity == 60){
			ftarget = 20;
		}
	},30);
</script>


<script>
		var _hmt = _hmt || [];
		(function() {
		 	var hm = document.createElement("script");
		  	hm.src = "https://hm.baidu.com/hm.js?77834ec9e0919b0d048ceba486388472";
		  	var s = document.getElementsByTagName("script")[0]; 
		  	s.parentNode.insertBefore(hm, s);
		})();   

		 (function(){
	    		var bp = document.createElement('script');
	    		var curProtocol = window.location.protocol.split(':')[0];
	    		if (curProtocol === 'https') {
	        		bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
	    		}
	    		else {
	        		bp.src = 'http://push.zhanzhang.baidu.com/push.js';
	    		}
	    		var s = document.getElementsByTagName("script")[0];
	    		s.parentNode.insertBefore(bp, s);
		 })();
</script>


</body>
</html>