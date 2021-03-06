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
    <!--<link href="http://www.js-css.cn/jscode/highlight/highlight1/prettify.css" type="text/css" rel="stylesheet"/>-->
    <link rel="stylesheet" type="text/css" href="/Public/css/style.css?v=0.0.2"> 
     
    <link rel="stylesheet" href="/Public/admin/fonts/css/font-awesome.min.css">
    <link rel="Shortcut Icon" type="image/x-icon" href="/Public/img/favicon.ico">
    <link rel="apple-touch-icon" href="/Public/img/apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" href="/Public/img/apple-touch-icon.png"></head>
  
  <body>
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
          
<?php if($index): ?><h1 style="display:none;">阮文武</h1><?php endif; ?>
<?php if(is_array($post)): foreach($post as $key=>$vo): ?><div class="post">
     <h2 class="post-title">
       <a href="/blog/<?php echo ($vo['id']); ?>.html"><?php echo ($vo['title']); ?></a></h2>
     <div class="post-meta"><?php echo date("Y-m-d H:i:s",$vo['ctime']);?></div>
     <a data-thread-key="" href="/blog/<?php echo ($vo['id']); ?>.html" class="ds-thread-count"><?php if($vo['comment_num']): echo ($vo['comment_num']); ?>条评论<?php else: ?>暂无评论<?php endif; ?></a>
     <div class="post-content">
        <?php echo ($vo['summary']); ?>
     </div>
     <p class="readmore">
       <a href="/blog/<?php echo ($vo['id']); ?>.html">阅读更多</a>
     </p>
   </div><?php endforeach; endif; ?>
<?php if($show): echo ($show); endif; ?>

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
      
	  <!--<script type="text/javascript" src="http://www.js-css.cn/jscode/highlight/highlight1/prettify.js"></script>-->
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