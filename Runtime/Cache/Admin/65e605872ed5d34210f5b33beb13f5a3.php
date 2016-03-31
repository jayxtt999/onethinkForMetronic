<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title><?php echo ($meta_title); ?>|OneThink管理平台</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    <link href="/Public/static/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/static/assets/global/plugins/pace/themes/pace-theme-barber-shop.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/static/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/static/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/static/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/static/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    <link href="/Public/static/assets/global/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/static/assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/static/assets/global/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL PLUGIN STYLES -->
    <!-- BEGIN PAGE STYLES -->
    <link href="/Public/static/assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="/Public/static/assets/global/css/components.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/static/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/static/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/static/assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="/Public/static/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/static/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="/Public/static/assets/global/plugins/select2/select2.css"/>
    
    <!-- END THEME STYLES -->
    <link href="/Public/favicon.ico" type="image/x-icon" rel="shortcut icon">
</head>

<body class="page-header-fixed page-quick-sidebar-over-content">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="index.html">
                <img src="/Public/static/assets/admin/layout/img/logo.png" alt="logo" class="logo-default"/>
            </a>
            <div class="menu-toggler sidebar-toggler hide">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->


        <div class="hor-menu hor-menu-light hidden-sm hidden-xs">

            <ul class="nav navbar-nav">

                <?php if(is_array($__MENU__["main"])): $i = 0; $__LIST__ = $__MENU__["main"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li class="<?php if($menu["class"] == 'current'): ?>classic-menu-dropdown active<?php else: ?>classic-menu-dropdown<?php endif; ?>">
                        <a href="<?php echo (U($menu["url"])); ?>">
                        <?php echo ($menu["title"]); ?>
                            <?php if($menu["class"] == 'current'): ?><span class="selected"></span><?php endif; ?>
                        </a></li><?php endforeach; endif; else: echo "" ;endif; ?>

            </ul>
        </div>






        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">

                <li class="dropdown dropdown-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="img-circle hide1" src="/Public/static/assets/admin/layout/img/avatar3_small.jpg"/>
					<span class="username username-hide-on-mobile">
					<?php echo session('user_auth.username');?> </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo U('User/updatePassword');?>">修改密码</a></li>
                        <li><a href="<?php echo U('User/updateNickname');?>">修改昵称</a></li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                <li class="dropdown dropdown-quick-sidebar-toggler">
                    <a href="<?php echo U('Public/logout');?>" class="dropdown-toggle">
                        <i class="icon-logout"></i>
                    </a>
                </li>
                <!-- END QUICK SIDEBAR TOGGLER -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->



                <li class="sidebar-toggler-wrapper">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler">
                    </div>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                </li>
                <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                <li class="sidebar-search-wrapper">
                    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                    <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                    <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                    <form class="sidebar-search " action="extra_search.html" method="POST">
                        <a href="javascript:;" class="remove">
                            <i class="icon-close"></i>
                        </a>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
							<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
							</span>
                        </div>
                    </form>
                    <!-- END RESPONSIVE QUICK SEARCH FORM -->
                </li>


                <?php if(!empty($_extra_menu)): ?>
                    <?php echo extra_menu($_extra_menu,$__MENU__); endif; ?>

                <?php if(is_array($__MENU__["child"])): $k = 0; $__LIST__ = $__MENU__["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub_menu): $mod = ($k % 2 );++$k; if(!empty($sub_menu)): if(!empty($key)): $_key = $key; ?>
                            <li class="<?php if(array_key_exists($key,$__BOOTSTRAPMENU__)): ?>start active open<?php endif; ?>">
                                <a href="javascript:;">

                                    <span class="title"><?php echo ($key); ?></span>

                                    <?php if(array_key_exists($key,$__BOOTSTRAPMENU__)): ?><span class="arrow open"></span>
                                        <?php else: ?>
                                        <span class="arrow"></span><?php endif; ?>

                                </a>
                                <ul class="sub-menu">
                                    <?php if(is_array($sub_menu)): $i = 0; $__LIST__ = $sub_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li class="<?php if($menu["id"] == $__BOOTSTRAPMENU__[$_key]['current']['id']): ?>active<?php endif; ?>">
                                            <a href="<?php echo (U($menu["url"])); ?>">
                                                <?php echo ($menu["title"]); ?></a>
                                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </li><?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>

            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            Widget settings form goes here
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn blue">Save changes</button>
                            <button type="button" class="btn default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <!-- BEGIN STYLE CUSTOMIZER -->

            <div class="theme-panel hidden-xs hidden-sm">
                <div class="toggler">
                </div>
                <div class="toggler-close">
                </div>
                <div class="theme-options">
                    <div class="theme-option theme-colors clearfix">
						<span>
						主题颜色 </span>
                        <ul>
                            <li class="color-default current tooltips" data-style="default" data-container="body"
                                data-original-title="Default">
                            </li>
                            <li class="color-darkblue tooltips" data-style="darkblue" data-container="body"
                                data-original-title="Dark Blue">
                            </li>
                            <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue">
                            </li>
                            <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey">
                            </li>
                            <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light">
                            </li>
                            <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true"
                                data-original-title="Light 2">
                            </li>
                        </ul>
                    </div>
                    <div class="theme-option">
						<span>
						布局 </span>
                        <select class="layout-option form-control input-small">
                            <option value="fluid" selected="selected">不固定</option>
                            <option value="boxed">盒型</option>
                        </select>
                    </div>
                    <div class="theme-option">
						<span>
						头部 </span>
                        <select class="page-header-option form-control input-small">
                            <option value="fixed" selected="selected">固定</option>
                            <option value="default">默认</option>
                        </select>
                    </div>
                    <div class="theme-option">
						<span>
						侧边栏模式</span>
                        <select class="sidebar-option form-control input-small">
                            <option value="fixed">固定</option>
                            <option value="default" selected="selected">默认</option>
                        </select>
                    </div>
                    <div class="theme-option">
						<span>
						侧边栏菜单 </span>
                        <select class="sidebar-menu-option form-control input-small">
                            <option value="accordion" selected="selected">手风琴</option>
                            <option value="hover">悬停</option>
                        </select>
                    </div>
                    <div class="theme-option">
						<span>
						侧边栏样式 </span>
                        <select class="sidebar-style-option form-control input-small">
                            <option value="default" selected="selected">默认</option>
                            <option value="light">顶部</option>
                        </select>
                    </div>
                    <div class="theme-option">
						<span>
						边栏位置
</span>
                        <select class="sidebar-pos-option form-control input-small">
                            <option value="left" selected="selected">左</option>
                            <option value="right">右</option>
                        </select>
                    </div>
                    <div class="theme-option">
						<span>
						底部 </span>
                        <select class="page-footer-option form-control input-small">
                            <option value="fixed">固定</option>
                            <option value="default" selected="selected">默认</option>
                        </select>
                    </div>
                </div>
            </div>


            <!-- END STYLE CUSTOMIZER -->
            <!-- BEGIN PAGE HEADER-->
            <!--<h3 class="page-title">
                    <?php echo ($__BOOTSTRAPMENU__['_page-bar']['p3']); ?><small><?php echo ($__BOOTSTRAPMENU__['_page-bar']['tip']); ?></small>
            </h3>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <span><?php echo ($__BOOTSTRAPMENU__['_page-bar']['p1']); ?></span>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span><?php echo ($__BOOTSTRAPMENU__['_page-bar']['p2']); ?></span>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span><?php echo ($__BOOTSTRAPMENU__['_page-bar']['p3']); ?></span>
                    </li>
                </ul>
            </div>-->


            


	<div class="row">
		<div class="col-md-12">
			<!-- BEGIN EXAMPLE TABLE PORTLET-->
			<div class="portlet box grey-cascade">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-globe"></i>用户列表
					</div>
					<div class="tools">
						<a href="javascript:;" class="collapse">
						</a>
						<a href="#portlet-config" data-toggle="modal" class="config">
						</a>
						<a href="javascript:;" class="reload">
						</a>
						<a href="javascript:;" class="remove">
						</a>
					</div>
				</div>
				<div class="portlet-body">
					<div class="table-toolbar">
						<div class="row">
							<div class="col-md-6 cf">
								<div class="fl">


									<a class="btn green" href="<?php echo U('add');?>">新 增</a>

									<button class="btn green ajax-post" url="<?php echo U('changeStatus?method=resumeUser');?>" target-form="ids">
										启 用
									</button>

									<button class="btn green ajax-post" url="<?php echo U('changeStatus?method=forbidUser');?>" target-form="ids">
										禁 用
									</button>

									<button class="btn green ajax-post" url="<?php echo U('changeStatus?method=deleteUser');?>" target-form="ids">
										删 除
									</button>

								</div>
							</div>

						</div>
					</div>
					<table class="table table-striped table-bordered table-hover" id="sample_1">
						<thead>
						<tr>
							<th class="table-checkbox">
								<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"/>
							</th>
							<th>
								Username
							</th>
							<th>
								Email
							</th>
							<th>
								Points
							</th>
							<th>
								Joined
							</th>
							<th>
								Status
							</th>
						</tr>
						</thead>
						<tbody>
						<tr class="odd gradeX">
							<td>
								<input type="checkbox" class="checkboxes" value="1"/>
							</td>
							<td>
								shuxer
							</td>
							<td>
								<a href="mailto:shuxer@gmail.com">
									shuxer@gmail.com </a>
							</td>
							<td>
								120
							</td>
							<td class="center">
								12 Jan 2012
							</td>
							<td>
									<span class="label label-sm label-success">
									Approved </span>
							</td>
						</tr>
						<tr class="odd gradeX">
							<td>
								<input type="checkbox" class="checkboxes" value="1"/>
							</td>
							<td>
								looper
							</td>
							<td>
								<a href="mailto:looper90@gmail.com">
									looper90@gmail.com </a>
							</td>
							<td>
								120
							</td>
							<td class="center">
								12.12.2011
							</td>
							<td>
									<span class="label label-sm label-warning">
									Suspended </span>
							</td>
						</tr>
						<tr class="odd gradeX">
							<td>
								<input type="checkbox" class="checkboxes" value="1"/>
							</td>
							<td>
								userwow
							</td>
							<td>
								<a href="mailto:userwow@yahoo.com">
									userwow@yahoo.com </a>
							</td>
							<td>
								20
							</td>
							<td class="center">
								12.12.2012
							</td>
							<td>
									<span class="label label-sm label-success">
									Approved </span>
							</td>
						</tr>
						<tr class="odd gradeX">
							<td>
								<input type="checkbox" class="checkboxes" value="1"/>
							</td>
							<td>
								user1wow
							</td>
							<td>
								<a href="mailto:userwow@gmail.com">
									userwow@gmail.com </a>
							</td>
							<td>
								20
							</td>
							<td class="center">
								12.12.2012
							</td>
							<td>
									<span class="label label-sm label-default">
									Blocked </span>
							</td>
						</tr>
						<tr class="odd gradeX">
							<td>
								<input type="checkbox" class="checkboxes" value="1"/>
							</td>
							<td>
								restest
							</td>
							<td>
								<a href="mailto:userwow@gmail.com">
									test@gmail.com </a>
							</td>
							<td>
								20
							</td>
							<td class="center">
								12.12.2012
							</td>
							<td>
									<span class="label label-sm label-success">
									Approved </span>
							</td>
						</tr>
						<tr class="odd gradeX">
							<td>
								<input type="checkbox" class="checkboxes" value="1"/>
							</td>
							<td>
								foopl
							</td>
							<td>
								<a href="mailto:userwow@gmail.com">
									good@gmail.com </a>
							</td>
							<td>
								20
							</td>
							<td class="center">
								19.11.2010
							</td>
							<td>
									<span class="label label-sm label-success">
									Approved </span>
							</td>
						</tr>
						<tr class="odd gradeX">
							<td>
								<input type="checkbox" class="checkboxes" value="1"/>
							</td>
							<td>
								weep
							</td>
							<td>
								<a href="mailto:userwow@gmail.com">
									good@gmail.com </a>
							</td>
							<td>
								20
							</td>
							<td class="center">
								19.11.2010
							</td>
							<td>
									<span class="label label-sm label-success">
									Approved </span>
							</td>
						</tr>
						<tr class="odd gradeX">
							<td>
								<input type="checkbox" class="checkboxes" value="1"/>
							</td>
							<td>
								coop
							</td>
							<td>
								<a href="mailto:userwow@gmail.com">
									good@gmail.com </a>
							</td>
							<td>
								20
							</td>
							<td class="center">
								19.11.2010
							</td>
							<td>
									<span class="label label-sm label-success">
									Approved </span>
							</td>
						</tr>
						<tr class="odd gradeX">
							<td>
								<input type="checkbox" class="checkboxes" value="1"/>
							</td>
							<td>
								pppol
							</td>
							<td>
								<a href="mailto:userwow@gmail.com">
									good@gmail.com </a>
							</td>
							<td>
								20
							</td>
							<td class="center">
								19.11.2010
							</td>
							<td>
									<span class="label label-sm label-success">
									Approved </span>
							</td>
						</tr>
						<tr class="odd gradeX">
							<td>
								<input type="checkbox" class="checkboxes" value="1"/>
							</td>
							<td>
								test
							</td>
							<td>
								<a href="mailto:userwow@gmail.com">
									good@gmail.com </a>
							</td>
							<td>
								20
							</td>
							<td class="center">
								19.11.2010
							</td>
							<td>
									<span class="label label-sm label-success">
									Approved </span>
							</td>
						</tr>
						<tr class="odd gradeX">
							<td>
								<input type="checkbox" class="checkboxes" value="1"/>
							</td>
							<td>
								userwow
							</td>
							<td>
								<a href="mailto:userwow@gmail.com">
									userwow@gmail.com </a>
							</td>
							<td>
								20
							</td>
							<td class="center">
								12.12.2012
							</td>
							<td>
									<span class="label label-sm label-default">
									Blocked </span>
							</td>
						</tr>
						<tr class="odd gradeX">
							<td>
								<input type="checkbox" class="checkboxes" value="1"/>
							</td>
							<td>
								test
							</td>
							<td>
								<a href="mailto:userwow@gmail.com">
									test@gmail.com </a>
							</td>
							<td>
								20
							</td>
							<td class="center">
								12.12.2012
							</td>
							<td>
									<span class="label label-sm label-success">
									Approved </span>
							</td>
						</tr>
						<tr class="odd gradeX">
							<td>
								<input type="checkbox" class="checkboxes" value="1"/>
							</td>
							<td>
								goop
							</td>
							<td>
								<a href="mailto:userwow@gmail.com">
									good@gmail.com </a>
							</td>
							<td>
								20
							</td>
							<td class="center">
								12.11.2010
							</td>
							<td>
									<span class="label label-sm label-success">
									Approved </span>
							</td>
						</tr>
						<tr class="odd gradeX">
							<td>
								<input type="checkbox" class="checkboxes" value="1"/>
							</td>
							<td>
								weep
							</td>
							<td>
								<a href="mailto:userwow@gmail.com">
									good@gmail.com </a>
							</td>
							<td>
								20
							</td>
							<td class="center">
								15.11.2011
							</td>
							<td>
									<span class="label label-sm label-default">
									Blocked </span>
							</td>
						</tr>
						<tr class="odd gradeX">
							<td>
								<input type="checkbox" class="checkboxes" value="1"/>
							</td>
							<td>
								toopl
							</td>
							<td>
								<a href="mailto:userwow@gmail.com">
									good@gmail.com </a>
							</td>
							<td>
								20
							</td>
							<td class="center">
								16.11.2010
							</td>
							<td>
									<span class="label label-sm label-success">
									Approved </span>
							</td>
						</tr>
						<tr class="odd gradeX">
							<td>
								<input type="checkbox" class="checkboxes" value="1"/>
							</td>
							<td>
								userwow
							</td>
							<td>
								<a href="mailto:userwow@gmail.com">
									userwow@gmail.com </a>
							</td>
							<td>
								20
							</td>
							<td class="center">
								9.12.2012
							</td>
							<td>
									<span class="label label-sm label-default">
									Blocked </span>
							</td>
						</tr>
						<tr class="odd gradeX">
							<td>
								<input type="checkbox" class="checkboxes" value="1"/>
							</td>
							<td>
								tes21t
							</td>
							<td>
								<a href="mailto:userwow@gmail.com">
									test@gmail.com </a>
							</td>
							<td>
								20
							</td>
							<td class="center">
								14.12.2012
							</td>
							<td>
									<span class="label label-sm label-success">
									Approved </span>
							</td>
						</tr>
						<tr class="odd gradeX">
							<td>
								<input type="checkbox" class="checkboxes" value="1"/>
							</td>
							<td>
								fop
							</td>
							<td>
								<a href="mailto:userwow@gmail.com">
									good@gmail.com </a>
							</td>
							<td>
								20
							</td>
							<td class="center">
								13.11.2010
							</td>
							<td>
									<span class="label label-sm label-warning">
									Suspended </span>
							</td>
						</tr>
						<tr class="odd gradeX">
							<td>
								<input type="checkbox" class="checkboxes" value="1"/>
							</td>
							<td>
								kop
							</td>
							<td>
								<a href="mailto:userwow@gmail.com">
									good@gmail.com </a>
							</td>
							<td>
								20
							</td>
							<td class="center">
								17.11.2010
							</td>
							<td>
									<span class="label label-sm label-success">
									Approved </span>
							</td>
						</tr>
						<tr class="odd gradeX">
							<td>
								<input type="checkbox" class="checkboxes" value="1"/>
							</td>
							<td>
								vopl
							</td>
							<td>
								<a href="mailto:userwow@gmail.com">
									good@gmail.com </a>
							</td>
							<td>
								20
							</td>
							<td class="center">
								19.11.2010
							</td>
							<td>
									<span class="label label-sm label-success">
									Approved </span>
							</td>
						</tr>
						<tr class="odd gradeX">
							<td>
								<input type="checkbox" class="checkboxes" value="1"/>
							</td>
							<td>
								userwow
							</td>
							<td>
								<a href="mailto:userwow@gmail.com">
									userwow@gmail.com </a>
							</td>
							<td>
								20
							</td>
							<td class="center">
								12.12.2012
							</td>
							<td>
									<span class="label label-sm label-default">
									Blocked </span>
							</td>
						</tr>
						<tr class="odd gradeX">
							<td>
								<input type="checkbox" class="checkboxes" value="1"/>
							</td>
							<td>
								wap
							</td>
							<td>
								<a href="mailto:userwow@gmail.com">
									test@gmail.com </a>
							</td>
							<td>
								20
							</td>
							<td class="center">
								12.12.2012
							</td>
							<td>
									<span class="label label-sm label-success">
									Approved </span>
							</td>
						</tr>
						<tr class="odd gradeX">
							<td>
								<input type="checkbox" class="checkboxes" value="1"/>
							</td>
							<td>
								test
							</td>
							<td>
								<a href="mailto:userwow@gmail.com">
									good@gmail.com </a>
							</td>
							<td>
								20
							</td>
							<td class="center">
								19.12.2010
							</td>
							<td>
									<span class="label label-sm label-success">
									Approved </span>
							</td>
						</tr>
						<tr class="odd gradeX">
							<td>
								<input type="checkbox" class="checkboxes" value="1"/>
							</td>
							<td>
								toop
							</td>
							<td>
								<a href="mailto:userwow@gmail.com">
									good@gmail.com </a>
							</td>
							<td>
								20
							</td>
							<td class="center">
								17.12.2010
							</td>
							<td>
									<span class="label label-sm label-success">
									Approved </span>
							</td>
						</tr>
						<tr class="odd gradeX">
							<td>
								<input type="checkbox" class="checkboxes" value="1"/>
							</td>
							<td>
								weep
							</td>
							<td>
								<a href="mailto:userwow@gmail.com">
									good@gmail.com </a>
							</td>
							<td>
								20
							</td>
							<td class="center">
								15.11.2011
							</td>
							<td>
									<span class="label label-sm label-success">
									Approved </span>
							</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!-- END EXAMPLE TABLE PORTLET-->
		</div>
	</div>




	<div class="row">

	<!-- 标题栏 -->
	<div class="page-title">
		<h2>用户列表</h2>
	</div>
	<div class="cf">
		<div class="fl">
            <a class="btn" href="<?php echo U('add');?>">新 增</a>
            <button class="btn ajax-post" url="<?php echo U('changeStatus?method=resumeUser');?>" target-form="ids">启 用</button>
            <button class="btn ajax-post" url="<?php echo U('changeStatus?method=forbidUser');?>" target-form="ids">禁 用</button>
            <button class="btn ajax-post confirm" url="<?php echo U('changeStatus?method=deleteUser');?>" target-form="ids">删 除</button>
        </div>

        <!-- 高级搜索 -->
		<div class="search-form fr cf">
			<div class="sleft">
				<input type="text" name="nickname" class="search-input" value="<?php echo I('nickname');?>" placeholder="请输入用户昵称或者ID">
				<a class="sch-btn" href="javascript:;" id="search" url="<?php echo U('index');?>"><i class="btn-search"></i></a>
			</div>
		</div>
    </div>
    <!-- 数据列表 -->
    <div class="data-table table-striped">
	<table class="">
    <thead>
        <tr>
		<th class="row-selected row-selected"><input class="check-all" type="checkbox"/></th>
		<th class="">UID</th>
		<th class="">昵称</th>
		<th class="">积分</th>
		<th class="">登录次数</th>
		<th class="">最后登录时间</th>
		<th class="">最后登录IP</th>
		<th class="">状态</th>
		<th class="">操作</th>
		</tr>
    </thead>
    <tbody>
		<?php if(!empty($_list)): if(is_array($_list)): $i = 0; $__LIST__ = $_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><input class="ids" type="checkbox" name="id[]" value="<?php echo ($vo["uid"]); ?>" /></td>
			<td><?php echo ($vo["uid"]); ?> </td>
			<td><?php echo ($vo["nickname"]); ?></td>
			<td><?php echo ($vo["score"]); ?></td>
			<td><?php echo ($vo["login"]); ?></td>
			<td><span><?php echo (time_format($vo["last_login_time"])); ?></span></td>
			<td><span><?php echo long2ip($vo['last_login_ip']);?></span></td>
			<td><?php echo ($vo["status_text"]); ?></td>
			<td><?php if(($vo["status"]) == "1"): ?><a href="<?php echo U('User/changeStatus?method=forbidUser&id='.$vo['uid']);?>" class="ajax-get">禁用</a>
				<?php else: ?>
				<a href="<?php echo U('User/changeStatus?method=resumeUser&id='.$vo['uid']);?>" class="ajax-get">启用</a><?php endif; ?>
				<a href="<?php echo U('AuthManager/group?uid='.$vo['uid']);?>" class="authorize">授权</a>
                <a href="<?php echo U('User/changeStatus?method=deleteUser&id='.$vo['uid']);?>" class="confirm ajax-get">删除</a>
                </td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		<?php else: ?>
		<td colspan="9" class="text-center"> aOh! 暂时还没有内容! </td><?php endif; ?>
	</tbody>
    </table>
	</div>
    <div class="page">
        <?php echo ($_page); ?>
    </div>

	</div>



        </div>
    </div>
    <!-- END CONTENT -->

</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner">
        2014 &copy; Metronic by keenthemes.
    </div>
    <div class="page-footer-tools">
		<span class="go-top">
		<i class="fa fa-angle-up"></i>
		</span>
    </div>
</div>

<script src="/Public/static/assets/global/plugins/pace/pace.min.js" type="text/javascript"></script>

<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="/Public/static/assets/global/plugins/respond.min.js"></script>
<script src="/Public/static/assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="/Public/static/assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="/Public/static/assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="/Public/static/assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="/Public/static/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/Public/static/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="/Public/static/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/Public/static/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/Public/static/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="/Public/static/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="/Public/static/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/Public/static/assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="/Public/static/assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="/Public/static/assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
<script src="/Public/static/assets/global/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="/Public/static/assets/global/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="/Public/static/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src="/Public/static/assets/global/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="/Public/static/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
<script src="/Public/static/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="/Public/static/assets/global/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/Public/static/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="/Public/static/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="/Public/static/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="/Public/static/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="/Public/static/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="/Public/static/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="/Public/static/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="/Public/static/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/Public/static/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="/Public/static/assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="/Public/static/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="/Public/static/assets/admin/pages/scripts/index.js" type="text/javascript"></script>
<script src="/Public/static/assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<script src="/Public/static/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>

<!-- END PAGE LEVEL SCRIPTS -->

<!--Table-->

<script type="text/javascript" src="/Public/static/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/Public/static/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>

<!--Table END-->


<!--Plug-->

<script type="text/javascript" src="/Public/static/plugins/Validform_v5.3.2_ncr_min.js"></script>
<script type="text/javascript" src="/Public/static/plugins/layer/layer.min.js"></script>


<!--Plug END-->

<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core componets
        Layout.init(); // init layout
        Demo.init(); // init demo features

    });
</script>

	<script src="/Public/static/thinkbox/jquery.thinkbox.js"></script>

	<script type="text/javascript">
	//搜索功能
	$("#search").click(function(){
		var url = $(this).attr('url');
        var query  = $('.search-form').find('input').serialize();
        query = query.replace(/(&|^)(\w*?\d*?\-*?_*?)*?=?((?=&)|(?=$))/g,'');
        query = query.replace(/^&/g,'');
        if( url.indexOf('?')>0 ){
            url += '&' + query;
        }else{
            url += '?' + query;
        }
		window.location.href = url;
	});
	//回车搜索
	$(".search-input").keyup(function(e){
		if(e.keyCode === 13){
			$("#search").click();
			return false;
		}
	});
    //导航高亮
	jQuery(document).ready(function() {

		var table = $('#sample_1');
		// begin first table
		table.dataTable({
			"columns": [{
				"orderable": false
			}, {
				"orderable": true
			}, {
				"orderable": false
			}, {
				"orderable": false
			}, {
				"orderable": true
			}, {
				"orderable": false
			}],
			"lengthMenu": [
				[5, 15, 20, -1],
				[5, 15, 20, "All"] // change per page values here
			],
			// set the initial value
			"pageLength": 5,
			"pagingType": "bootstrap_full_number",
			"language": {
				"lengthMenu": "  _MENU_ records",
				"paginate": {
					"previous":"Prev",
					"next": "Next",
					"last": "Last",
					"first": "First"
				}
			},
			"columnDefs": [{  // set default column settings
				'orderable': false,
				'targets': [0]
			}, {
				"searchable": false,
				"targets": [0]
			}],
			"order": [
				[1, "asc"]
			] // set first column as a default sort by asc
		});

		var tableWrapper = jQuery('#sample_1_wrapper');

		table.find('.group-checkable').change(function () {
			var set = jQuery(this).attr("data-set");
			var checked = jQuery(this).is(":checked");
			jQuery(set).each(function () {
				if (checked) {
					$(this).attr("checked", true);
					$(this).parents('tr').addClass("active");
				} else {
					$(this).attr("checked", false);
					$(this).parents('tr').removeClass("active");
				}
			});
			jQuery.uniform.update(set);
		});

		table.on('change', 'tbody tr .checkboxes', function () {
			$(this).parents('tr').toggleClass("active");
		});

		tableWrapper.find('.dataTables_length select').addClass("form-control input-xsmall input-inline");
	});
	</script>


</body>

<!-- END BODY -->
</html>