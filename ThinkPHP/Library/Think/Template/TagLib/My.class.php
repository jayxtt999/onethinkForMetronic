<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2013 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi.cn@gmail.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------
namespace Think\Template\TagLib;
use Think\Template\TagLib;
/**
 * title：数据库管理模型标签库
 * author:xietaotao
 * date:2016年3月25日
 */
class My extends TagLib{
	/**
	 * 定义标签列表
	 * @var array
	 */
	protected $tags   =  array(
        /**
         * tag 为需要获取数据的源，这个加载在配置文件
         * id 为加载标签的id
         * class 为加载标签的class
         * name 为加载标签的name
         * isselect2 为是否启用select2插件
         * s2class 为加载select2插件的标签的class
         * selected 为加载select默认值 假如有的话
         */
        'select2'  =>  array('attr'=>'tag,id,class,s2class,name,isselect2,selected'),
        'checkbox2' => array('attr'=>'tag,class,id,name,val'),

    );

    private $_isSelect2 = false;

    /**
     * select2
     * @param $tag
     * @param $content
     * @return string
     */
    public function _select2($tag, $content){

        $select = "";
        $isSelect2 = $tag['isselect2']?1:0;
        $selected =    isset($tag['selected'])?$tag['selected']:'';
        if($isSelect2 && !$this->_isSelect2){
            $this->_isSelect2 = true;
            //引用select2 插件
            $s2class = $tag['s2class']?$tag['s2class']:"s2class";
            $select.="<link rel='stylesheet' type='text/css' href='__STATIC__/assets/global/plugins/select2/select2.css' media='all'>";
            $select.="<script type='text/javascript' src='__STATIC__/assets/global/plugins/select2/select2.min.js'></script>";
            $select.="
            <script type='text/javascript'>
                $(function(){
                    $('.".$s2class."').select2();
                })
            </script>";
        }
        //自动加载配置
        $list = C(strtolower($tag['tag']));
        $select .= "<select class='".$tag['class']." ".$s2class."'  name='".$tag['name']."' id='".$tag['id']."'>";
        foreach($list as $v){
            if($v['label']===NULL){
                foreach($v['value'] as $v2){
                    $select.='<?php
                    if("'.strtolower($v2).'"!==strtolower('.$selected.')){
                         echo "<option value=\''.$v2.'\'>'.$v2.'</option>";
                    }else{
                         echo "<option value=\''.$v2.'\' selected=\'selected\'>'.$v2.'</option>";
                    }
                    ?>';
                }
            }else{
                $select.="<optgroup label='".$v['label']."'>";
                foreach($v['value'] as $v2){
                    $select.='<?php
                    if("'.strtolower($v2).'"!==strtolower('.$selected.')){
                         echo "<option value=\''.$v2.'\'>'.$v2.'</option>";
                    }else{
                         echo "<option value=\''.$v2.'\' selected=\'selected\'>'.$v2.'</option>";
                    }
                    ?>';
                }
                $select.="</optgroup>";
            }
        }
        $select.="</select>";
        return $select;
    }

    /**
     * checkbox2
     * @param $tag
     * @param $content
     * @return string
     */
    public function _checkbox2($tag,$content){

        $tpl = "<input type='checkbox' id=".$tag['id']." name=".$tag['name']." class='".$tag['class']."'";
        $tags = strtolower($tag['tag']);
        $val = $tag['val'];
        if($tags == "isnull"){
            $tpl.="<?php
              if(strtolower(".($val).")=='yes'){
               echo 'checked';
               }
            ?>";
        }else if($tags=="isindex"){
            $tpl.="<?php
              if(strtolower(".($val).")=='pri'){
               echo 'checked';
               }
            ?>";
        }else if($tags=="isautoadd"){

            $tpl.="<?php
              if(strtolower(".($val).")=='auto_increment'){
               echo 'checked';
               }
            ?>";
        }else{
            //...
        }
        $tpl.=">";
        return $tpl;
    }

}