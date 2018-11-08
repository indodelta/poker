<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:86:"E:\phpStudy\PHPTutorial\WWW\pokerGame\public/../application/index\view\shop\index.html";i:1540967002;s:81:"E:\phpStudy\PHPTutorial\WWW\pokerGame\application\index\view\public\userHead.html";i:1540871989;s:81:"E:\phpStudy\PHPTutorial\WWW\pokerGame\application\index\view\public\userFoot.html";i:1540794145;}*/ ?>
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
					<ul class="userTopRightShopNav">
						<li class="alertUserImg" onclick="window.location.href='/shop/list/0'">
							<img src="/static/index/img/userImg.png">
							<button>虚拟形象商城</button>
						</li>
						<li class="alertUserProp" onclick="window.location.href='/shop/list/1'">
							<img src="/static/index/img/shopProp.png">
							<button>道具商城</button>
						</li>
						<li class="alertUserRecharge" onclick="window.location.href='/wallet/cashCoupon'">
							<img src="/static/index/img/money.png">
							<button>金币/代金券充值</button>
						</li>
					</ul>
				</div>
			</div>
			<div class="searchForm">
				<!--<form class="layui-form" action="">-->
					<!--<div class="layui-form-item">-->
						<!--<div class="layui-inline">-->
							<!--<div class="layui-input-inline">-->
								<!--<input type="text" class="layui-input" placeholder="아이디">-->
							<!--</div>-->
						<!--</div>-->
						<!--<button class="layui-btn">确认</button>-->
					<!--</div>-->
				<!--</form>-->
			</div>
		</div>
		<table class="layui-hide" id="emailIndexTable" lay-filter="emailIndexTable"></table>
	</div>
</div>
<script>
    layui.use('table', function(){
        var table = layui.table;
        table.render({
            elem: '#emailIndexTable'
            ,defaultToolbar:[]
            ,page: {
                layout: [ 'prev', 'page', 'next', 'skip', 'count'] //自定义分页布局
            }
            ,height:394
            ,response:{
                statusName: 'code'
                ,statusCode: 1
            }
            ,url:'/shop/logList'
            ,cellMinWidth: 80
            ,limit: 8
            ,cols: [[
                {field:'LAY_INDEX', width:50, title: 'No'
                    ,templet: function(d){
                        return d.LAY_INDEX;
                    }
                }
                ,{field:'note',  title: '购买物品'}
                ,{field:'', title: '分类'
                    ,templet: function(d){
                        var type;
                        if(d.change_type == 1){
                            type = "虚拟形象";
                        }else{
                            type = "游戏道具";
                        }
                        return type;
                    }
                }
                ,{field:'',  title: '消费金额'
                    ,templet: function(d){
                        var type;
                        switch (d.pay_type){
							case '0':
                                type = "金币";
                                break;
							case '1':
                                type = "游戏币";
                                break;
							case '2':
							    type = "积分";
							    break;
							default:
							    type = "";
                        }
                        return toThousands(d.change_money)+' '+type
                    }
                }
                ,{field:'time',width:180, title: '时间'}
            ]]
        });

        function toThousands(num) {
            var dataval = parseInt(num);
            var data2 = dataval.toFixed(2).replace(/\d{1,3}(?=(\d{3})+(\.\d*)?$)/g,'$&,');
            return  data2;
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