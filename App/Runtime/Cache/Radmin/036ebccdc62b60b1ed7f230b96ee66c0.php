<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <style>
        /*小屏幕样式*/
        @media screen and (max-width: 768px) {
            input.pull-right {
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>
<section class="layui-container">
	<div class="content">
		<header class="header">
			<h3>网站分类</h3>
			<div class="pull-right">
        <input type="button" class="layui-btn" data-modal="__URL__/category_add" value="添加" data-title="添加分类"/>
      </div>
		</header>


		<div class="table-wrapper">
			<table class="layui-table" lay-skin="row" lay-size="sm">
				<thead>
				<tr>
					<th>序号</th>
					<th>名称</th>
					<th>优先级</th>
					<th>状态(点击可以改变状态)</th>
					<th>时间</th>
					<th>操作</th>
				</tr>
				</thead>
				<tbody>
				<?php if(empty($list)): ?><tr style="position: relative;">
						<td style="position: absolute;width: 97%;border-top: solid 1px #e6e6e6;">对不起,没有找到数据!</td>
					</tr>
					<?php else: endif; ?>
				</tbody>
			</table>

		</div>

	</div>

</section>
<script>
    var orderNavURL = '__GROUP__/Photo/templet_category';
    var orderNavSonURL = '__GROUP__/Photo/get_son_templet_category';
    var setStatus = '__GROUP__/Photo/set_status';
    var str;

$(function(){
  //渲染第一级分类
    $.post(orderNavURL, function(data) {
        if(data.code == 1) {
            var html = '';
            if(data.info.one!=null){
                $.each(data.info.one, function(k, v) {
                  if(v.status == 1) {
                      str = '<input type="button" class="toggle-btn btn btn-info" value="显示" />'
                  } else {
                      str = '<input type="button" class="toggle-btn btn btn-warning" value="隐藏" />'
                  }
                  var d = new Date(parseInt(v.add_time * 1000));
                  html += '<tr data-id=' + v.id + ' data-level=1 >';
                  html +=  '<td align="center">' + v.id + '</td>';
                  html +=  '<td align="left"><span class="glyphicon glyphicon-plus" data-key="'+v.id+'" style="margin:0 5px;padding:6px 10px;cursor: pointer; background: #337ab7;border-radius: 5px;color: #fff">';
                  html +=  '</span>'+v.name +"/"+ v.name_en+'<input type="button" class="btn btn-info add pull-right" value="添加子分类"  data-title="添加分类" data-modal="__URL__/category_add?p_id='+v.id+'&c_id=0" /></td>';
                  html +=  '<td>' + v.sequence + '</td>';
                  html +=  '<td data-status=' + v.status + '>' + str + '</td>';
                  html +=  '<td>' + d.Format("yyyy-MM-dd hh:mm:ss") + '</td>';
                  html +=  '<td><input type="button" class="btn btn-success" data-modal="__URL__/category_edit?id='+v.id+'" value="编辑" style="margin-right: 10px;"/>';
                  html +=  '</td></tr>';
              })
            }
            
        }
        $('table tbody').prepend(html);
    })

    $(document).off('click', '.glyphicon').on('click', '.glyphicon', function() {
        var oTr = $(this).parent().parent();
        var oSpan = oTr.find('span');
        var id = oTr.data('id');
        $.post(orderNavSonURL, {
            pid: id
        }, function(data) {
            if(data.code == 1) {
                var html = '';
                //当点击的符号是'+'且为第一级分类,渲染其第二级分类
                if(oSpan.hasClass('glyphicon-plus') && oTr.data('level') == 1) {
                    if(data.info.two != null) {
                        $.each(data.info.two, function(k, v) {
                            if(v.status == 1) {
                                str = '<input type="button" class="toggle-btn btn btn-info" value="显示" />'
                            } else {
                                str = '<input type="button" class="toggle-btn btn btn-warning" value="隐藏" />'
                            }
                            var d = new Date(parseInt(v.add_time * 1000));
                            html += '<tr data-id=' + v.id + ' data-num=g' + id +
                                ' data-level=2>' +
                                '<td align="center">' + v.id + '</td>' +
                                '<td align="left"><span class="glyphicon glyphicon-plus" style="margin: 0 40px;padding:6px 10px;cursor: pointer; color: #fff; background: #73DCFF;border-radius: 5px;"></span>' +
                                v.name +'/'+ v.name_en+ '<input type="button" class="btn btn-info add pull-right" value="添加子分类"  data-title="添加分类" data-modal="__URL__/category_add?p_id='+id+'&c_id='+v.id+'"/>'+'</td>' +
                                '<td>' + v.sequence + '</td>' +
                                '<td data-status=' + v.status + '>' + str + '</td>' +
                                '<td>' + d.Format("yyyy-MM-dd hh:mm:ss") + '</td>' +
                                '+<td>' +
                                '<input type="button" class="btn btn-success" data-modal="__URL__/category_edit?id='+ v.id+'" value="编辑" style="margin-right: 10px;"/>' +
                                //                                      '<input type="button" class="btn btn-danger" value="删除"/>' +
                                '</td>' +
                                '</tr>';
                        });
                        $(html).insertAfter(oTr);
                    }
                    //当点击的符号是'+'且为第二级分类,渲染其第三级分类
                } else if(oSpan.hasClass('glyphicon-plus') && oTr.data('level') == 2) {
                    if(data.info.two != null) {
                        $.each(data.info.two, function(k, v) {
                            if(v.status == 1) {
                                str = '<input type="button" class="toggle-btn btn btn-info" value="显示" />'
                            } else {
                                str = '<input type="button" class="toggle-btn btn btn-warning" value="隐藏" />'
                            }
                            var d = new Date(parseInt(v.add_time * 1000));
                            html += '<tr data-id=' + v.pid +
                                ' data-num=' +
                                oTr.data('num') +
                                ' data-level=3>' +
                                '<td align="center">' + v.id + '</td>' +
                                '<td align="left" style="padding-left:122px">' +
                                v.name + '</td>' +
                                '<td>' + v.sequence + '</td>' +
                                '<td data-status=' + v.status + '>' + str + '</td>' +
                                '<td>' + d.Format("yyyy-MM-dd hh:mm:ss") +
                                '</td>' +
                                '+<td>' +
                                '<input type="button" class="btn btn-success" data-modal="__URL__/category_edit?id='+ v.id+'" value="编辑" style="margin-right: 10px;"/>' +
                                //                                      '<input type="button" class="btn btn-danger" value="删除"/>' +
                                '</td>' +
                                '</tr>';
                        });
                        $(html).insertAfter(oTr);
                    }

                    //当点击的符号是'-'且为第一级分类,删除其第二级分类
                } else if(oSpan.hasClass('glyphicon-minus') && oTr.data('level') == 1) {
                    $('tbody tr').each(function(k, v) {
                        if($(v).data('num') == ('g' + id)) {
                            $(v).remove();
                        }
                    })
                    //当点击的符号是'-'且为第二级分类,删除其第三级分类
                } else if(oSpan.hasClass('glyphicon-minus') && oTr.data('level') == 2) {
                    $('tbody tr').each(function(k, v) {
                        if($(v).data('num') == oTr.data('num') && $(v).data('level') ==
                            3 && id == $(v).data('id')) {
                            $(v).remove();
                        }
                    })
                }

                //变换'+''-'
                if(oSpan.hasClass('glyphicon-plus')) {
                    oSpan.removeClass('glyphicon-plus').addClass('glyphicon-minus');
                } else {
                    oSpan.removeClass('glyphicon-minus').addClass('glyphicon-plus');
                }
            }

        })
    })


    //点击删除分类
    $(document).on('click', '.btn-danger', function() {
        var id = $(this).parent().parent().find('td').eq(0).text();
        var name = $(this).parent().parent().find('td').eq(1).text();
        sc(name, '__URL__/category_delete?id=' + id);
    })

    //点击添加分类

    $(document).off('click','.toggle-btn').on('click', '.toggle-btn', function() {
        var st_id = $(this).parent().parent().data("id");
        var st_status = $(this).parent().data("status");
        if(st_status == 0) {
            st_status = 2
        }
        var aim = $(this);
        var flag = false;

        $.ajax({
            url: setStatus,
            async:false,
            data: {
                id: st_id,
                status: st_status
            },
            async: false,
            type: 'POST',
            success: function(data) {
                if(data.code == 1) {
                    flag = true
                } else {
                    layer.msg(data.msg)
                }
            }
        })
        if(flag) {
            if($(this).parent().parent().data('level') == 2) {
                if($(this).val() == "显示") {
                    $('tbody tr').each(function(k, v) {
                        if($(v).data('num') == aim.parent().parent().data('num') && $(v).data('level') == 3 && $(v).data('id')==aim.parent().parent().data('id')) {
                            $(v).find('.toggle-btn').val("隐藏").removeClass('btn-info').addClass('btn-warning')
                            aim.parent().data("status","0")
                        }
                    })
                } else {
                    $('tbody tr').each(function(k, v) {
                        if($(v).data('num') == aim.parent().parent().data('num') && $(v).data('level') == 3&& $(v).data('id')==aim.parent().parent().data('id')) {
                            $(v).find('.toggle-btn').val("显示").removeClass('btn-warning').addClass('btn-info')
                            aim.parent().data("status","1")
                        }
                    })
                }
            } else if($(this).parent().parent().data('level') == 1) {
                if($(this).val() == "显示") {
                    $('tbody tr').each(function(k, v) {
                        if($(v).data('num') == ('g' + st_id)) {
                            $(v).find('.toggle-btn').val("隐藏").removeClass('btn-info').addClass('btn-warning')
                            aim.parent().data("status","0")
                        }
                    })
                } else {
                    $('tbody tr').each(function(k, v) {
                        if($(v).data('num') == ('g' + st_id)) {
                            $(v).find('.toggle-btn').val("显示").removeClass('btn-warning').addClass('btn-info')
                            aim.parent().data("status","1")
                        }
                    })
                }
            }
            $(this).toggleClass('btn-info')
            $(this).toggleClass('btn-warning')
            if($(this).val() == "显示") {
                $(this).val("隐藏");
            } else {
                $(this).val("显示")
            }
        }
        form.render()
    });

    //日期格式化
    Date.prototype.Format = function(fmt) { //author: meizz
        var o = {
            "M+": this.getMonth() + 1, //月份
            "d+": this.getDate(), //日
            "h+": this.getHours(), //小时
            "m+": this.getMinutes(), //分
            "s+": this.getSeconds(), //秒
            "q+": Math.floor((this.getMonth() + 3) / 3), //季度
            "S": this.getMilliseconds() //毫秒
        };
        if(/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
        for(var k in o)
            if(new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ?
                (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
        return fmt;
    }
});


</script>
<script src="__PUBLIC__/Radmin_v3/js/test.js" type="text/javascript" charset="utf-8"></script>
</body>

</html>