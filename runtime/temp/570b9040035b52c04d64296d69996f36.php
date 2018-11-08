<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:86:"E:\phpStudy\PHPTutorial\WWW\pokerGame\public/../application/index\view\user\index.html";i:1540966203;s:81:"E:\phpStudy\PHPTutorial\WWW\pokerGame\application\index\view\public\userHead.html";i:1540871989;s:81:"E:\phpStudy\PHPTutorial\WWW\pokerGame\application\index\view\public\userFoot.html";i:1540794145;}*/ ?>
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
					<ul class="userTopRightTop">
						<li>
							<div class="serviceBg"></div>
							<div class="serviceBgFather" onclick="window.location.href='/service/list'">
								<img src="/static/index/img/cn_10.png">
							</div>
						</li>
						<li>
							<div class="capitalBg"></div>
							<div class="capitalBgFather" onclick="window.location.href='/wallet/logList'">
								<img src="/static/index/img/cn_11.png">
							</div>
						</li>
						<li>
							<div class="gameInfoBg"></div>
							<div class="gameInfoBgFather" onclick="window.location.href='/user/gameIndex'">
								<img src="/static/index/img/cn_12.png">
							</div>
						</li>
						<li>
							<div class="gameShopMallBg"></div>
							<div class="gameShopMallBgFather" onclick="window.location.href='/user/vault'">
								<img src="/static/index/img/operation/vault.png">
							</div>
						</li>
					</ul>
					<ul class="userTopRightName">
						<li>客服中心</li>
						<li>资金管理</li>
						<li>游戏信息</li>
						<li>我的金库</li>
					</ul>
					<img src="/static/index/img/step.png">
				</div>
			</div>
			<div class="infoAlertBg">
				<div class="infoAlertBnak">
						<img src="/static/index/img/bank.png"  onclick="window.location.href='/user/bankList'">
						<div><a onclick="window.location.href='/user/bankList'">银行卡管理</a></div>
				</div>
				<div class="userCenterInfo">
					<ul class="userCenterInfoDate">
						<li>
							<span><?php echo substr(session('user.login_time'),0,10); ?></span><br>
							<?php echo substr(session('user.login_time'),11); ?>
						</li>
						<li id="ip"><?php echo session("user.login_ip"); ?></li>
						<li id="country"></li>
						<li id="city"></li>
					</ul>
					<div style="text-align:center">
						<img src="/static/index/img/yellowLoad.png">
					</div>
					<ul class="userCenterInfoType">
						<li>上次登录时间</li>
						<li>上次登录IP</li>
						<li>上次登录国家</li>
						<li>上次登录省份</li>
					</ul>
				</div>
			</div>
			<div class="userBottomInfo">
				<div class="userBottomLeft">
					<ul class="userBottomLeftType">
						<li class="userCenterFreeCash">
							<span>3/3</span>
							<span>领取救济金</span>
						</li>
						<li class="userCenterAllCash">
							<span>0.00</span>
							<span>总充值金额</span>
						</li>
						<li class="userCenterAllExchange">
							<span>0.00</span>
							<span>总体现金额</span>
						</li>
						<li onclick="window.location.href='/service/list'">
							<span>常见问题</span>
						</li>
					</ul>
				</div>
				<div class="userBottomRight">
					<div class="userBottomRightNtcTilte">
						<span>公告列表</span>
						<a href='/bulletin/list'>更多</a>
					</div>
					<table>
						<tbody>
							<?php if(is_array($bulletin) || $bulletin instanceof \think\Collection || $bulletin instanceof \think\Paginator): $i = 0; $__LIST__ = $bulletin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bList): $mod = ($i % 2 );++$i;?>
							<tr>
								<td  width="70">[ <?php echo $bList['type']; ?> ]</td>
								<td><a href="/bulletin/detail/<?php echo $bList['id']; ?>"><?php echo $bList['title']; ?></a></td>
								<?php if(substr($bList['time'],0,10) == date('Y-m-d',time())): ?>
								<td width="120"><?php echo substr($bList['time'],11,5); ?></td>
								<?php else: ?>
								<td width="120"><?php echo substr($bList['time'],0,10); ?></td>
								<?php endif; ?>
							</tr>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$.get('http://ip-api.com/json/208.80.152.201',function () {

    })
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