<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($title); ?> - 阮文武的网络日志</title>
<meta name="keywords" content="<?php echo ($keywords); ?>" />
<meta name="description" content="<?php echo ($description); ?>" />

		<style>
			*{padding:0;margin:0;}
			#div1{width:200px;height:200px;position:absolute;left:0;top:0;background:red;}
			#btn{position:absolute;top:250px;}
		</style>

</head>
<body>
<h1><?php echo ($title); ?></h1>

	<div id="div1"></div>
	<button id="btn" onclick="startMove()">click me</button>
	<script>
		var timer;
		function startMove(){
			var oDiv1 = document.getElementById("div1");
			var oBtn = document.getElementById("btn");
			clearInterval(timer);
			timer = setInterval(function(){
				if(oDiv1.offsetLeft < 300){
					oDiv1.style.left = oDiv1.offsetLeft + 10 + "px";
				}else{
					clearInterval(timer);
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