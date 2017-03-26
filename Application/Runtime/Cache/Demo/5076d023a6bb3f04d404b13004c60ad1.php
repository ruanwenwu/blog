<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($title); ?> - 阮文武的网络日志</title>
<meta name="keywords" content="<?php echo ($keywords); ?>" />
<meta name="description" content="<?php echo ($description); ?>" />

<style>
	#div1{width:150px;height:300px;background:red;position:absolute;right:0;}
	body{height:3000px;}
</style>

</head>
<body>
<h1><?php echo ($title); ?></h1>

<div id="div1"></div>


<script>
window.onload = function(){
	//得到屏幕高度
	var sHeight = window.innerHeight;
	if (typeof sHeight != "number") {
		if (document.compatMode == "CSS1Compat") {
			sHeight=document.documentElement.clientHeight;
		} else {
			sHeight=document.body.clientHeight;
		}
	}
	
	//将元素放到居中的位置
	var oDiv = document.getElementById("div1");
	oDiv.style.top = Math.floor((sHeight - oDiv.offsetHeight)/2) + "px";
	
	//添加滚动事件
	window.onscroll = function(){
		var sScrollTop = document.documentElement.scrollTop || document.body.scrollTop;
		var target = Math.floor(sScrollTop + (sHeight - oDiv.offsetHeight)/2);
		startMove(oDiv,target);
	}
	
	var timer = null;	//初始化定时器	
	function startMove(obj, target){
		clearInterval(timer);
		timer = setInterval(function(){
			var speed = (target - obj.offsetTop)/10;
			speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);
			if(obj.offsetHeight == target){
				clearInterval(timer);
			}else{
				obj.style.top = obj.offsetTop + speed + "px";
			}
		},30);
	}
}
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