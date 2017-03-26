define(function(require,exports,module){	
	function perfectDrag(ele){	
		var oDiv = document.getElementById(ele);			
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
	
	module.exports = perfectDrag;	

	function getPos(){
		var sTop  = document.documentElement.scrollTop || document.body.scrollTop;
		var sLeft = document.documentElement.scrollLeft || document.body.scrollLeft;
		var e=arguments.callee.caller.arguments[0] || window.event; 
		return {x : sLeft + e.clientX, y : sTop + e.clientY};
	}
});