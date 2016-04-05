<?php if (!defined('THINK_PATH')) exit();?>[
{
<?php if(is_array($tree)): $i = 0; $__LIST__ = $tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>"id": "<?php echo ($list["id"]); ?>",
    "text": "<?php echo ($list["title"]); ?>",
    "data": {
        'text':'<?php echo ($list["title"]); ?>',
        'name': '<?php echo ($list["name"]); ?>',
        'addTitle':'添加',
        'addUrl': '<?php echo U('add?pid='.$list['id']);?>',
        'ediTitle': '编辑',
        'editUrl':'<?php echo U('edit?id='.$list['id'].'&pid='.$list['pid']);?>',
        'statusTitle': '<?php echo (show_status_op($list["status"])); ?>',
        'statusUrl':'<?php echo U('setStatus?ids='.$list['id'].'&status='.abs(1-$list['status']));?>',
        'statusClass': 'ajax-get',
        'removeTitle':'删除',
        'removeUrl': '<?php echo U('remove?id='.$list['id']);?>',
        'removeClass': 'confirm ajax-get',
        'moveTitle': '移动','moveUrl':'<?php echo U('operate?type=move&from='.$list['id']);?>',
        'mergeTitle': '合并',
        'mergeUrl':'<?php echo U('operate?type=merge&from='.$list['id']);?>'
    },

    <?php if(!empty($list['_'])): ?>"children":<?php echo R('Category/tree', array('tree'=>$list['_'])); endif; endforeach; endif; else: echo "" ;endif; ?>
}
]