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
    <title>DB | 我爱这温柔的夜</title>
    <link rel="stylesheet" type="text/css" href="//cdn.bootcss.com/normalize/4.2.0/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.bootcss.com/pure/0.6.0/pure-min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.bootcss.com/pure/0.6.0/grids-responsive-min.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/style.css?v=0.0.0">
    <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <script type="text/javascript" src="//cdn.bootcss.com/jquery/3.0.0/jquery.min.js"></script>
    <link rel="Shortcut Icon" type="image/x-icon" href="/Public/img/favicon.ico">
    <link rel="apple-touch-icon" href="/Public/img/apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" href="/Public/img/apple-touch-icon.png"></head>
  
  <body>
    <div class="body_container">
      <div id="header">
        <div class="site-name">
          <h1 class="hidden">DB</h1>
          <a id="logo" href="/.">DB</a>
          <p class="description">我爱着温柔的夜</p></div>
        <div id="nav-menu">
          <a href="/." class="<?php echo ($index_current); ?>">
            <i class="fa fa-home">首页</i></a>
          <a class="<?php echo ($archieve_current); ?>" href="/archives/">
            <i class="fa fa-archive">归档</i></a>
          <a class="<?php echo ($about_current); ?>" href="/my/">
            <i class="fa fa-user">关于</i></a>
        </div>
      </div>
      <div id="layout" class="pure-g">
        <div class="pure-u-1 pure-u-md-3-4">
          <div class="content_container">
          
<div class="post">
  <div class="post-archive">
    <!--Use lodash to classify posts. See https://lodash.com/docs#groupBy-->
      <h2>2016</h2>
      <ul class="listing">
        <li>
          <span class="date">2016/09/29</span>
          <a href="/2016/09/29/test-100/" title="test_100">test_100</a></li>
        <li>
          <span class="date">2016/09/29</span>
          <a href="/2016/09/29/test-99/" title="test_99">test_99</a></li>
        <li>
          <span class="date">2016/09/29</span>
          <a href="/2016/09/29/test-98/" title="test_98">test_98</a></li>
        <li>
          <span class="date">2016/09/29</span>
          <a href="/2016/09/29/test-97/" title="test_97">test_97</a></li>
        <li>
          <span class="date">2016/09/29</span>
          <a href="/2016/09/29/test-96/" title="test_96">test_96</a></li>
        <li>
          <span class="date">2016/09/29</span>
          <a href="/2016/09/29/test-95/" title="test_95">test_95</a></li>
        <li>
          <span class="date">2016/09/29</span>
          <a href="/2016/09/29/test-94/" title="test_94">test_94</a></li>
        <li>
          <span class="date">2016/09/29</span>
          <a href="/2016/09/29/test-93/" title="test_93">test_93</a></li>
        <li>
          <span class="date">2016/09/29</span>
          <a href="/2016/09/29/test-92/" title="test_92">test_92</a></li>
        <li>
          <span class="date">2016/09/29</span>
          <a href="/2016/09/29/test-91/" title="test_91">test_91</a></li>
      </ul>
    </div>
  </div>
  <nav class="page-navigator">
    <span class="page-number current">1</span>
    <a class="page-number" href="/archives/page/2/">2</a>
    <a class="page-number" href="/archives/page/3/">3</a>
    <span class="space">&hellip;</span>
    <a class="page-number" href="/archives/page/11/">11</a>
    <a class="extend next" rel="next" href="/archives/page/2/">下一页</a></nav>

          </div>
        </div>
        <div class="pure-u-1-4 hidden_mid_and_down">
          <div id="sidebar">
            <div class="widget">
              <div class="search-form">
                <input id="local-search-input" placeholder="Search" type="text" name="q" results="0" />
                <div id="local-search-result"></div>
              </div>
            </div>
            <?php echo W('Cate/Category');?>
            <?php echo W('Cate/Tag');?>
            <?php echo W('Cate/Latest');?>
            <?php echo W('Cate/Friendlink');?>
        </div>
        <div class="pure-u-1 pure-u-md-3-4">
          <div id="footer">©
            <a href="/." rel="nofollow">DB.</a>Powered by
            <a rel="nofollow" target="_blank" href="https://hexo.io">Hexo.</a>
            <a rel="nofollow" target="_blank" href="https://github.com/tufu9441/maupassant-hexo">Theme</a>by
            <a rel="nofollow" target="_blank" href="https://github.com/pagecho">Cho.</a></div>
        </div>
      </div>
      <a id="rocket" href="#top" class="show"></a>
      <script type="text/javascript" src="/Public/js/totop.js?v=0.0.0" async></script>
      <script>var duoshuoQuery = {
          short_name: 'ruanwenwu'
        }; (function() {
          var ds = document.createElement('script');
          ds.type = 'text/javascript';
          ds.async = true;
          ds.src = (document.location.protocol == 'https:' ? 'https:': 'http:') + '//static.duoshuo.com/embed.js';
          ds.charset = 'UTF-8'; (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ds);
        })();</script>
      <script type="text/javascript" src="/Public/js/search.js?v=0.0.0"></script>
      <script>var search_path = 'search.xml';
        if (search_path.length == 0) {
          search_path = 'search.xml';
        }
        var path = '/' + search_path;
        searchFunc(path, 'local-search-input', 'local-search-result');</script>
      <script type="text/javascript" src="/Public/js/codeblock-resizer.js?v=0.0.0"></script>
      <script type="text/javascript" src="/Public/js/smartresize.js?v=0.0.0"></script>
      
    </div>
  </body>

</html>