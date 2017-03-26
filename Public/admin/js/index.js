window.onload = function(){
	function newPost(){
		this.form = document.getElementById("newpostform");
		this.formData = null;
		this.categoryContainer = document.getElementById("categoryContainer");
		this.tagContainer = document.getElementById("tagContainer");
		this.postUrl = this.form.getAttribute("action");
	}
	newPost.prototype = {
		getFormData:function(){
			this.formData = new FormData(this.form);			
		},
		sendData:function(){
			self = this;
			var xhr = new XMLHttpRequest();
			xhr.open("POST",self.postUrl,true);
			xhr.responseType = "json";
			xhr.onload = function(e){
				if(this.status == 200){
					console.log(this.response);
					alert("发表成功");
					document.getElementById("fabiao").setAttribute("disabled","disabled");
					location.href = "/admin.php/Post/all";
				}else{
					alert("系统故障，请联系管理员");
				}
			}
			xhr.send(this.formData);
		},
		bindEvent:function(){
			self = this;
			this.form.onsubmit = function(){
				self.getFormData();	//得到formdata
				self.sendData();
				return false;
			}
			
			$(this.categoryContainer).find("a").click(function(){
				$(this).addClass("btn-success");
				$(this).siblings().removeClass("btn-success");
				$(this).siblings("input").val(this.innerText);
			});
			
			$(this.tagContainer).find("a").click(function(){
				$(this).addClass("btn-success");
				$(this).siblings().removeClass("btn-success");
				$(this).siblings("input").val(this.innerText);
			});
			
			//$("#fabiao").click();
		},
		init:function(){
			this.bindEvent();
		}
	};
	var oNewPost = new newPost();
	oNewPost.init();
}