<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($title); ?> - 阮文武的网络日志</title>
<meta name="keywords" content="<?php echo ($keywords); ?>" />
<meta name="description" content="<?php echo ($description); ?>" />

	<style>
		div{width:200px;height:200px;background:red;position:absolute;top:200px;left:0;}
	</style>

</head>
<body>
<h1><?php echo ($title); ?></h1>

	<div id="div1">来拖我~~</div>


<script>
	window.onload = function(){
		var oDiv = document.getElementById("div1");
		oDiv.onmousedown = function(){
			var pos = getPos();
			console.log(pos);
			var diffX = pos.x - this.offsetLeft;
			var diffY = pos.y - this.offsetTop;
			console.log(diffX+","+diffY);
			document.onmousemove = function(){
				var pos = getPos();
				oDiv.style.left = pos.x - diffX + "px";
				oDiv.style.top  = pos.y - diffY + "px";
			}
			
			document.onmouseup = function(){
				//oDiv.onmousedown = null;
				document.onmousemove = null;
				document.onmouseup = null;
			}
			
			return false;	//阻止在ff下的默认事件
		}
	}
	
	function getPos(){
		var oTop  = document.documentElement.scrollTop || document.body.scrollTop;
		var oLeft = document.documentElement.scrollLeft || document.body.scrollLeft;
		var e = arguments.callee.caller.arguments[0] || event;
		var y = oTop + e.clientY;
		var x = oLeft + e.clientX;
		return {x:x,y:y};
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