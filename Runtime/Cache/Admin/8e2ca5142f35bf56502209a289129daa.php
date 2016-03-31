<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="使用 thinkPHP 和 bootstrap 管理系统">
<meta name="author" content="">
<title><?php echo ($meta_title); ?>|<?php echo C('WEB_SITE_TITLE');?></title>
<link rel="shortcut icon" href="/Public/favicon.ico">

<!-- Bootstrap core CSS -->
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/sb/bootstrap.min.css" />
<!-- Font Awesome CSS -->
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/font-awesome/css/font-awesome.min.css" />

<!-- 表格 css-->
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/sb/dataTables.bootstrap.css" />
<!-- 弹出提示框，ajax用 css -->
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/sb/messenger.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/sb/messenger-theme-style.css" />

<!-- SB Admin CSS - Include with every page -->
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/sb/sb-admin.css" />   

<!-- Custom styles for this template -->
<!-- 用于加载 css 代码 --> 
<!-- 页面header钩子，一般用于加载插件CSS文件和代码 -->
<?php echo hook('pageHeader');?>
</head>
<body>
<div id="wrapper">
  <!-- 导航条 ================================================== --> 
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo U('Index/index');?>">&nbsp;&nbsp;ThinkPHP 3.2.1</a>
    </div><!-- /.navbar-header -->

    <ul class="nav navbar-nav navbar-top-links">
        <li class="disabled"><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
        <li class="disabled"><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
    <?php if(is_array($__MENU__["main"])): $i = 0; $__LIST__ = $__MENU__["main"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li class="<?php echo ((isset($menu["class"]) && ($menu["class"] !== ""))?($menu["class"]):''); ?>"><a href="<?php echo (U($menu["url"])); ?>"><?php echo ($menu["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>	
    </ul>

    <ul class="nav navbar-top-links navbar-right">
        <!-- 用户栏 -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i><?php echo get_username();?>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="<?php echo U('User/updateNickname');?>"><i class="fa fa-user fa-fw"></i> 修改昵称</a>
                </li>
                <li><a href="<?php echo U('User/updatePassword');?>"><i class="fa fa-gear fa-fw"></i> 修改密码</a>
                </li>
                <li class="divider"></li>
                <li><a href="<?php echo U('Public/logout');?>"><i class="fa fa-sign-out fa-fw"></i> 退出</a>
                </li>
            </ul><!-- /.dropdown-user -->
        </li><!-- /.dropdown -->
    </ul><!-- /.navbar-top-links -->
</nav><!-- /.navbar-static-top -->
<!--  /导航条结束点   ================================================== -->  
  	
<nav class="navbar-default navbar-static-side" role="navigation">
<div class="sidebar-collapse">
  <ul class="nav" id="side-menu">
    
    <li id="subnav" class="active" > 
    <a href="#"><h3><i class="fa fa-home"></i>个人中心</h3><span class="fa arrow"></span></a> 
 	<ul class="nav nav-second-level <?php if(!in_array((ACTION_NAME), explode(',',"mydocument,draftbox,examine"))): ?>subnav-off<?php endif; ?>">
 		<li <?php if((ACTION_NAME) == "mydocument"): ?>class="mydocument"<?php endif; ?>>
            <a class="item" href="<?php echo U('article/mydocument');?>"><i class="fa fa-files-o fa-fw"></i>我的文档</a>
        </li>
 		<?php if(($show_draftbox) == "1"): ?><li <?php if((ACTION_NAME) == "draftbox"): ?>class="draftbox"<?php endif; ?>>
            <a class="item" href="<?php echo U('article/draftbox');?>"><i class="fa fa-picture-o"></i>草稿箱</a>
        </li><?php endif; ?>
		<li <?php if((ACTION_NAME) == "examine"): ?>class="examine"<?php endif; ?>>
            <a class="item" href="<?php echo U('article/examine');?>"><i class="fa fa-chain-broken"></i>待审核</a>
        </li>
 	</ul>
    <?php if(is_array($nodes)): $i = 0; $__LIST__ = $nodes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub_menu): $mod = ($i % 2 );++$i;?><!-- 子导航 -->
        <?php if(!empty($sub_menu)): ?><a href="#"><h3>
            	<i class="icon <?php if(($sub_menu['current']) != "1"): ?>icon-fold<?php endif; ?>"></i>
            	<?php if(($sub_menu['allow_publish']) > "0"): ?><a class="item" href="<?php echo (U($sub_menu["url"])); ?>"><?php echo ($sub_menu["title"]); ?></a><?php else: ?><i class="fa fa-folder-open-o"></i><?php echo ($sub_menu["title"]); endif; ?>
            </h3><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level <?php if(($sub_menu["current"]) != "1"): ?>subnav-off<?php endif; ?>">
                <?php if(is_array($sub_menu['_child'])): $i = 0; $__LIST__ = $sub_menu['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li <?php if($menu['id'] == $cate_id or $menu['current'] == 1): ?>class="current"<?php endif; ?>>
                        <?php if(($menu['allow_publish']) > "0"): ?><a class="item" href="<?php echo (U($menu["url"])); ?>">&nbsp;&nbsp;<i class="fa fa-list-alt"></i><?php echo ($menu["title"]); ?><span class="fa arrow"></span></a>
                        <?php else: ?>
                          <a class="item" href="javascript:void(0);">&nbsp;&nbsp;<i class="fa fa-table fa-fw"></i><?php echo ($menu["title"]); ?></a><?php endif; ?>

                        <!-- 一级子菜单 -->
                        <?php if(isset($menu['_child'])): ?><ul class="nav nav-third-level">
                        	<?php if(is_array($menu['_child'])): foreach($menu['_child'] as $key=>$three_menu): ?><li>
                                <?php if(($three_menu['allow_publish']) > "0"): ?><a class="item" href="<?php echo (U($three_menu["url"])); ?>">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($three_menu["title"]); ?></a><?php else: ?><a class="item" href="javascript:void(0);"><?php echo ($three_menu["title"]); ?></a><?php endif; ?>
                                <!-- 二级子菜单 -->
                                <?php if(isset($three_menu['_child'])): ?><ul class="subitem">
                                	<?php if(is_array($three_menu['_child'])): foreach($three_menu['_child'] as $key=>$four_menu): ?><li>
                                        <?php if(($four_menu['allow_publish']) > "0"): ?><a class="item" href="<?php echo U('index','cate_id='.$four_menu['id']);?>"><?php echo ($four_menu["title"]); ?></a><?php else: ?><a class="item" href="javascript:void(0);"><?php echo ($four_menu["title"]); ?></a><?php endif; ?>
                                        <!-- 三级子菜单 -->
                                        <?php if(isset($four_menu['_child'])): ?><ul class="subitem">
                                        	<?php if(is_array($four_menu['_child'])): $i = 0; $__LIST__ = $four_menu['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$five_menu): $mod = ($i % 2 );++$i;?><li>
                                            	<?php if(($five_menu['allow_publish']) > "0"): ?><a class="item" href="<?php echo U('index','cate_id='.$five_menu['id']);?>"><?php echo ($five_menu["title"]); ?></a><?php else: ?><a class="item" href="javascript:void(0);"><?php echo ($five_menu["title"]); ?></a><?php endif; ?>
                                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </ul><?php endif; ?>
                                        <!-- end 三级子菜单 -->
                                    </li><?php endforeach; endif; ?>
                                </ul><?php endif; ?>
                                <!-- end 二级子菜单 -->
                            </li><?php endforeach; endif; ?>
                        </ul><?php endif; ?>
                        <!-- end 一级子菜单 -->
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul><?php endif; ?>
        <!-- /子导航 --><?php endforeach; endif; else: echo "" ;endif; ?>
    <?php if(!empty($_extra_menu)): ?>
        <?php echo extra_menu($_extra_menu,$__MENU__); endif; ?>
    <?php if(is_array($__MENU__["child"])): $i = 0; $__LIST__ = $__MENU__["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub_menu): $mod = ($i % 2 );++$i; if(!empty($sub_menu)): if(!empty($key)): ?><a href="#"><h3><i class="fa fa-suitcase"></i><?php echo ($key); ?></h3><span class="fa arrow"></span></a><?php endif; ?>
    <ul class="nav nav-second-level">
        <?php if(is_array($sub_menu)): $i = 0; $__LIST__ = $sub_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li>											
            <a href="<?php echo (U($menu["url"])); ?>"><i class="fa fa-bitbucket"></i>&nbsp;&nbsp;<?php echo ($menu["title"]); ?></a>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul><?php endif; endforeach; endif; else: echo "" ;endif; ?> 
    <!-- 回收站 -->
    <ul class="nav ">
        <li>											
            <a href="<?php echo U('article/recycle');?>"><h3><i class="fa fa-bitbucket"></i>回收站</h3></a>
        </li>
    </ul>
</li>  

 


  </ul> 
</div>
</nav>

  <div id="page-wrapper"> 
  <div class="row"> 
    <div id="main" class="col-lg-12 main">
      
      <?php if(!empty($_show_nav)): ?><!-- nav -->
      <div class="breadcrumb">
        <span>您的位置:</span>
        <?php $i = '1'; ?>
        <?php if(is_array($_nav)): foreach($_nav as $k=>$v): if($i == count($_nav)): ?><span><?php echo ($v); ?></span>
            <?php else: ?>
            <span><a href="<?php echo ($k); ?>"><?php echo ($v); ?></a>&gt;</span><?php endif; ?>
            <?php $i = $i+1; endforeach; endif; ?>
      </div><!-- /nav --><?php endif; ?>
             
      
	<!-- 标题 -->
	<div class="main-title">
		<h2>
		文档列表(<?php echo ($_total); ?>) [
		<?php if(is_array($rightNav)): $i = 0; $__LIST__ = $rightNav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?><a href="<?php echo U('article/index','cate_id='.$nav['id']);?>"><?php echo ($nav["title"]); ?></a>
			<?php if(count($rightNav) > $i): ?><i class="ca"></i><?php endif; endforeach; endif; else: echo "" ;endif; ?>
		<?php if(isset($article)): ?>：<a href="<?php echo U('article/index','cate_id='.$cate_id.'&pid='.$article['id']);?>"><?php echo ($article["title"]); ?></a><?php endif; ?>
		]
		<?php if(($allow) == "0"): ?>（该分类不允许发布内容）<?php endif; ?>
		</h2>
	</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <!-- 按钮工具栏 -->    
		<div class="fl">
			<div class="btn-group">
				<?php if(($allow) > "0"): ?><button class="btn btn-default document_add" <?php if(count($model) == 1): ?>url="<?php echo U('article/add',array('cate_id'=>$cate_id,'pid'=>I('pid',0),'model_id'=>$model[0]));?>"<?php endif; ?>>新 增
						<?php if(count($model) > 1): ?><i class="btn-arrowdown"></i><?php endif; ?>
					</button>
					<?php if(count($model) > 1): ?><ul class="dropdown nav-list">
						<?php if(is_array($model)): $i = 0; $__LIST__ = $model;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('article/add',array('cate_id'=>$cate_id,'model_id'=>$vo,'pid'=>I('pid',0)));?>"><?php echo (get_document_model($vo,'title')); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul><?php endif; ?>
				<?php else: ?>
					<button class="btn btn-default disabled" >新 增
						<?php if(count($model) > 1): ?><i class="btn-arrowdown"></i><?php endif; ?>
					</button><?php endif; ?>
			</div>
            <button class="btn btn-default ajax-post" target-form="ids" url="<?php echo U("Article/setStatus",array("status"=>1));?>">启 用</button>
			<button class="btn btn-default ajax-post" target-form="ids" url="<?php echo U("Article/setStatus",array("status"=>0));?>">禁 用</button>
			<button class="btn btn-default ajax-post" target-form="ids" url="<?php echo U("Article/move");?>">移 动</button>
			<button class="btn btn-default ajax-post" target-form="ids" url="<?php echo U("Article/copy");?>">复 制</button>
			<button class="btn btn-default ajax-post" target-form="ids" hide-data="true" url="<?php echo U("Article/paste");?>">粘 贴</button>
			<input type="hidden" class="hide-data" name="cate_id" value="<?php echo ($cate_id); ?>"/>
			<input type="hidden" class="hide-data" name="pid" value="<?php echo ($pid); ?>"/>
			<button class="btn btn-default ajax-post confirm" target-form="ids" url="<?php echo U("Article/setStatus",array("status"=>-1));?>">删 除</button>
			<!-- <button class="btn btn-default document_add" url="<?php echo U('article/batchOperate',array('cate_id'=>$cate_id,'pid'=>I('pid',0)));?>">导入</button> -->
			<button class="btn btn-default list_sort" url="<?php echo U('sort',array('cate_id'=>$cate_id,'pid'=>I('pid',0)),'');?>">排序</button>
		</div>

		<!-- 高级搜索 -->
		<div class="search-form fr cf">
 
		</div>
	</div>

	<!-- 数据表格 -->
	<div class="panel-body">
		<div class="table-responsive">		
			<table class="table table-striped table-bordered table-hover" id="dataTables-draftbox"><!-- 必须设定表格的id == -->
				<thead>
					<tr>
                    <th class="row-selected row-selected">
                        <input class="check-all" type="checkbox">
                    </th>
                    <?php if(is_array($list_grids)): $i = 0; $__LIST__ = $list_grids;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$field): $mod = ($i % 2 );++$i;?><th><?php echo ($field["title"]); ?></th><?php endforeach; endif; else: echo "" ;endif; ?>
                </tr>
            </thead>

            <!-- 列表 -->
            <tbody>
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                        <td><input class="ids" type="checkbox" value="<?php echo ($data['id']); ?>" name="ids[]"></td>
                        <?php if(is_array($list_grids)): $i = 0; $__LIST__ = $list_grids;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$grid): $mod = ($i % 2 );++$i;?><td><?php echo get_list_field($data,$grid,$model_list);?></td><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
			</table>
		</div><!-- /.table-responsive --> 
	</div><!-- /.panel-body -->
</div><!-- /.panel --> 						
 
    </div>  
  </div>
</div>		  
    <!--  页脚，版权信息   ================================================== -->     
  <footer class="bs-footer" role="contentinfo">
	<div class="container">	  
		<p> 本站由 <strong><a href="http://www.thinkphp.cn" target="_blank">Think 3.2.1</a></strong> 强力驱动</p>
	</div>
  </footer>
  <!--  /页脚，版权信息   ================================================== -->  

  <div class="hidden"><!-- 用于加载统计代码等隐藏元素 -->
	
  </div>
</div>    
  
<!-- Core Scripts - Include with every page -->
<script type="text/javascript" src="/Public/static/jquery-1.10.2.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/js/sb/bootstrap.min.js"></script> 
<!-- Page-Level Plugin Scripts - 侧边栏 -->
<script type="text/javascript" src="/Public/Admin/js/sb/plugins/metisMenu/jquery.metisMenu.js"></script> 
<!-- 弹出提示框，ajax用 js -->
<script type="text/javascript" src="/Public/Admin/js/sb/plugins/messenger/messenger.js"></script> 
<script type="text/javascript" src="/Public/Admin/js/sb/plugins/messenger/messenger-theme-future.js"></script> 
<!-- Page-Level Plugin Scripts - Tables 表格-->
<script type="text/javascript" src="/Public/Admin/js/sb/plugins/dataTables/jquery.dataTables.js"></script> 
<script type="text/javascript" src="/Public/Admin/js/sb/plugins/dataTables/dataTables.bootstrap.js"></script> 

<!-- SB Admin Scripts - Include with every page -->
<script type="text/javascript" src="/Public/Admin/js/sb/sb-admin.js"></script>

<!-- Page-Level Demo Scripts - Blank - Use for reference -->

<!--  think JS   ================================================== --> 
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
<script type="text/javascript" src="/Public/Admin/js/sb/think.js"></script>
<script type="text/javascript" src="/Public/Admin/js/sb/think_ajax.js"></script>
<!--include file="Public/navjs"/-->


<script type="text/javascript">
//启用表格功能  id 是  
$(document).ready(function() {
	$('#dataTables-draftbox').dataTable();
});
</script> 
<script type="text/javascript">
$(function(){
	//搜索功能
	$("#search").click(function(){
		var url = $(this).attr('url');
		var status = $("#sch-sort-txt").attr("data");
        var query  = $('.search-form').find('input').serialize();
        query = query.replace(/(&|^)(\w*?\d*?\-*?_*?)*?=?((?=&)|(?=$))/g,'');
        query = query.replace(/^&/g,'');
		if(status != ''){
			query += 'status=' + status + "&" + query;
        }
        if( url.indexOf('?')>0 ){
            url += '&' + query;
        }else{
            url += '?' + query;
        }
		window.location.href = url;
	});

	/* 状态搜索子菜单 */
	$(".search-form").find(".drop-down").hover(function(){
		$("#sub-sch-menu").removeClass("hidden");
	},function(){
		$("#sub-sch-menu").addClass("hidden");
	});
	$("#sub-sch-menu li").find("a").each(function(){
		$(this).click(function(){
			var text = $(this).text();
			$("#sch-sort-txt").text(text).attr("data",$(this).attr("value"));
			$("#sub-sch-menu").addClass("hidden");
		})
	});

	//只有一个模型时，点击新增
	$('.document_add').click(function(){
		var url = $(this).attr('url');
		if(url != undefined && url != ''){
			window.location.href = url;
		}
	});

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

    //回车自动提交
    $('.search-form').find('input').keyup(function(event){
        if(event.keyCode===13){
            $("#search").click();
        }
    });

    $('#time-start').datetimepicker({
        format: 'yyyy-mm-dd',
        language:"zh-CN",
	    minView:2,
	    autoclose:true
    });

    $('#time-end').datetimepicker({
        format: 'yyyy-mm-dd',
        language:"zh-CN",
	    minView:2,
	    autoclose:true
    });
})
</script>
 
<!-- 页面footer钩子，一般用于加载插件JS文件和JS代码 -->
<?php echo hook('pageFooter', 'widget');?>
</body>
</html>