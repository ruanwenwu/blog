/**
 * 详情页js
 */
function detail(){
	this.replyFormContainer = document.getElementById("respond");	
	this.commentList = document.querySelector(".commentlist");
	this.oCancleBtn = document.getElementById("cancel-comment-reply-link");
	this.commentForm = document.getElementById("commentform");
	this.commentPidInput = this.commentForm.pid;		//会随时改变
	this.commentDepthInput = this.commentForm.depth;	//会随时改变
}
detail.prototype = {
		/*
		 * 移动回复form
		 * obj为当前被点击的“回复按钮”对象
		 */
		moveReplyContainer:function(obj){
			obj.parentNode.appendChild(this.replyFormContainer);
			this.oCancleBtn.style.display = "block";
		},
		
		/**
		 * 添加取消回复事件
		 */
		cancelReplyEvent:function(){
			var self = this;			
			this.oCancleBtn.onclick = function(){
				self.cancelReply();
				this.style.display = "none";
			}
		}, 
		/*
		 * 添加回复事件
		 */
		replyEvent:function(){
			var oReplyBtns = document.querySelectorAll(".comment-reply-link");
			var self = this;
			for(var i = 0; i < oReplyBtns.length; i++){
				oReplyBtns[i].onclick = function(e){
					self.moveReplyContainer(this);
					self.commentPidInput.value = this.getAttribute("cid");
					self.commentDepthInput.value = parseInt(this.getAttribute("depth")) + 1;
				}
			}
		},
		
		/*
		 * 绑定事件
		 */
		bindEvent:function(){
			this.replyEvent();
			this.cancelReplyEvent();
		},
		
		/*
		 * 取消评论，将评论放回原位
		 */
		cancelReply:function(){
			this.commentList.parentNode.insertBefore(this.replyFormContainer,this.commentList);
			this.commentPidInput.value = 0;
			this.commentDepthInput.value = 1;
		}
}

var oDetail = new detail();
oDetail.bindEvent();