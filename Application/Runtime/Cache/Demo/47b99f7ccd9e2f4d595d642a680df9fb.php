<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($title); ?> - 阮文武的网络日志</title>
<meta name="keywords" content="<?php echo ($keywords); ?>" />
<meta name="description" content="<?php echo ($description); ?>" />

<style>
*{padding:0;margin:0;}
#container{width:680px;height:auto;overflow:hidden;margin:0 auto;}
ul{list-style:none;}
.big{width:680px;height:468px;position:relative;}
.big ul{position:absolute;width:680px;height:468px;left:0;top:0;z-index:0}
.big ul li{position:absolute;left:0;top:0;width:680px;height:468px;overflow:hidden;}
.big ul li img{width:100%;height:468px;}
.markleft,.markright{opacity:0;position:absolute;width:340px;height:469px;z-index:1;background:red;}
.markleft{left:0}
.markright{right:0}
.prev,.next{width: 39px;height: 65px;position: absolute;top: 50%;margin-top: -32px;background-image: url(http://icon.zol-img.com.cn/newshop/shop/index/focus-arrow.png);background-repeat: no-repeat;z-index:300000;opacity:0;filter:alpha(opacity:0);}
.prev{background-position:0 0;left:0;}
.next{background-position:0 -69px; right:0;}
.small{width:680px;height:114px;position:relative;background:#ededed;}
.small ul{position:absolute;left:0;top:0;width:680px;height:auto;overflow:hidden;}
.small ul li{width:150px;padding:10px;height:auto;overflow:hidden;float:left;}
.small ul li img{width:100%;height:94px;}
</style>

</head>
<body>
<h1><?php echo ($title); ?></h1>

<div id="container">
	<div class="big">
		<div class="markleft"></div>
		<div class="markright"></div>
		<div class="prev"></div>
		<div class="next"></div>
		<ul>
			<li style="z-index:1"><img src="/Application/Demo/View/Move/img/1.jpg" /></li>
			<li><img src="/Application/Demo/View/Move/img/2.jpg" /></li>
			<li><img src="/Application/Demo/View/Move/img/3.jpg" /></li>
			<li><img src="/Application/Demo/View/Move/img/4.jpg" /></li>
			<li><img src="/Application/Demo/View/Move/img/5.jpg" /></li>
			<li><img src="/Application/Demo/View/Move/img/6.jpg" /></li>
		</ul>
	</div>
	<div class="small">
		<ul>
			<li><img src="/Application/Demo/View/Move/img/1.jpg" /></li>
			<li><img src="/Application/Demo/View/Move/img/2.jpg" /></li>
			<li><img src="/Application/Demo/View/Move/img/3.jpg" /></li>
			<li><img src="/Application/Demo/View/Move/img/4.jpg" /></li>
			<li><img src="/Application/Demo/View/Move/img/5.jpg" /></li>
			<li><img src="/Application/Demo/View/Move/img/6.jpg" /></li>
		</ul>	
	</div>
</div>


<script>
	window.onload = function(){
		var oContainer = document.getElementById("container");	
		var oBig = getByStyle(oContainer, "big")[0];
		var oBigLis = oBig.getElementsByTagName("li");
		var liLength = oBigLis.length;
		var oSmalls = getByStyle(oContainer, "small");
		var oSmallUls = oSmalls[0].getElementsByTagName("ul");
		var oSmallUl = oSmallUls[0];
		var oSmallLis = oSmalls[0].getElementsByTagName("li");
		oSmallUl.style.width = (oSmallLis[0].offsetWidth) * oSmallLis.length + "px";
		var oLeftBtn = getByStyle(oBig, "prev")[0];
		var oRightBtn = getByStyle(oBig, "next")[0];
		var leftMark = getByStyle(oBig,"markleft")[0];
		var rightMark = getByStyle(oBig,"markright")[0];
		
		var nowIndex = 0;
		var direction = "right";
				
		leftMark.onmouseover = oLeftBtn.onmouseover = function(){
			startMove(oLeftBtn, "opacity", 100);
		}
		leftMark.onmouseout = oLeftBtn.onmouseout = function(){
			startMove(oLeftBtn, "opacity", 0);
		}
		rightMark.onmouseover = oRightBtn.onmouseover = function(){
			startMove(oRightBtn, "opacity", 100);
		}
		rightMark.onmouseout = oRightBtn.onmouseout = function(){
			startMove(oRightBtn, "opacity", 0);
		}
		
		oLeftBtn.onclick = function(){
			changeNowIndex(false);			
			moveEle();
			direction = "left";
		}
		
		oRightBtn.onclick = function(){
			direction = "right";
			//ֵ
			changeNowIndex(true);
			moveEle();
			
		}
		
		var autoMove = setInterval(function(){
			oRightBtn.click();
		},3000);
		
		oContainer.onmouseover = function(){
			clearInterval(autoMove); 
		}
		oContainer.onmouseout = function(){
			autoMove = setInterval(function(){
				if(direction == "right"){
					oRightBtn.click();
				}else{
					oLeftBtn.click();
				}
			},3000);
		}
				
		function changeNowIndex(right){
			if(right){
				if(nowIndex == liLength - 1){
					nowIndex = 0;
				}else{
					nowIndex++;
				}
			}else{
			//ֵ
				if(nowIndex == 0){
					nowIndex = liLength - 1;
				}else{
					nowIndex--;
				}
			}
		}
		
		function moveEle(){
			for(var i = 0; i < oBigLis.length; i++){
				oBigLis[i].style.zIndex = 0;
			}
			oBigLis[nowIndex].style.height = 0;
			oBigLis[nowIndex].style.zIndex = 1;			
			startMove(oBigLis[nowIndex], "height", 468);
			
			if(nowIndex >=0 && nowIndex <= liLength - 4){
				var smallTarget = - (nowIndex) * oSmallLis[0].offsetWidth;
				startMove(oSmallUl, "left", smallTarget);
			}else{
				var smallTarget = -(liLength - 4)*oSmallLis[0].offsetWidth;
				startMove(oSmallUl, "left", smallTarget);
			}
		}
	}
	
	function getByStyle(oParent,className){
		var oElements = oParent.getElementsByTagName("*");
		var oClassElements = new Array();
		for(var i = 0; i < oElements.length; i++){
			if(oElements[i].className ==className){
				oClassElements.push(oElements[i]);
			}
		}
		return oClassElements;
	}
	
	function getStyle(obj, attr){
		if(obj.currentStyle){
			return obj.currentStyle[attr];
		}else{
			return getComputedStyle(obj,false)[attr];
		}
	}
	
	function startMove(obj, attr, target){
		clearInterval(obj.timer);
		obj.timer = setInterval(function(){
			var cur = parseInt(getStyle(obj, attr));
			if(attr == "opacity"){
				cur = Math.round(parseFloat(getStyle(obj, attr))*100);
			}
			
			var speed = (target - cur)/10;
			speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);
			if(cur == target){
				clearInterval(obj.timer);
			}else{
				if(attr == 'opacity'){
					obj.style.opacity = (cur+speed)/100;
					obj.style.filter = "alpha(opacity:"+(cur+speed)+")";
				}else{
					obj.style[attr] = cur + speed + "px";
				}
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