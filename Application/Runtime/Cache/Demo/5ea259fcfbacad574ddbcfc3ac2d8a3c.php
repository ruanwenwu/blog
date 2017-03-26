<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($title); ?> - 阮文武的网络日志</title>
<meta name="keywords" content="<?php echo ($keywords); ?>" />
<meta name="description" content="<?php echo ($description); ?>" />

<style>
	#div1{width:200px;height:200px;background:red;position:absolute;left:0;top:0;}
</style>

</head>
<body>
<h1><?php echo ($title); ?></h1>

	<p>this is a test paragraph</p>
	<p>this is a test paragraph</p>
	<p>this is a test paragraph</p>
	<p>this is a test paragraph</p>
	<div id="div1">
		<p>inside paragrap</p>
		<p>inside paragrap</p>
		<p>inside paragrap</p>
	</div>


<script>
window.onload = function(){
	var oDiv = document.getElementById("div1");
	oDiv.onmousedown = function(){
		var pos = getPos();
		var diffX = pos.x - this.offsetLeft;
		var diffY = pos.y - this.offsetTop;
		var moveObj;
		
		if(oDiv.setCapture){
			moveObj = oDiv;
		}else{
			moveObj = document;
		}
		
		moveObj.onmousemove = mousemove;
		
		moveObj.onmouseup = function(){
			this.onmousemove = null;
			this.onmouseup   = null;
			if(this.releaseCapture){
				this.releaseCapture();
			}
		}
		
		if(this.setCapture){
			this.setCapture();
		}
		
		return false;
		
		function mousemove(){
			var pos = getPos();
			oDiv.style.left = pos.x - diffX + 'px';
			oDiv.style.top  = pos.y - diffY + 'px';
		}
	}
}

function getPos(){
	var sTop  = document.documentElement.scrollTop || document.body.scrollTop;
	var sLeft = document.documentElement.scrollLeft || document.body.scrollLeft;
	var e=arguments.callee.caller.arguments[0] || window.event; 
	return {x : sLeft + e.clientX, y : sTop + e.clientY};
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