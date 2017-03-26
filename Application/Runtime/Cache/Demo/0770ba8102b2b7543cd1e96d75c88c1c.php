<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($title); ?> - 阮文武的网络日志</title>
<meta name="keywords" content="<?php echo ($keywords); ?>" />
<meta name="description" content="<?php echo ($description); ?>" />

<style>
.j{width:200px;height:200px;background:red;}
</style>

</head>
<body>
<h1><?php echo ($title); ?></h1>

<div class="j" id="j">鼠标，移上来！好污^_^</div>


<script>
//完美运动框架，支持多物体，任意值，多属性，链条式（回调）
window.onload = function(){
	function startMove(obj, json, fn){
		clearInterval(obj.timer);
		obj.timer = setInterval(function(){
			var bStop = true;
			for(var attr in json){
				var cur;
				if(attr == "opacity"){
					cur = Math.round(parseFloat(getStyle(obj,attr))*100);
				}else{
					cur = parseInt(getStyle(obj, attr));
				}
				if(attr == "opacity"){
					console.log(cur);
				}
				var speed = (json[attr] - cur)/10;
				speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);
				
				if(cur != json[attr]){
					bStop = false;
				}
				
				if(bStop){
					clearInterval(obj.timer);
					if(fn){
						fn();
					}
				}else{
					if(attr == "opacity"){
						obj.style.opacity = (cur+speed)/100;
						obj.style.filter = "alpha(opacity:"+(cur+speed)+")";
					}else{
						obj.style[attr] = cur + speed + "px";
					}
				}
			}
		});
	}
	
	function getStyle(obj, attr){
		if(obj.currentStyle){
			return obj.currentStyle[attr];
		}else{
			return getComputedStyle(obj,false)[attr];
		}
	}
	
	var oDiv = document.getElementById("j");
	oDiv.onmouseover = function(){
		startMove(this,{width:30,height:400,opacity:80},function(){
			alert("运动结束了，我出来了^_^");
		});
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