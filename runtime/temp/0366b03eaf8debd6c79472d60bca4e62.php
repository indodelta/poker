<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:90:"E:\phpStudy\PHPTutorial\WWW\pokerGame\public/../application/index\view\user\gameIndex.html";i:1540384416;s:81:"E:\phpStudy\PHPTutorial\WWW\pokerGame\application\index\view\public\userHead.html";i:1540871989;s:81:"E:\phpStudy\PHPTutorial\WWW\pokerGame\application\index\view\public\userFoot.html";i:1540794145;}*/ ?>
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
	<div class="userAlertContainer">

		<div class="userAlertInfo">
			<div class="userTopInfo">
				<div class="userTopLeft">
					<div class="userTopLeftTop">
						<ul class="userInfo">
							<li class="alertUserName">灰太郎大人(yu1005)
							</li>
							<li class="alertUserName">账户余额(游戏币)</li>
							<li class="alertUserMoney">876,000,000,000</li>
						</ul>
						<div class="headPortrait">
							<img src="/static/index/img/people/4.png">
						</div>
					</div>
					<div class="userTopLeftBottom">
						<div class="userMoneyTop">
							<div class="userDeposit">
								存款:9,876,543,210
							</div>
							<div class="userIntegral">
								9,876,543,210积分
							</div>
						</div>
						<div class="userMoneyBottom">
							<div class="goldCoin">金币:78,900,011,290</div>
							<div class="alertUserLv">
								<span>Lv2:</span>
								<div class="layui-progress">
									<div class="layui-progress-bar layui-bg-orange" lay-percent="30%" style="width: 30%;"></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="userTopRight">
					<ul class="userTopRightGameNav">
						<li class="fieldFather">
							<div>
								<div class="fieldBg"></div>
							</div>
							<div>
								<div>游戏总场次</div>
								<div>(99080)</div>
							</div>
						</li>
						<li class="probabilityFather">
							<div>
									<div class="probabilityBg"></div>
							</div>
							<div>
								<div>胜率</div>
								<div>(80%)</div>
							</div>
						</li>
						<li class="pokerFather">
							<div>
									<div class="pokerBg"></div>
							</div>
							<div>
								<div>最大牌型</div>
								<div>(♠AAAKK)</div>
							</div>
						</li>
						<li class="integralFather">
							<div>
									<div class="integralBg"></div>
							</div>
							<div>
								<div>获得积分</div>
								<div>(123123)</div>
							</div>
						</li>
					</ul>
				</div>
			</div>


			<div class="searchForm">
				<form class="layui-form" action="">
					<div class="layui-form-item">
						<div class="layui-inline">
							<div class="layui-input-inline">
								<select name="modules" lay-verify="required" lay-search="">
									<option value="0">输</option>
									<option value="1">赢</option>
								</select>
							</div>
						</div>
						<div class="layui-inline">
							<div class="layui-input-inline">
								<input type="text" class="layui-input" value="2018-01-10">
							</div>
						</div>
						<div class="layui-inline">
							<div class="layui-input-inline">
								<input type="text" class="layui-input" value="2018-02-10">
							</div>
						</div>
						<button class="layui-btn">确认</button>
					</div>
				</form>
			</div>
			<table class="defaultTable">
				<thead>
					<tr>
						<th>游戏时间</th>
						<th>游戏币</th>
						<th>牌型</th>
						<th>获得积分</th>
						<th>游戏结果</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>2018-9-27 13:13</td>
						<td>+2,000</td>
						<td>高牌</td>
						<td>100</td>
						<td>胜</td>
					</tr>
					<tr>
						<td>2018-9-27 13:13</td>
						<td>-2,000</td>
						<td>同花</td>
						<td>100</td>
						<td>输</td>
					</tr>
					<tr>
						<td>2018-9-27 13:13</td>
						<td>-2,000</td>
						<td>对子</td>
						<td>100</td>
						<td>输</td>
					</tr>
					<tr>
						<td>2018-9-27 13:13</td>
						<td>+2,000</td>
						<td>高牌</td>
						<td>100</td>
						<td>胜</td>
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
							 class="layui-input">页<button type="button" class="layui-laypage-btn">确定</button></span>
					</div>
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