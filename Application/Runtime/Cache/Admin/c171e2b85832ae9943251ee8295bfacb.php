<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>阮文武博客的后台</title>

  <!--icheck-->
  <link href="/Public/admin/js/iCheck/skins/minimal/minimal.css" rel="stylesheet">
  <link href="/Public/admin/js/iCheck/skins/square/square.css" rel="stylesheet">
  <link href="/Public/admin/js/iCheck/skins/square/red.css" rel="stylesheet">
  <link href="/Public/admin/js/iCheck/skins/square/blue.css" rel="stylesheet">

  <!--dashboard calendar-->
  <link href="/Public/admin/css/clndr.css" rel="stylesheet">

  <!--Morris Chart CSS -->
  <link rel="stylesheet" href="/Public/admin/js/morris-chart/morris.css">

  <!--common-->
  <link href="/Public/admin/css/style.css" rel="stylesheet">
  <link href="/Public/admin/css/style-responsive.css" rel="stylesheet">
  
 <link rel="stylesheet" href="http://validform.rjboy.cn/wp-content/themes/validform/style.css" type="text/css" media="all" />
 
 


  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="/Public/admin/js/html5shiv.js"></script>
  <script src="/Public/admin/js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="index.html"><img src="/Public/admin/images/logo.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.html"><img src="/Public/admin/images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->

        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="/Public/admin/images/photos/user-avatar.png" class="media-object">
                    <div class="media-body">
                        <h4><a href="#">John Doe</a></h4>
                        <span>"Hello There..."</span>
                    </div>
                </div>

                <h5 class="left-nav-title">Account Information</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                  <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                  <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                  <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <!--<li class="active"><a href="/manage/index.php?m=home&c=index&a=index"><i class="fa fa-home"></i> <span>首页</span></a></li>-->
                <li class="menu-list <?php if($ctl == 'post'): ?>nav-active<?php endif; ?>"><a href=""><i class="fa fa-laptop"></i> <span>帖子管理</span></a>
                    <ul class="sub-menu-list">
                        <li class="<?php if($act == 'post_index'): ?>active<?php endif; ?>"><a  href="/admin.php">发表帖子</a></li>
                        <li class="<?php if($act == 'post_all'): ?>active<?php endif; ?>"><a  href="/admin.php/Post/all">帖子列表</a></li>
                        <li style="<?php if($act == 'post_update'): else: ?>display:none;<?php endif; ?>" class="<?php if($act == 'post_update'): ?>active<?php endif; ?>"><a href="leftmenu_collapsed_view.html">修改帖子</a>
                        <!--<li><a href="horizontal_menu.html"> Horizontal Menu</a></li>-->
                    </ul>
                </li>
                <!--<li class="menu-list"><a href=""><i class="fa fa-cogs"></i> <span>Components</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="grids.html"> Grids</a></li>
                        <li><a href="gallery.html"> Media Gallery</a></li>
                        <li><a href="calendar.html"> Calendar</a></li>
                        <li><a href="tree_view.html"> Tree View</a></li>
                        <li><a href="nestable.html"> Nestable</a></li>

                    </ul>
                </li>

                <li><a href="fontawesome.html"><i class="fa fa-bullhorn"></i> <span>Fontawesome</span></a></li>

                <li class="menu-list"><a href=""><i class="fa fa-envelope"></i> <span>Mail</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="mail.html"> Inbox</a></li>
                        <li><a href="mail_compose.html"> Compose Mail</a></li>
                        <li><a href="mail_view.html"> View Mail</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href=""><i class="fa fa-tasks"></i> <span>Forms</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="form_layouts.html"> Form Layouts</a></li>
                        <li><a href="form_advanced_components.html"> Advanced Components</a></li>
                        <li><a href="form_wizard.html"> Form Wizards</a></li>
                        <li><a href="form_validation.html"> Form Validation</a></li>
                        <li><a href="editors.html"> Editors</a></li>
                        <li><a href="inline_editors.html"> Inline Editors</a></li>
                        <li><a href="pickers.html"> Pickers</a></li>
                        <li><a href="dropzone.html"> Dropzone</a></li>
                        <li><a href="http://www.weidea.net"> More</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-bar-chart-o"></i> <span>Charts</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="flot_chart.html"> Flot Charts</a></li>
                        <li><a href="morris.html"> Morris Charts</a></li>
                        <li><a href="chartjs.html"> Chartjs</a></li>
                        <li><a href="c3chart.html"> C3 Charts</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href="#"><i class="fa fa-th-list"></i> <span>Data Tables</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="basic_table.html"> Basic Table</a></li>
                        <li><a href="dynamic_table.html"> Advanced Table</a></li>
                        <li><a href="responsive_table.html"> Responsive Table</a></li>
                        <li><a href="editable_table.html"> Edit Table</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="fa fa-map-marker"></i> <span>Maps</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="google_map.html"> Google Map</a></li>
                        <li><a href="vector_map.html"> Vector Map</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-file-text"></i> <span>Extra Pages</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="profile.html"> Profile</a></li>
                        <li><a href="invoice.html"> Invoice</a></li>
                        <li><a href="pricing_table.html"> Pricing Table</a></li>
                        <li><a href="timeline.html"> Timeline</a></li>
                        <li><a href="blog_list.html"> Blog List</a></li>
                        <li><a href="blog_details.html"> Blog Details</a></li>
                        <li><a href="directory.html"> Directory </a></li>
                        <li><a href="chat.html"> Chat </a></li>
                        <li><a href="404.html"> 404 Error</a></li>
                        <li><a href="500.html"> 500 Error</a></li>
                        <li><a href="registration.html"> Registration Page</a></li>
                        <li><a href="lock_screen.html"> Lockscreen </a></li>
                    </ul>
                </li>
                <li><a href="login.html"><i class="fa fa-sign-in"></i> <span>Login Page</span></a></li>-->

            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->
    
    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->

            <!--search start-->
            <form class="searchform" action="index.html" method="post">
                <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
            </form>
            <!--search end-->

            <!--notification menu start -->
            <div class="menu-right">
                <ul class="notification-menu">
                   <!--<li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-tasks"></i>
                            <span class="badge">8</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">You have 8 pending task</h5>
                            <ul class="dropdown-list user-list">
                                <li class="new">
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Database update</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning">
                                                <span class="">40%</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Dashboard done</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-success">
                                                <span class="">90%</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Web Development</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 66%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="66" role="progressbar" class="progress-bar progress-bar-info">
                                                <span class="">66% </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Mobile App</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 33%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="33" role="progressbar" class="progress-bar progress-bar-danger">
                                                <span class="">33% </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Issues fixed</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar">
                                                <span class="">80% </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="new"><a href="">See All Pending Task</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge">5</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">You have 5 Mails </h5>
                            <ul class="dropdown-list normal-list">
                                <li class="new">
                                    <a href="">
                                        <span class="thumb"><img src="/Public/admin/images/photos/user1.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">John Doe <span class="badge badge-success">new</span></span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="/Public/admin/images/photos/user2.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jonathan Smith</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="/Public/admin/images/photos/user3.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jane Doe</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="/Public/admin/images/photos/user4.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Mark Henry</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="/Public/admin/images/photos/user5.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jim Doe</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="new"><a href="">Read All Mails</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">Notifications</h5>
                            <ul class="dropdown-list normal-list">
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #1 overloaded.  </span>
                                        <em class="small">34 mins</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #3 overloaded.  </span>
                                        <em class="small">1 hrs</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #5 overloaded.  </span>
                                        <em class="small">4 hrs</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #31 overloaded.  </span>
                                        <em class="small">4 hrs</em>
                                    </a>
                                </li>
                                <li class="new"><a href="">See All Notifications</a></li>
                            </ul>
                        </div>
                    </li>-->
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <img src="/Public/admin/images/photos/user-avatar.png" alt="" />
                            <?php echo ($userInfo['name']); ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                            <li><a href="/manage/index.php?c=index&a=index"><i class="fa fa-user"></i>  我的信息</a></li>
                            <!--<li><a href="#"><i class="fa fa-cog"></i>  Settings</a></li>-->
                            <li><a href="/manage/index.php?c=login&a=logout"><i class="fa fa-sign-out"></i>退出登录</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!--notification menu end -->

        </div>
        <!-- header section end-->

        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                <?php echo ($Dashboard['parent']['name']); ?>
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#"><?php echo ($Dashboard['parent']['name']); ?></a>
                </li>
                <li class="active"><?php echo ($Dashboard['child']['name']); ?></li>
            </ul>
            <!--<div class="state-info">
                <section class="panel">
                    <div class="panel-body">
                        <div class="summary">
                            <span>yearly expense</span>
                            <h3 class="red-txt">$ 45,600</h3>
                        </div>
                        <div id="income" class="chart-bar"></div>
                    </div>
                </section>
                <section class="panel">
                    <div class="panel-body">
                        <div class="summary">
                            <span>yearly  income</span>
                            <h3 class="green-txt">$ 45,600</h3>
                        </div>
                        <div id="expense" class="chart-bar"></div>
                    </div>
                </section>
            </div>-->
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
        
	<div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            博文管理
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <table class="table  table-hover general-table">
                                <thead>
                                <tr>
                                    <th> ID</th>
                                    <th class="hidden-phone">标题</th>
                                    <th>brief</th>
                                    <th>发表时间</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
							   <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
                                    
                                    <td class="hidden-phone"><?php echo ($vo['id']); ?></td>
                                    <td><?php echo ($vo['title']); ?></td>
                                    <td><?php echo ($vo['summary']); ?></td>
                                    <td><?php echo date("Y/m/d H:i:s",$vo['ctime']);?></td>
                                    <td>
                                        <a href="/admin.php/Post/updatePost/id/<?php echo ($vo['id']); ?>" class="btn">修改</a>
                                        <a id="<?php echo ($vo['id']); ?>" href="javascript:;" class="btn delPost">删除</a>
                                    </td>
                            
                                </tr><?php endforeach; endif; ?>
                                </tbody>
                            </table>
                            <?php echo ($show); ?>
                        </div>
                    </section>
                </div>
            </div>
 <div style="width:100%;height:200px;"id="editor"></div>

        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <footer>
            2014 &copy; AdminEx by ThemeBucket
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="/Public/admin/js/jquery-1.10.2.min.js"></script>
<script src="/Public/admin/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="/Public/admin/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/Public/admin/js/bootstrap.min.js"></script>
<script src="/Public/admin/js/modernizr.min.js"></script>
<script src="/Public/admin/js/jquery.nicescroll.js"></script>

<!--easy pie chart-->
<script src="/Public/admin/js/easypiechart/jquery.easypiechart.js"></script>
<script src="/Public/admin/js/easypiechart/easypiechart-init.js"></script>

<!--Sparkline Chart-->
<script src="/Public/admin/js/sparkline/jquery.sparkline.js"></script>
<script src="/Public/admin/js/sparkline/sparkline-init.js"></script>

<!--icheck -->
<script src="/Public/admin/js/iCheck/jquery.icheck.js"></script>
<script src="/Public/admin/js/icheck-init.js"></script>

<!-- jQuery Flot Chart-->
<script src="/Public/admin/js/flot-chart/jquery.flot.js"></script>
<script src="/Public/admin/js/flot-chart/jquery.flot.tooltip.js"></script>
<script src="/Public/admin/js/flot-chart/jquery.flot.resize.js"></script>



<!--Calendar-->
<script src="/Public/admin/js/calendar/clndr.js"></script>
<script src="/Public/admin/js/calendar/evnt.calendar.init.js"></script>
<script src="/Public/admin/js/calendar/moment-2.2.1.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>

<!--common scripts for all pages-->
<script src="/Public/admin/js/scripts.js"></script>

<!--Dashboard Charts-->
<!--<script src="/Public/admin/js/dashboard-chart-init.js"></script>-->


<script>
	$(function(){
		$(".delPost").click(function(){
			var id = $(this).attr("id");
			$.get("/admin.php/Ajax/delPost/id/"+id,function(response){
				if(response.status){
					alert("删除成功");
					location.reload();
				}else{
					alert("操作失败，请查看");
				}
			},"json");
		});
	});
</script>

<!--Morris Chart-->
<!--<script src="/Public/admin/js/morris-chart/morris.js"></script>
<script src="/Public/admin/js/morris-chart/raphael-min.js"></script>-->

</body>
</html>