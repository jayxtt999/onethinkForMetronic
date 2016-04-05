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

<!-- 用于加载 css 代码 -->
<!-- 页面header钩子，一般用于加载插件CSS文件和代码 -->
<?php echo hook('pageHeader');?>

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
            </h3>-->
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
            </div>


            
	<div class="main-title">
		<h2>配置内容 [ <?php if(isset($_GET['group'])): ?><a href="<?php echo U('index');?>">全部</a><?php else: ?><strong>全部</strong><?php endif; ?>&nbsp;<?php if(is_array($group)): foreach($group as $key=>$vo): if(($group_id) != $key): ?><a href="<?php echo U('index?group='.$key);?>"><?php echo ($vo); ?></a><?php else: ?><strong><?php echo ($vo); ?></strong><?php endif; ?>&nbsp;<?php endforeach; endif; ?> ]</h2>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="fl">
				<button  class="btn green " url="<?php echo U('add');?>" id="add-config">新 增</button>
				<button  class="btn green" url=" href='javascript:;'">删 除</button>
				<button  class="btn green list_sort" url="<?php echo U('sort?group='.I('group'),'','');?>">排序</button>

			</div>
		</div><!-- /.panel-heading -->
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover" id="dataTables-config"><!-- 必须设定表格的id == -->
					<thead>
					<tr>
						<th class="row-selected">
							<input class="checkbox check-all" type="checkbox">
						</th>
						<th>ID</th>
						<th>名称</th>
						<th>标题</th>
						<th>分组</th>
						<th>类型</th>
						<th>操作</th>
					</tr>
					</thead>
					<tbody>
					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$config): $mod = ($i % 2 );++$i;?><tr>
							<td><input class="ids row-selected" type="checkbox" name="id[]" value="<?php echo ($config["id"]); ?>"></td>
							<td><?php echo ($config["id"]); ?></td>
							<td><a href="<?php echo U('edit?id='.$config['id']);?>"><?php echo ($config["name"]); ?></a></td>
							<td><?php echo ($config["title"]); ?></td>
							<td><?php echo (get_config_group($config["group"])); ?></td>
							<td><?php echo (get_config_type($config["type"])); ?></td>
							<td>
								<a title="编辑" href="<?php echo U('edit?id='.$config['id']);?>">编辑</a>
								<a class="confirm ajax-get" title="删除" href="<?php echo U('del?id='.$config['id']);?>">删除</a>
							</td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody>

				</table>
				<div class="page">
					<?php echo ($_page); ?>
				</div>
			</div><!-- /.table-responsive -->
		</div><!-- /.panel-body -->
	</div><!-- /.panel -->



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

<script src="/Public/static/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/Public/static/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="/Public/static/assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="/Public/static/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="/Public/static/assets/admin/pages/scripts/index.js" type="text/javascript"></script>
<script src="/Public/static/assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<script src="/Public/static/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>

<!-- END PAGE LEVEL SCRIPTS -->

<!--Table-->
<script type="text/javascript">
(function(){
	var ThinkPHP = window.Think = {
		"ROOT"   : "", //当前网站地址
		"APP"    : "/admin.php?s=", //当前项目地址
		"PUBLIC" : "/Public", //项目公共目录地址
		"DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
		"MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
		"VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
	}
})();
</script>
<script type="text/javascript" src="/Public/static/think.js"></script>
<script type="text/javascript" src="/Public/static/think_ajax.js"></script>

<script type="text/javascript" src="/Public/static/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/Public/static/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>

<!--Table END-->

<!--Plug-->
<script type="text/javascript" src="/Public/static/Validform_v5.3.2_ncr_min.js"></script>
<script type="text/javascript" src="/Public/static/layer/layer.js"></script>

<!--Plug END-->

<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core componets
        Layout.init(); // init layout
        Demo.init(); // init demo features

    });
</script>



	<script type="text/javascript">






	</script>

	<script type="text/javascript">
		//新增
		$(function(){
			$("#add-config").click(function(){
				window.location.href = $(this).attr('url');
			})

			//点击排序
			$('.list_sort').click(function(){
				var url = $(this).attr('url');
				var ids = $('.ids:checked');
				var param = '';
				if(ids.length > 0){
					var str = new Array();
					ids.each(function(){
						str.push($(this).val());
					});
					param = str.join(',');
				}

				if(url != undefined && url != ''){
					window.location.href = url + '/ids/' + param;
				}
			});

		})
	</script>




</body>

<!-- END BODY -->
</html>