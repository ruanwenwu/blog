<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($title); ?> - 阮文武的网络日志</title>
<meta name="keywords" content="<?php echo ($keywords); ?>" />
<meta name="description" content="<?php echo ($description); ?>" />

	<style>
		*{padding:0;border:0;}
		#div1{
			width:150px;
			height:auto;
			position:absolute;
			top:300px;
			left:-150px;
			background:#ededed;
		}
		#div2{
			width:29px;
			height:auto;
			overflow:hidden;
			position:absolute;
			top:20px;
			right:-29px;
			background:red;
		}
		ul{list-style:none;padding:0;margin:0;}
		#div3{
			width:200px;
			height:200px;
			background:red;
			position:absolute;
			top:300px;
			left:400px;
			opacity:0.3;
			filter:alpha(opacity:30);
		}
	</style>

</head>
<body>
<h1><?php echo ($title); ?></h1>

	<div id="div1">
			<ul>
				<li>微信</li>
				<li>百度</li>
				<li>微博</li>
				<li>qq</li>
				<li>人人</li>
				<li>开心</li>
			</ul>
			<div id="div2">分享到</div>
		</div>
		<div id="div3">
		</div>


	<script>
	window.onload = function(){
		var timer1;
		function startMove(obj,target){
			clearInterval(timer1);
			var speed = target - obj.offsetLeft > 0 ? 10 : -10;
			timer1 = setInterval(function(){
				if(Math.abs(target - obj.offsetLeft) < Math.abs(speed)){
					obj.style.left = target + "px";
					clearInterval(timer1);
				}else{
					obj.style.left = obj.offsetLeft + speed + "px";
				}		
			},30);			
		}
		
		
		var oDiv1 = document.getElementById("div1");
		var oDiv2 = document.getElementById("div2");
		var oDiv3 = document.getElementById("div3");
		oDiv1.onmouseover = function(){
			startMove(oDiv1,0);
		}
		oDiv1.onmouseout = function(){
			startMove(oDiv1,-150);
		}
				
		oDiv3.onmouseover = function(){
			startMove3(100);
		}
		oDiv3.onmouseout = function(){
			startMove3(30);
		}
		var alpha=30;
		var timer3 = null;
		function startMove3(target){
			clearInterval(timer3);
			timer3 = setInterval(function(){
				var speed;
				if(alpha < target){
					speed = 10;
				}else{
					speed = -10;
				}
				
				if(alpha == target){
					clearInterval(timer3);
				}else{
					alpha +=speed;
					oDiv3.style.filter='alpha(opacity:'+alpha+')';
					oDiv3.style.opacity=alpha/100;
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