<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:87:"E:\phpStudy\PHPTutorial\WWW\pokerGame\public/../application/index\view\user\friend.html";i:1540378043;s:81:"E:\phpStudy\PHPTutorial\WWW\pokerGame\application\index\view\public\userHead.html";i:1540871989;s:81:"E:\phpStudy\PHPTutorial\WWW\pokerGame\application\index\view\public\userFoot.html";i:1540794145;}*/ ?>
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
		<!-- <div class="searchForm">
			<form class="layui-form" action="">
				<div class="layui-form-item">
					<div class="layui-inline">
						<div class="layui-input-inline">
							<select name="modules" lay-verify="required" lay-search="">
								<option value="0">失败</option>
								<option value="1">成功</option>
							</select>
						</div>
					</div>
					<div class="layui-inline">
						<div class="layui-input-inline">
							<input type="text" class="layui-input" placeholder="아이디">
						</div>
					</div>

					<button class="layui-btn">确认</button>
				</div>
			</form>
		</div> -->
		<table class="defaultTable">
			<thead>
				<tr>
					<th>等级</th>
					<th>昵称</th>
					<th>状态</th>
					<th>所在房间</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Lv1</td>
					<td>许健1</td>
					<td>离线:1天</td>
					<td>10倍场-10号桌-4/5</td>
					<td>
						<button class="layui-btn layui-btn-xs">加入</button>
						<button class="layui-btn layui-btn-xs layui-btn-danger">删除</button>
					</td>
				</tr>
				<tr>
					<td>Lv1</td>
					<td>许健1</td>
					<td>离线:1天</td>
					<td>10倍场-10号桌-4/5</td>
					<td>
						<button class="layui-btn layui-btn-xs">加入</button>
						<button class="layui-btn layui-btn-xs layui-btn-danger">删除</button>
					</td>
				</tr>
				<tr>
					<td>Lv1</td>
					<td>许健1</td>
					<td>离线:1天</td>
					<td>10倍场-10号桌-4/5</td>
					<td>
						<button class="layui-btn layui-btn-xs">加入</button>
						<button class="layui-btn layui-btn-xs layui-btn-danger">删除</button>
					</td>
				</tr>
				<tr>
					<td>Lv1</td>
					<td>许健1</td>
					<td>在线:10小时</td>
					<td>10倍场-10号桌-4/5</td>
					<td>
						<button class="layui-btn layui-btn-xs">加入</button>
						<button class="layui-btn layui-btn-xs layui-btn-danger">删除</button>
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
		</div>
	</div>
</div>
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