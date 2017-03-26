<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($title); ?> - 阮文武的网络日志</title>
<meta name="keywords" content="<?php echo ($keywords); ?>" />
<meta name="description" content="<?php echo ($description); ?>" />

<style>
	div{width:200px;height:200px;background:red;margin:10px;}
</style>

</head>
<body>
<h1><?php echo ($title); ?></h1>

<div></div>
<div></div>
<div></div>


<script>
	var oDivs = document.getElementsByTagName("div");
	for(var i = 0; i < oDivs.length; i++){
		oDivs[i].timer = null;
		oDivs[i].onmouseover = function(){
			startMove(this,500);
		}
		oDivs[i].onmouseout = function(){
			startMove(this,100);
		}
	}
	
	function startMove(obj,target){
		clearInterval(obj.timer);
		obj.timer = setInterval(function(){
			var speed = (target - obj.offsetWidth)/10;
			speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);
			if(target == obj.offsetWidth){
				clearInterval(obj.timer);
			}else{
				obj.style.width = obj.offsetWidth + speed + 'px';
			}
		},30);
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