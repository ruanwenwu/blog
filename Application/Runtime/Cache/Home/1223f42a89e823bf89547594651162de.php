<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head> 
    <meta name="baidu-site-verification" content="J8ew7HWRsH" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black-translucent" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta charset="utf-8" />
    <title><?php echo ($title); ?> - 阮文武的网络日志</title>
    <meta name="description" content="<?php if($detail): echo ($detail["summary"]); else: ?>阮文武的博客，记录生活，分享感动<?php endif; ?>" />
    <meta name="keywords" conent="<?php if($detail): ?>阮文武,阮文武的博客,阮文武的blog,<?php echo ($detail["tag"]); else: ?>阮文武,阮文武的博客,php博客<?php endif; ?>,<?php echo ($title); ?>" />
    <link rel="stylesheet" type="text/css" href="//cdn.bootcss.com/normalize/4.2.0/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.bootcss.com/pure/0.6.0/pure-min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.bootcss.com/pure/0.6.0/grids-responsive-min.css">
    <link href="http://www.js-css.cn/jscode/highlight/highlight1/prettify.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="/Public/css/style.css?v=0.0.2"> 
    
<style>
.respond_title{margin-top:0;}
.ad_title,.respond_title{font-family:SimHei;}
#commentform input, #commentform textarea{padding:4px; border:1px solid #7F9DB9; background-color:#fff;}
#commentform input:focus, #commentform textarea:focus{box-shadow:inset 0 0 1px #7F9DB9; outline:none;}
#commentform input{width:250px; margin:0 5px 5px 0; padding:8px;}
#commentform{margin:5px 0 0 0;}
#commentform textarea {width:95%; height:140px; overflow:auto;}
#commentform #submit{width:100px; height:36px; background-color:#f0f3f9;color:#333; overflow:visible; cursor:pointer; box-shadow:1px 1px #AFC4EA,2px 2px #AFC4EA,3px 3px #AFC4EA; font-size:14px;}
#commentform #submit:active{-ms-transform:translate(1px,1px);transform:translate(1px,1px);box-shadow:1px 1px #AFC4EA,2px 2px #AFC4EA;}
#commentform #submit:hover{background-color:#EAEDF5;}
form.mobile p > label {display:none;}
#commentform.mobile input {box-sizing:border-box;width:100%;margin:0 0 10px;font-size:16px;}
form.mobile textarea{font-size:16px;}
#respond{padding-left:25px;}
#respond:after{	content:""; display:table; clear:both;}
/* End Form Elements *//* Begin Comments*/
.alt {margin:0;padding:10px;}
.commentlist{width:90%; padding-left:25px;}
.commentlist li{margin:15px 0 10px; padding:5px 5px 10px 10px;}
.commentlist li ul li{margin-left:1em; background-color:#eee;}
.commentlist p{margin:10px 5px 10px 0;}
.comment-body{word-break:break-all;}
.children{padding:0;list-style:none;}
#commentform p{margin:5px 0; overflow:hidden; zoom:1;}
.nocomments{text-align:center;margin:0;padding:0;}
.commentmetadata {margin:0;display:block;}

.commentlist li{font-size: 14px;}
.commentlist li {font-weight:bold;}
.commentlist li .avatar{float:right; border:1px solid #eee;	padding:2px;background:#fff;}
.commentlist cite, .commentlist cite a {font-weight:bold;font-style:normal;}
.commentlist p {font-weight:normal;line-height:1.5; text-transform:none;	}
.commentmetadata {font-weight:normal;}

.thread-alt{background-color:#f8f8f8;}
.thread-even{background-color:white;}
.depth-1{border:1px solid #ddd;}
.even, .alt{border-left:1px solid #ddd;}

/*@media screen and （max-width： 650px） {
	 #commentform textarea{width:95%}
}*/
</style>
 
    <link rel="stylesheet" href="/Public/admin/fonts/css/font-awesome.min.css">
    <link rel="Shortcut Icon" type="image/x-icon" href="/Public/img/favicon.ico">
    <link rel="apple-touch-icon" href="/Public/img/apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" href="/Public/img/apple-touch-icon.png"></head>
  
  <body onload="prettyPrint()">
    <div class="body_container">
      <div id="header">
        <div class="site-name">
          <a id="logo" href="/.">阮文武</a>
          <p class="description"><?php echo ($motto); ?></p></div>
        <div id="nav-menu">
          <a href="/." class="<?php echo ($index_current); ?>">
            <i class="fa fa-home">首页</i></a>
          <a class="<?php echo ($archive_current); ?>" href="/blog/archive/">
            <i class="fa fa-archive">归档</i></a>
          <a class="<?php echo ($about_current); ?>" href="/blog/my/">
            <i class="fa fa-user">关于</i></a>
        </div>
      </div>
      <div id="layout" class="pure-g">
        <div class="pure-u-1 pure-u-md-3-4">
          <div class="content_container">
          
<div class="post">
    <h1 class="post-title"><?php echo ($detail['title']); ?></h1>
    <div class="post-meta"><?php echo date("M d, Y",$detail['ctime']);?>
        <span id="busuanzi_container_page_pv">|
        <span id="busuanzi_value_page_pv"><?php echo ($detail['pv']); ?></span>
        <span>Hits</span></span>
    </div>
    <a data-thread-key="2016/09/11/apache的virtualhost/" href="/blog/<?php echo ($detail['id']); ?>.html#comment" class="ds-thread-count"><?php if($commentNum): echo ($commentNum); ?>条评论<?php else: ?>暂无评论<?php endif; ?></a>
    <div class="post-content">
        <?php echo ($detail['content']); ?> 
    </div>
    <?php if($detail['tag']): ?><div class="tags">
        <a href="/blog/tag/<?php echo ($detail['tag']); ?>/"><?php echo ($detail['tag']); ?></a>
    </div><?php endif; ?>
    <div class="post-nav">
    		<?php if($prevRes): ?><a href="/blog/<?php echo ($prevRes['id']); ?>.html" class="pre"><?php echo ($prevRes['title']); ?></a><?php endif; ?>
        <?php if($nextRes): ?><a href="/blog/<?php echo ($nextRes['id']); ?>.html" class="next"><?php echo ($nextRes['title']); ?></a><?php endif; ?>
    </div>
</div>
<!--<div>
<a href="https://github.com/login/oauth/authorize?client_id=3d1ac5a564661c9e25ba&scope=user&state=jard&allow_signup=true">使用github登陆</a>
</div>-->
<!--评论开始-->

<div id="respond">
<h3 class="respond_title fa fa-pencil"><a href="<?php if(empty($userinfo)): ?>https://github.com/login/oauth/authorize?client_id=3d1ac5a564661c9e25ba&scope=user&state=jard&allow_signup=true<?php else: ?>javascript:;<?php endif; ?>">发表评论</a>（目前<?php echo ($commentNum); ?>条评论）</h3>
<?php if($userinfo): ?><div id="cancel-comment-reply"> 
	<small><a rel="nofollow" id="cancel-comment-reply-link" href="javascript:;" style="display:none;">点击这里取消回复。</a></small>
</div> 


<form onsubmit="<?php if(empty($userinfo)): ?>location.href='https://github.com/login/oauth/authorize?client_id=3d1ac5a564661c9e25ba&scope=user&state=jard&allow_signup=true';return false;<?php else: ?>return true;<?php endif; ?>" action="/index.php/Home/Index/add" method="post" id="commentform">


<p><input name="name" id="author" value="<?php echo ($userinfo['login']); ?>" readonly size="22" tabindex="1" aria-required="true" required="true" type="text">
<label for="author"><small>名称 (必须)</small></label></p>

<p><input name="email" id="email" value="" size="22" tabindex="2" aria-required="true" required="true" type="email">
<label for="email"><small>邮件地址(不会被公开) (必须)</small></label></p>

<p><input name="website" id="url" value="" size="22" tabindex="3" type="url">
<label for="url"><small>网站</small></label></p>


<!--<p><small><strong>XHTML：</strong>您可以使用这些标签：<code>&lt;a href=&quot;&quot; title=&quot;&quot;&gt; &lt;abbr title=&quot;&quot;&gt; &lt;acronym title=&quot;&quot;&gt; &lt;b&gt; &lt;blockquote cite=&quot;&quot;&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=&quot;&quot;&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=&quot;&quot;&gt; &lt;strike&gt; &lt;strong&gt; </code></small></p>-->

<p><textarea name="content" id="comment" required="true" cols="100%" rows="10" tabindex="4"></textarea></p>
<p>
<input name="vcode" required="true" id="vcode" type="text" style="width:80px;" />
<img style="position:relative;top:12px;" src="/index.php?c=Index&a=showVerifyCode" onclick="this.src=this.src+'&t='+(new Date()).getTime()"/>
<label for="vcode"><small>验证码 (必须)</small></label>

</p>
<p><input id="submit" tabindex="5" value="提交评论" type="submit"><span id="commRem" class="ml20" style="color:#cd0000;"></span>
<input name="postid" value="<?php echo ($detail['id']); ?>" id="comment_post_ID" type="hidden">
<input name="pid" id="comment_parent" value="0" type="hidden">
<input type="hidden" name="depth" id="comment_depth" value="1" />
<input type="hidden" name="csrf" value="<?php echo ($csrf); ?>" />
</p>
</form><?php endif; ?>
</div>

<ol class="commentlist">
<?php if(is_array($comments)): foreach($comments as $k=>$vo): ?><li class="comment <?php if($k%2 == 0): ?>even<?php else: ?>alt<?php endif; ?> thread-<?php if($k%2 == 0): ?>even<?php else: ?>alt<?php endif; ?> depth-1 parent" id="comment-<?php echo ($vo['id']); ?>">
		<div id="div-comment-<?php echo ($vo['id']); ?>" class="comment-body">
			<div class="comment-author vcard">
				<img src="<?php echo ($vo['userinfo']['avatar']); ?>" class="avatar avatar-32" height="32" width="32">
				<cite class="fn"><?php echo ($vo['name']); ?></cite><span class="says">说道：</span>
			</div>
		
			<div class="comment-meta commentmetadata">
				<a href="javascript:;">
			<?php echo date("Y年m月d日 H:i",$vo['ctime']);?></a>		
			</div>

			<p><?php echo ($vo['content']); ?></p>

			<div class="reply">
				<a  class="comment-reply-link" cid="<?php echo ($vo['id']); ?>" depth="<?php echo ($vo['depth']); ?>" href="<?php if(empty($userinfo)): ?>https://github.com/login/oauth/authorize?client_id=3d1ac5a564661c9e25ba&scope=user&state=jard&allow_signup=true<?php else: ?>javascript:;<?php endif; ?>" aria-label="回复给dont">回复</a>
			</div>
		</div>
		
		
		<?php if($vo['child']): ?><ul class="children">
			<?php if(is_array($vo['child'])): foreach($vo['child'] as $key=>$cvo): ?><li class="comment byuser comment-author-admin bypostauthor even depth-2 parent" id="comment-<?php echo ($cvo['id']); ?>">
				<div id="div-comment-<?php echo ($cvo['id']); ?>" class="comment-body">
					<div class="comment-author vcard">
						<img src="<?php echo ($cvo['userinfo']['avatar']); ?>" class="avatar avatar-32" height="32" width="32">
						<cite class="fn">
							<a href="<?php echo ($cvo['website']); ?>" rel="external nofollow" class="url"><?php echo ($cvo['name']); ?></a>
						</cite>
						<span class="says">说道：</span>		
					</div>
			
					<div class="comment-meta commentmetadata"><a href="javascript:;">
				<?php echo date("Y年m月d日 H:i");?></a>		
					</div>
	
					<p><?php echo ($cvo['content']); ?></p>
	
					<div class="reply">
						<a class="comment-reply-link" cid="<?php echo ($cvo['id']); ?>" depth="<?php echo ($cvo['depth']); ?>" href="<?php if(empty($userinfo)): ?>https://github.com/login/oauth/authorize?client_id=3d1ac5a564661c9e25ba&scope=user&state=jard&allow_signup=true<?php else: ?>javascript:;<?php endif; ?>" aria-label="回复给张 鑫旭">回复</a>
					</div>
				</div>

				<?php if($cvo['child']): ?><ul class="children">
					<?php if(is_array($cvo['child'])): foreach($cvo['child'] as $key=>$ccvo): ?><li class="comment odd alt depth-3 parent" id="comment-<?php echo ($ccvo['id']); ?>">
						<div id="div-comment-<?php echo ($ccvo['id']); ?>" class="comment-body">
							<div class="comment-author vcard">
								<img src="<?php echo ($ccvo['userinfo']['avatar']); ?>" class="avatar avatar-32" height="32" width="32">
								<cite class="fn"><?php echo ($ccvo['name']); ?></cite><span class="says">说道：</span>
							</div>
		
							<div class="comment-meta commentmetadata">
								<a href="http://www.zhangxinxu.com/wordpress/2016/07/pc-website-use-zepto-js/comment-page-1/#comment-322472">
			<?php echo date("Y年m月d日 H:i");?></a>		
							</div>

							<p><?php echo ($ccvo['content']); ?></p>

							<div class="reply">
								<a class="comment-reply-link" href="<?php if(empty($userinfo)): ?>https://github.com/login/oauth/authorize?client_id=3d1ac5a564661c9e25ba&scope=user&state=jard&allow_signup=true<?php else: ?>javascript:;<?php endif; ?>" cid="<?php echo ($ccvo['id']); ?>" depth="<?php echo ($ccvo['depth']); ?>" aria-label="回复给城市精灵">回复</a>
							</div>
						</div>
						
						<?php if($ccvo['child']): ?><ul class="children">
							<?php if(is_array($ccvo['child'])): $i = 0; $__LIST__ = $ccvo['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cccvo): $mod = ($i % 2 );++$i;?><li class="comment even depth-4" id="comment-<?php echo ($cccvo['id']); ?>">
									<div id="div-comment-<?php echo ($cccvo['id']); ?>" class="comment-body">
										<div class="comment-author vcard">
											<!--<img src="https://secure.gravatar.com/avatar/967d2b16eb92c820dab003cf80dd943a?s=32" class="avatar avatar-32" height="32" width="32">-->
											<cite class="fn"><?php echo ($cccvo['name']); ?></cite>
											<span class="says">说道：</span>		
										</div>
				
										<div class="comment-meta commentmetadata">
											<a href="javascript:;">
					<?php echo date("Y年m月d日 H:i");?></a>		
										</div>
		
										<p><?php echo ($cccvo['content']); ?></p>		
									</div>
								</li><!-- #comment-## --><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul><!-- .children --><?php endif; ?>
						
					</li><!-- #comment-## --><?php endforeach; endif; ?>
				</ul><!-- .children --><?php endif; ?>
				
			</li><!-- #comment-## --><?php endforeach; endif; ?>
		</ul><!-- .children --><?php endif; ?>
		
		
	</li><?php endforeach; endif; ?>			
</ol>

          </div>
        </div>
        <div class="pure-u-1-4 hidden_mid_and_down">
          <div id="sidebar">
            <div class="widget">
              <div class="search-form">
                <input id="local-search-input" style="outline:none;" placeholder="Search" type="text" name="q" results="0" />
                <div id="local-search-result"></div>
              </div>
            </div>
            <?php echo W('Cate/Category');?>
            <?php echo W('Cate/Tag');?>
            <?php echo W('Cate/Latest');?>
             <?php echo W('Cate/Newreply');?>
            <?php echo W('Cate/Friendlink');?>
           
        </div>
        <div class="pure-u-1 pure-u-md-3-4">
          <div id="footer">©
            <a href="/." rel="nofollow">DB.</a>Powered by
            <a rel="nofollow" target="_blank" href="http://www.ruanwenwu.cn">ruanwenwu.cn.</a>
            <a rel="nofollow" target="_blank" href="https://github.com/tufu9441/maupassant-hexo">Theme</a>by
            <a rel="nofollow" target="_blank" href="https://github.com/pagecho">Cho.</a></div>
        </div>
      </div>
      <a id="rocket" href="#top" class="show"></a>
    </div>
  </body>
  	  <script type="text/javascript" src="//cdn.bootcss.com/jquery/3.0.0/jquery.min.js"></script>
      <script type="text/javascript" src="/Public/js/totop.js?v=0.0.0" async></script>
      <script type="text/javascript" src="/Public/js/codeblock-resizer.js?v=0.0.0"></script>
      <script type="text/javascript" src="/Public/js/smartresize.js?v=0.0.0"></script>   
      
<script src="/Public/js/detail.js?jack"></script>

	  <script type="text/javascript" src="http://www.js-css.cn/jscode/highlight/highlight1/prettify.js"></script>
      <script>
      	  var preObj = document.getElementsByTagName("pre");
      	  for(var i = 0; i < preObj.length; i++){
      		  preObj[i].className = "prettyprint lang-php";
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
	<script>
		//搜索功能
		var oSearch = document.getElementById("local-search-input");
		oSearch.onkeydown = function(e){
			if(this.value != "" && e.keyCode == 13){
				location.href = "/index.php/Home/Index/search/keywords/"+this.value;
			}
		}
	</script>
</html>