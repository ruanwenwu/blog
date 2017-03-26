<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($title); ?> - 阮文武的网络日志</title>
<meta name="keywords" content="<?php echo ($keywords); ?>" />
<meta name="description" content="<?php echo ($description); ?>" />

<style>
	#div1{width:300px;height:300px;background:red;position:absolute;left:0;top:200px;}
	#div2{width:1px;height:800px;background:gray;position:absolute;left:300px;top:0;}
	#div3{width:1px;height:800px;background:gray;position:absolute;left:600px;top:0;}
</style>

</head>
<body>
<h1><?php echo ($title); ?></h1>

<div id="div1"></div>
<div id="div2"></div>
<div id="div3"></div>
<input type="button" id="btn1" onclick="startMove(300,10)" value="到300" />
<input type="button" id="btn2" onclick="startMove(600,5)" value="到600" />
<input type="button" id="btn3" onclick="startMove(0,8)"value="到0" />
<script>
	var oDiv1 = document.getElementById("div1");
	var oDiv2 = document.getElementById("div2");
	var oDiv3 = document.getElementById("div3");
	var oBtn1 = document.getElementById("btn1");
	var oBtn2 = document.getElementById("btn2");
	var oBtn3 = document.getElementById("btn3");
	var timer = null;
	function startMove(target,speedRate){
		clearInterval(timer);
		timer = setInterval(function(){
			var speed = (target - oDiv1.offsetLeft)/speedRate;
			speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);
			if(oDiv1.offsetLeft == target){
				clearInterval(timer);
			}else{
				oDiv1.style.left = oDiv1.offsetLeft + speed + "px";
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