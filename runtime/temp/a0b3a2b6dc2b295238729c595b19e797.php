<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"E:\phpStudy\PHPTutorial\WWW\pokerGame\public/../application/index\view\index\index.html";i:1541342106;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="/static/public/layui/css/layui.css" rel="stylesheet" type="text/css"/>
    <link href="/static/index/css/default.css" rel="stylesheet" type="text/css"/>
    <script src="/static/public/js/jquery-2.1.4.min.js"></script>
    <script src="/static/public/layui/layui.all.js"></script>
    <script src="/static/index/js/default.js"></script>
</head>

<body>
<div class="topBg"></div>
<div class="container">
    <div class="mainhead">
        <div class="topLeft">
            <img src="/static/index/img/logo.png">
        </div>
        <ul class="topRight">
            <?php if(session('user.id')){?>
            <li class="topServiceNav">
                <i class="layui-icon layui-icon-headset"></i>
                <a>客服中心</a>
            </li>
            <li class="email">
                <i class="layui-icon layui-icon-reply-fill"></i>
                <a>站内短信</a>
            </li>
            <li class="user">
                <i class="layui-icon layui-icon-user"></i>
                <a>个人中心</a>
            </li>
            <li><a class="loginOut">退出</a></li>
            <?php }else{ ?>
            <li class="mainJoinBtn"><a>注册</a></li>
            <li class="mainLopginBtn"><a>登录</a></li>
            <?php } ?>

        </ul>
    </div>
    <div class="mainInfo">
        <ul class="scrollNtc">
            <li><a>公告1:恭喜玩家ID:<span class="colorOrange">yubinfong</span> 游戏中,赢得巨额游戏币:<span
                    class="colorRed">800.000.000</span></a></li>
            <li><a>公告2:恭喜玩家ID:<span class="colorOrange">yubinfong</span> 游戏中,赢得巨额游戏币:<span
                    class="colorRed">800.000.000</span></a></li>
            <li><a>公告3:恭喜玩家ID:<span class="colorOrange">yubinfong</span> 游戏中,赢得巨额游戏币:<span
                    class="colorRed">800.000.000</span></a></li>
            <li><a>公告4:恭喜玩家ID:<span class="colorOrange">yubinfong</span> 游戏中,赢得巨额游戏币:<span
                    class="colorRed">800.000.000</span></a></li>
        </ul>
        <ul class="mianInfoRight">
            <li>ID:<span class="colorBlue">陈大发大哥</span></li>
            <li>金币:<span class="colorOrange">90,150,000</span></li>
            <li>游戏币:<span class="colorRed">750,000</span></li>
            <li>积分:<span class="colorGreen">650,000</span></li>
        </ul>
    </div>

    <div class="banner">
        <ul>
            <li>
                <a class="zha">
                    <div>炸</div>
                    <div>金</div>
                    <div>花</div>
                </a>
            </li>
            <li>
                <a class="dou">
                    <div>斗</div>
                    <div>地</div>
                    <div>主</div>
                </a>
            </li>
            <li>
                <a class="de">
                    <div>德</div>
                    <div>州</div>
                    <div>扑</div>
                    <div>克</div>
                </a>
            </li>
        </ul>
    </div>


    <div class="mainlist">
        <div class="mainListTitle">
            <div class="ntcTitle">
                <span>活动公告</span>
                <a class="ntcMore">更多</a>
            </div>
            <div class="transtration">
                <span>最新充值/兑换记录</span>
                <!--<a>更多</a>-->
            </div>
        </div>
        <ul class="ntcList">
            <?php if(is_array($bulletin) || $bulletin instanceof \think\Collection || $bulletin instanceof \think\Paginator): $i = 0; $__LIST__ = $bulletin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bList): $mod = ($i % 2 );++$i;?>
            <li data-id="<?php echo $bList['id']; ?>">
                <a>
                    <span class="ntcSubTitle">[<?php echo $bList['type']; ?>]<?php echo $bList['title']; ?></span>
                    <?php if(substr($bList['time'],0,10) == date('Y-m-d',time())): ?>
                    <span class="ntcTime"><?php echo substr($bList['time'],11,5); ?></span>
                    <?php else: ?>
                    <span class="ntcTime"><?php echo substr($bList['time'],0,10); ?></span>
                    <?php endif; ?>
                </a>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <table class="transtrtationList">
            <tbody>
            <?php if(is_array($wallet) || $wallet instanceof \think\Collection || $wallet instanceof \think\Paginator): $i = 0; $__LIST__ = $wallet;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$wList): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo substr($wList['bank_account'], 0,strlen($wList['bank_account'])-3).'*'; ?></td>

                <?php if($wList['type'] == 1): ?>
                <td class="cashColor">充值</td>
                <?php else: ?>
                <td class="exchangeColor">兑换</td>
                <?php endif; ?>
                <td><span class="colorOrange"><?php echo number_format($wList['money'],2); ?></span>RMB</td>
                <td width="180"><?php echo $wList['time']; ?></td>
                <?php if($wList['type'] == 1): ?>
                <td>充值成功</td>
                <?php else: ?>
                <td>兑换成功</td>
                <?php endif; ?>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
    <div class="shop">
        <div class="shopList">
            <div>
                <span>虚拟形象</span>
                <a data-id="0" class="shopBuy">更多</a>
            </div>
        </div>
        <ul class="shopContent shopMainContent">
            <?php if(is_array($shop[0]) || $shop[0] instanceof \think\Collection || $shop[0] instanceof \think\Paginator): $i = 0; $__LIST__ = $shop[0];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shop0): $mod = ($i % 2 );++$i;?>
            <li>
                <div class="shopimg"><img src="<?php echo $shop0['img']; ?>">
                    <!--<img class="shopStatus" src="/static/index/img/hot.png">-->
                </div>
                <div class="shopMoney">
                    <div class="virtualImageName">名　称:<?php echo $shop0['name']; ?></div>
                    <div class="money">金　币:<?php echo number_format($shop0['money'],2); ?></div>
                    <div class="gameMoney">游戏币:<?php echo number_format($shop0['coin']); ?></div>
                </div>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <div class="waitting">
        虚位以待
    </div>
    <div class="mainService">
        <div class="serviceTitle">
            <span>客服帮助</span>
            <a>更多</a>
        </div>
        <ul>
            <li>
                <a>1.取款帮助</a>
            </li>
            <li>
                <a>2.存款帮助</a>
            </li>
            <li>
                <a>3.申请代理帮助</a>
            </li>
            <li>
                <a>4.打不开游戏</a>
            </li>
            <li>
                <a>5.常见问题打不开游戏打不开游戏打不开游戏打不开游戏打不开游戏打不开游戏</a>
            </li>
            <li>
                <a>6.积分帮助</a>
            </li>
        </ul>
    </div>
    <div class="propBuy">
        <div class="porpBuyTitle">
            <span>道具购买</span>
            <a data-id="1" class="shopBuy">更多</a>
        </div>
        <ul class="propContent">
            <?php if(is_array($shop[1]) || $shop[1] instanceof \think\Collection || $shop[1] instanceof \think\Paginator): $i = 0; $__LIST__ = $shop[1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shop1): $mod = ($i % 2 );++$i;?>
            <li>
                <div class="propImg">
                    <img src="<?php echo $shop1['img']; ?>">
                </div>
                <div class="shopMoney">
                    <div class="propName">名　称:<?php echo $shop1['name']; ?></div>
                    <div class="money">金　币:<?php echo number_format($shop1['money'],2); ?></div>
                    <div class="gameMoney">游戏币:<?php echo number_format($shop1['coin'],2); ?></div>
                </div>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <ul class="bottomNav">
        <li class="cashFree">
            <div class="bottomNavTitle">
                免费充值
            </div>
            <div class="bottomNavContent">
                <div class="fontCenter">
                    游戏币余额低于<span>3,000</span>币时,可免费充值
                </div>
                <div>
                    每日可免费5次.
                </div>
                <div>您今天还可以免费充值5/5次.</div>

            </div>
        </li>
        <li class="cashExchange">
            <div class="bottomNavTitle">
                充值兑换
            </div>
            <div class="bottomNavContent">
                <div class="fontCenter">
                    建议耐心等待一段时间
                </div>
                <div>
                    每日可免费5次.
                </div>
            </div>
        </li>
        <li class="serviceCneter">
            <div class="bottomNavTitle">
                客服中心
            </div>
            <div class="bottomNavContent">
                <div class="fontCenter">客 服 电 话:<span>021-888-888</span></div>
                <div>客 服 Q Q:<span>13534848</span></div>
                <div>Email:<span>yubinfong@QQ.com</span></div>
            </div>
        </li>
        <li class="workTime">
            <div class="bottomNavTitle">
                工作时间
            </div>
            <div class="bottomNavContent">
                <div class="fontCenter">服 务 时 间: <span>7 X 24 小时</span></div>
            </div>
        </li>
    </ul>
</div>
<div class="foot">
    <div class="footImg fontCenter">
        <a><img src="/static/index/img/1.png"></a>
        <a><img src="/static/index/img/2.png"></a>
        <a><img src="/static/index/img/3.png"></a>
        <a><img src="/static/index/img/4.png"></a>
        <a><img src="/static/index/img/5.png"></a>
        <a><img src="/static/index/img/6.png"></a>
        <a><img src="/static/index/img/7.png"></a>
    </div>
    <div class="companyInfo fontCenter">COPYRIGHTS © 2017 SH SXF ● GAME ALL RLGHTS RESERVED</div>
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
<div class="ganeOpenBg">
    <iframe allowfullscreen id="gameOpen" src=""></iframe>
</div>
<script>
    $(".loginOut").click(function () {
        var load = layer.load(1, {shade: [0.01, '#fff']});
        $.ajax({
            type: "delete",//传值类型
            url: "login",//路径
            dataType: "json",
            success: function (data) {
                layer.close(load);
                if (data.code == 1) {
                    parent.location.reload()
                }
            },
            error: function () {
                layer.close(load);
                $(".statusModelBg").removeClass("hidden")
                $(".statusModel").removeClass("hidden")
                $(".statusModel .modelContent span").text("网络错误")
            }
        })
    })
    $(".modelClose,.statusModelBg").click(function () {
        $(".statusModelBg").addClass("hidden")
        $(".statusModel").addClass("hidden")
        $(".statusModel .modelContent span").text("提示信息")
    })
</script>
</body>

</html>