<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:87:"E:\phpStudy\PHPTutorial\WWW\pokerGame\public/../application/index\view\email\index.html";i:1540447423;s:81:"E:\phpStudy\PHPTutorial\WWW\pokerGame\application\index\view\public\userHead.html";i:1540871989;s:81:"E:\phpStudy\PHPTutorial\WWW\pokerGame\application\index\view\public\userFoot.html";i:1540794145;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Title</title>
	<link href="/static/public/layui/css/layui.css" rel="stylesheet" type="text/css" />
	<link href="/static/index/css/default.css" rel="stylesheet" type="text/css" />
	<script src="/static/public/js/jquery-2.1.4.min.js"></script>
	<script src="/static/public/layui/layui.all.js"></script>
	<script src="/static/index/js/default.js"></script>
</head>

<body>
	<div class="memberCneter">
		<div class="memberCenterTitle">
			<span>会员中心/Member Center</span>
			<span>GMT+0800 2018-10-11 02:29:48</span>
		</div>
		<div class="memberCenterContent">
			<div class="memberCenterLeft">
				<!-- <ul>
			<li class="active">
				<a>
					<div><img src="/static/index/img/operation/cn_1a.png"></div>
					<div>会员专区</div>
				</a>
			</li>
			<li>
				<a href="/wallet">
					<div><img src="/static/index/img/operation/cn_2a.png"></div>
					<div>充值</div>
				</a>
			</li>
			<li>
				<a href="/exchange/indexView">
					<div><img src="/static/index/img/operation/cn_3a.png"></div>
					<div>提现</div>
				</a>
			</li>
			<li>
				<a href="/wallet/recharge">
					<div><img src="/static/index/img/operation/cn_4a.png"></div>
					<div>充值记录</div>
				</a>
			</li>
			<li>
				<a href="/wallet/recharge">
					<div><img src="/static/index/img/operation/cn_5a.png"></div>
					<div>提现记录</div>
				</a>
			</li>
			<li>
				<a href="/user/bankList">
					<div><img src="/static/index/img/operation/cn_6a.png"></div>
					<div>会员银行卡管理</div>
				</a>
			</li>
			<li>
				<a>
					<div><img src="/static/index/img/operation/cn_7a.png"></div>
					<div>修改取款密码</div>
				</a>
			</li>
			<li>
				<a>
					<div><img src="/static/index/img/operation/cn_8a.png"></div>
					<div>修改登录密码</div>
				</a>
			</li>
		</ul> -->
				<ul>
					<li <?php if($path == "user/index"): ?> class="active" <?php endif; ?>>
						<a  href="/user/index">
							<div><img src="/static/index/img/operation/cn_1a.png"></div>
							<div>会员信息</div>
						</a>
					</li>
					<li <?php if(strstr($path,"shop")): ?> class="active" <?php endif; ?>>
						<a href="/shop/index">
							<div><img src="/static/index/img/operation/shopmall.png"></div>
							<div>商城</div>
						</a>
					</li>
					<li <?php if($path == "user/gameIndex"): ?> class="active" <?php endif; ?>>
						<a href="/user/gameIndex">
							<div><img src="/static/index/img/operation/gameimg.png"></div>
							<div>游戏信息</div>
						</a>
					</li>
					<!-- <li>
						<a>
							<div><img src="/static/index/img/operation/peopleimg.png"></div>
							<div>我的虚拟形象</div>
						</a>
					</li> -->
					<li <?php if(strstr($path,"wallet")): ?> class="active" <?php endif; ?>>
						<a href="/wallet">
							<div><img src="/static/index/img/operation/cash.png"></div>
							<div>充值</div>
						</a>
					</li>
					<li <?php if(($path == "user/myProp") or ($path == "user/userImage")): ?> class="active" <?php endif; ?>>
						<a href="/user/myProp">
							<div><img src="/static/index/img/operation/item.png"></div>
							<div>我的道具</div>
						</a>
					</li>
					<li <?php if(($path == "email/index") or (strstr($path,"email/detail"))): ?> class="active" <?php endif; ?>>
						<a href="/email/index">
							<div><img src="/static/index/img/operation/webEmail.png"></div>
							<div>站内短信</div>
						</a>
					</li>
					<li <?php if($path == "user/friend"): ?> class="active" <?php endif; ?>>
						<a href="/user/friend">
							<div><img src="/static/index/img/operation/friend.png"></div>
							<div>好友信息</div>
						</a>
					</li>
					<!-- <li>
						<a>
							<div><img src="/static/index/img/operation/cn_7a.png"></div>
							<div>取款密码</div>
						</a>
					</li> -->
					<li <?php if(($path == "user/changePassword/login") or ($path == "user/changePassword/exchange")): ?> class="active" <?php endif; ?>>
						<a href="/user/changePassword/login">
							<div><img src="/static/index/img/operation/pwd.png"></div>
							<div>密码管理</div>
						</a>
					</li>
				</ul>
			</div>
<div class="memberCenterRight">

	<div class="memCenterRightContent">
<!--		<table class="defaultTable">
			<thead>
				<tr>
					<th>标题</th>
					<th>发布人</th>
					<th>时间</th>
					<th>状态</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><a href="/email/detail/1">我是站内短信1！</a></td>
					<td>许健</td>
					<td>2018-10-12 10:10</td>
					<td>未读</td>
					<td>
						<button class="layui-btn layui-btn-danger layui-btn-xs">删除</button>
					</td>
				</tr>
				<tr>
					<td><a href="/email/detail/2">我是站内短信2！</a></td>
					<td>许健</td>
					<td>2018-10-12 10:10</td>
					<td>未读</td>
					<td>
						<button class="layui-btn layui-btn-danger layui-btn-xs">删除</button>
					</td>
				</tr>
				<tr>
					<td><a href="/email/detail/3">我是站内短信3！</a></td>
					<td>许健</td>
					<td>2018-10-12 10:10</td>
					<td>已读</td>
					<td>
						<button class="layui-btn layui-btn-danger layui-btn-xs">删除</button>
					</td>
				</tr>
			</tbody>
		</table>


		<div class="tablePage">
			<div id="layui-table-page1">
				<div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-2"><a href="javascript:;" class="layui-laypage-prev layui-disabled"
					 data-page="0"><i class="layui-icon"></i></a><span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>1</em></span><a
					 href="javascript:;" data-page="2">2</a><a href="javascript:;" data-page="3">3</a><span class="layui-laypage-spr">…</span><a
					 href="javascript:;" class="layui-laypage-last" title="尾页" data-page="100">100</a><a href="javascript:;" class="layui-laypage-next"
					 data-page="2"><i class="layui-icon"></i></a><span class="layui-laypage-skip">到第<input type="text" min="1" value="1"
						 class="layui-input">页<button type="button" class="layui-laypage-btn">确定</button></span><span class="layui-laypage-count">共
						1000 条</span>
				</div>
			</div>
		</div>-->
		<table class="layui-hide" id="emailIndexTable" lay-filter="emailIndexTable"></table>
	</div>
	<script type="text/html" id="toolbar">
		<div class="layui-btn-container">
			<button class="layui-btn layui-btn-sm layui-btn-warm" lay-event="deleteCheck">删除所选</button>
			<button class="layui-btn layui-btn-sm layui-btn-danger" lay-event="deleteRead">删除已读邮件</button>
			<button class="layui-btn layui-btn-sm" lay-event="allRead">全部标记为已读</button>
		</div>
	</script>
</div>
<script>
    layui.use('table', function(){
        var table = layui.table;
        table.render({
            elem: '#emailIndexTable'
            ,toolbar: '#toolbar'
            ,height: 601
			,defaultToolbar:[]
            ,page: true //开启分页
            ,response:{
                statusName: 'code'
                ,statusCode: 1
            }
            ,url:'/email/list'
            ,cellMinWidth: 80
            ,limit: 12
            ,limits: [12,24,48]
            ,cols: [[
                {type:'checkbox'}
                ,{field:'', width:80, title: '状态'
					,templet: function(d){
                    	if(d.status == 0){
                            return "未读";
                        }else{
                            return "已读";
                        }
                    }
				}
                ,{field:'', width:80, title: '发布人'
                    ,templet: function(d){
                        if(d.nickname === null){
                            return "系统";
                        }else{
                            return d.nickname;
                        }
                    }
				}
                ,{field:'title', title: '标题'
                    ,templet: function(d){
                        return '<a href="/email/detail/'+d.id+'">'+d.title+'</a>';
                    }
                }
                ,{field:'time',width:180, title: '时间'}
            ]]
        });
        //头工具栏事件
        table.on('toolbar(emailIndexTable)', function(obj){
            var checkStatus = table.checkStatus(obj.config.id); //获取选中行状态
            var id='';
            switch(obj.event){
                case 'deleteCheck':
                    var data = checkStatus.data;  //获取选中行数据
                    for(var a=0;a<data.length;a++){
                        id===''?id=data[a]['id']:id+=','+data[a]['id'];
					}
                    emailAjax('delete','email');
                    break;
                case 'deleteRead' :
                    emailAjax('delete','emailRead');
                    break;
                case 'allRead' :
                    emailAjax('put','email');
                    break;
            };
        });
        function emailAjax(type,url,id = 0) {
            var load = layer.load(1, { shade: [0.01, '#fff'] });
            $.ajax({
                type: type,//传值类型
                url: url,//路径
                data: { id:id},//要传的值，和键名
                dataType: "json",
                success: function (data) {
                    layer.close(load);
                    if(data.code === 1){
                        $(".deleteEmail").removeClass('deleteEmail');
                        $(".layui-laypage-btn").click();
                        layer.msg('操作成功！')
                    }else{
                        layer.msg('操作失败！')
                    }
                },
                error: function () {
                    layer.close(load);
                    layer.msg('网络错误！')
                }
            });
        }
    });
</script>
</div>
</div>
<div class="statusModelBg hidden"></div>
<div class="statusModel hidden">
    <div class="modelTitle"><span>提示</span></div>
    <div class="modelContent">
        <span>提示信息！</span>
    </div>
    <div class="modelClose">
        <button>确定</button>
    </div>
</div>
</body>
</html>