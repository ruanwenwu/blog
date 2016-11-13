<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black-translucent" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta charset="utf-8" />
    <meta name="description">
    <title><?php echo ($title); ?></title>
    <link rel="stylesheet" type="text/css" href="//cdn.bootcss.com/normalize/4.2.0/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.bootcss.com/pure/0.6.0/pure-min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.bootcss.com/pure/0.6.0/grids-responsive-min.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/style.css?v=0.0.0">
    
    <link rel="stylesheet" href="/Public/admin/fonts/css/font-awesome.min.css">
    <script type="text/javascript" src="//cdn.bootcss.com/jquery/3.0.0/jquery.min.js"></script>
    <link rel="Shortcut Icon" type="image/x-icon" href="/Public/img/favicon.ico">
    <link rel="apple-touch-icon" href="/Public/img/apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" href="/Public/img/apple-touch-icon.png"></head>
  
  <body>
    <div class="body_container">
      <div id="header">
        <div class="site-name">
          <h1 class="hidden">阮文武</h1>
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
  <div class="post-archive">
    <!--Use lodash to classify posts. See https://lodash.com/docs#groupBy-->
    <?php if(is_array($groupList)): foreach($groupList as $k=>$vo): ?><h2><?php echo ($k); ?></h2>
      <ul class="listing">
      	<?php if(is_array($vo)): foreach($vo as $key=>$cvo): ?><li>
          <span class="date"><?php echo date("Y/m/d",$cvo['ctime']);?></span>
          <a href="/blog/<?php echo ($cvo['id']); ?>.html" title="<?php echo ($cvo['title']); ?>"><?php echo ($cvo['title']); ?></a>
        </li><?php endforeach; endif; ?>
      </ul><?php endforeach; endif; ?>
    </div>
  </div>
  <?php echo ($show); ?>

          </div>
        </div>
        <div class="pure-u-1-4 hidden_mid_and_down">
          <div id="sidebar">
            <!--<div class="widget">
              <div class="search-form">
                <input id="local-search-input" placeholder="Search" type="text" name="q" results="0" />
                <div id="local-search-result"></div>
              </div>
            </div>-->
            <?php echo W('Cate/Category');?>
            <?php echo W('Cate/Tag');?>
            <?php echo W('Cate/Latest');?>
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
      <script type="text/javascript" src="/Public/js/totop.js?v=0.0.0" async></script>
      <script type="text/javascript" src="/Public/js/codeblock-resizer.js?v=0.0.0"></script>
      <script type="text/javascript" src="/Public/js/smartresize.js?v=0.0.0"></script>
      
    </div>
  </body>

</html>