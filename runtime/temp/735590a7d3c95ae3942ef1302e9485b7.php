<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:95:"E:\phpStudy\PHPTutorial\WWW\pokerGame\public/../application/index\view\user\changePassword.html";i:1540468843;s:81:"E:\phpStudy\PHPTutorial\WWW\pokerGame\application\index\view\public\userHead.html";i:1540871989;s:81:"E:\phpStudy\PHPTutorial\WWW\pokerGame\application\index\view\public\userFoot.html";i:1540794145;}*/ ?>
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
	<div class="bankAddView">
		<div class="cashType">
			<a href="/user/changePassword/login" <?php if($type == "login"): ?>class="active"<?php endif; ?>>修改登录密码</a>
			<a href="/user/changePassword/exchange" <?php if($type == "exchange"): ?>class="active"<?php endif; ?>>修改提现密码</a>
		</div>
		<form id="form">
			<div class="bankAddForm">
				<?php if($first == 0): ?>
				<div>
					<span>
						<font>*</font>原密码
					</span>
					<input type="password" id="oldPassword">
					<span class="bankTip">
						<font>*</font>请输入原密码
					</span>
				</div>
				<?php endif; ?>
				<div>
					<span>
						<font>*</font>新密码
					</span>
					<input type="password" id="newPassword">
					<span class="bankTip">
						<font>*</font>请输入新密码
					</span>
				</div>
				<div>
					<span>
						<font>*</font>密码确认
					</span>
					<input type="password" id="againPassword">
					<span class="bankTip">
						<font>*</font>请再次输入密码
					</span>
				</div>
				<div class="bankAddBtn">
					<button type="button" id="change">确认修改</button>
				</div>
			</div>
		</form>
	</div>
</div>
<script>
	$("#change").click(function () {
        var oldPassword = $("#oldPassword").val();
        var newPassword = $("#newPassword").val();
        var againPassword = $("#againPassword").val();
        <?php if($first == 0): ?>
        if(oldPassword==""||oldPassword==undefined||oldPassword==null){
			layer.msg('原密码不能为空');
			return;
		}
        <?php endif; ?>
		if(newPassword==""||newPassword==undefined||newPassword==null){
            layer.msg('新密码不能为空');
            return;
        }else if(againPassword==""||againPassword==undefined||againPassword==null){
            layer.msg('确认密码不能为空');
            return;
        }else if(newPassword.length<6){
            layer.msg('新密码不能小于6位数！');
            return;
        }else if(againPassword!=newPassword){
            layer.msg('两次密码不相同！');
            return;
        }
        var load = layer.load(1, { shade: [0.01, '#fff'] });
        var url;
        <?php if($type == "login"): ?>
        	url = "/user/change?type=login";
        <?php else: ?>
            url = "/user/change?type=exchange";
        <?php endif; ?>
        $.ajax({
            type: "put", //传值类型
            url: url, //路径
            data: { old_password: oldPassword,new_password:newPassword, r_password: againPassword },//要传的值，和键名
            dataType: "json",
            success: function (data) {
                layer.close(load);
				layer.msg(data.code)
				if(data.code==1){
				    $("input").val("");
				}
            },
            error: function () {
                layer.close(load);
                layer.confirm('网络错误', {
                    btn: ['确认'], //按钮
					title: '提示',
					icon:5
                });
            }
        })
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