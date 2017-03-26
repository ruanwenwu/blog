<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($title); ?> - 阮文武的网络日志</title>
<meta name="keywords" content="<?php echo ($keywords); ?>" />
<meta name="description" content="<?php echo ($description); ?>" />

	<style>
		#div1{width:200px;height:200px;background:red;position:absolute;top:30;left:0;}
	</style>

</head>
<body>
<h1><?php echo ($title); ?></h1>

<h1>sea.js的实例</h1>
<div id="div1">
</div>


	<script src="/Public/sea/sea.js"></script>
	<script>
	 // Set configuration
		  seajs.config({
			base: "/Public/sea/modules/",
			alias: {
			  "jquery": "jquery/jquery/1.10.1/jquery.js"
			}
		  });

		  seajs.use("/Public/sea/app/demo_index_sea_main");
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