//dom加载完成后执行的js
;$(function(){


    $("#add-group").click(function(){
        window.location.href = $(this).attr('url');
    })

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




    //ajax get请求
    $('.ajax-get').click(function(){
        var target;
        var that = this;
        if ( $(this).hasClass('confirm') ) {
            if(!confirm('确认要执行该操作吗?')){
                return false;
            }
        }
        if ( (target = $(this).attr('href')) || (target = $(this).attr('url')) ) {
            $.get(target).success(function(data){
                if (data.status==1) {
                    if (data.url) {
                        updateAlert(data.info + ' 页面即将自动跳转~','alert-success');
                    }else{
                        updateAlert(data.info,'alert-success');
                    };                    
                    setTimeout(function(){
                        if (data.url) {
                            location.href=data.url;
                        }else if( !$(that).hasClass('no-refresh')){
                            location.reload();
                        }
                    },1500);                    
                }else{
                    updateAlert(data.info);                    
                    setTimeout(function(){
                        if (data.url) {
                            location.href=data.url;
                        }
                    },1500);                    
                }
            });
        }
        return false;
    });

    //ajax post submit请求
    $('.ajax-post').click(function(){
        var target,query,form;
        var target_form = $(this).attr('target-form');
        var that = this;
        var nead_confirm=false;
        if( ($(this).attr('type')=='submit') || (target = $(this).attr('href')) || (target = $(this).attr('url')) ){
            form = $('.'+target_form);

            if ($(this).attr('hide-data') === 'true'){  //无数据时也可以使用的功能
            	form = $('.hide-data');
            	query = form.serialize();
            }else if (form.get(0)==undefined){
            	return false;
            }else if ( form.get(0).nodeName=='FORM' ){
                if ( $(this).hasClass('confirm') ) {
                    if(!confirm('确认要执行该操作吗?')){
                        return false;
                    }
                }
                if($(this).attr('url') !== undefined){
                	target = $(this).attr('url');
                }else{
                	target = form.get(0).action;
                }
                query = form.serialize();
            }else if( form.get(0).nodeName=='INPUT' || form.get(0).nodeName=='SELECT' || form.get(0).nodeName=='TEXTAREA') {
                form.each(function(k,v){
                    if(v.type=='checkbox' && v.checked==true){
                        nead_confirm = true;
                    }
                })
                if ( nead_confirm && $(this).hasClass('confirm') ) {
                    if(!confirm('确认要执行该操作吗?')){
                        return false;
                    }
                }
                query = form.serialize();
            }else{
                if ( $(this).hasClass('confirm') ) {
                    if(!confirm('确认要执行该操作吗?')){
                        return false;
                    }
                }
                query = form.find('input,select,textarea').serialize();
            }
            $(that).addClass('disabled').attr('autocomplete','off').prop('disabled',true);
            $.post(target,query).success(function(data){
                if (data.status==1) {
                    if (data.url) {
                        updateAlert(data.info + ' 页面即将自动跳转~','alert-success');
                    }else{
                        updateAlert(data.info ,'alert-success');
                    };                    
                    setTimeout(function(){
                        if (data.url) {
                            location.href=data.url;
                        }else if( $(that).hasClass('no-refresh')){
                            $(that).removeClass('disabled').prop('disabled',false);
                        }else{
                            location.reload();
                        }
                    },1500);                    
                }else{
                    updateAlert(data.info);                    
                    setTimeout(function(){
                        if (data.url) {
                            location.href=data.url;
                        }else{
                            $(that).removeClass('disabled').prop('disabled',false);
                        }
                    },1500);
                    
                }
            });
        }
        return false;
    });
 
    //弹出框的配置 顶部 ，主题 block
    window.updateAlert =function(text,c){
        text = text||'default';
		c = c||false;
		if ( c!=false ) {
            layer.alert(text, {icon: 1,  skin: 'layer-ext-moon'})
        } else {
            layer.alert(text, {icon: 2,  skin: 'layer-ext-moon'})
        }
        
    };     	
 
});
