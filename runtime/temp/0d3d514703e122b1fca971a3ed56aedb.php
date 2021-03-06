<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:90:"E:\phpStudy\PHPTutorial\WWW\pokerGame\public/../application/index\view\login\register.html";i:1540383916;}*/ ?>
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
	<div class="memberJoin">
		<div class="loginTitle fontCenter">会员注册</div>
		<div class="memberJoinContent">
			<fieldset class="layui-elem-field">
				<legend>注册账号</legend>
				<div class="layui-field-box">
					<div class="memberForm">
						<span>会员账号</span>
						<input type="text" id="memberId">
						<span class="tip">
							
							<font>*</font>请输入邮箱
						</span>
					</div>
					<div class="memberForm">
						<span>会员密码</span>
						<input type="password" id="memberPwd">
						<span class="tip">
							<font>*</font>6-20个英文字符或英文
						</span>
					</div>
					<div class="memberForm">
						<span>确认密码</span>
						<input type="password" id="memberPwdTrue">
						<span class="tip">
							<font>*</font>6-20个英文字符或英文
						</span>
					</div>
					<div class="memberForm">
						<span>邀请码</span>
						<input type="text" id="memberCode">
						<span class="tip"></span>
					</div>
				</div>
			</fieldset>

			<fieldset class="layui-elem-field">
				<legend>个人资料</legend>
				<div class="layui-field-box">
					<div class="memberForm">
						<span>真实姓名</span>
						<input type="text" id="memberName">
						<span class="tip">*提现时收款人的真实姓名</span>
					</div>
					<div class="memberForm">
						<span>手机电话</span>
						<input type="text" id="memberPhone">
						<span class="tip">*请填写你的手机电话号码</span>
					</div>
					<div class="memberForm">
						<span>取款密码</span>
						<input type="password" id="memberMoneyCode">
						<span class="tip">*取款密码6位数</span>
					</div>
					<div class="memberForm memBerCodeInput">
						<span>验证码</span>
						<input type="text" id="memberCode">
						<img class="codeFont" src="<?php echo captcha_src(); ?>" onclick="this.src=this.src">
						<span class="tip"></span>
					</div>
				</div>
			</fieldset>
			<div class="memberTip"><span>&nbsp;</span></div>
			<div class="memberJoinCheck">
				<input type="checkbox" id="registerCheckbox">
				<span class="years" style="cursor: pointer;">已满18周岁,且同意本站</span>
				<span class="colorZ">『用户注册协议』</span>
			</div>
			<div class="memberJoinBtn">
				<button class="registerBtn">立即加入</button>
				<button>重置</button>
			</div>
			<div class="remarks">
				<div>备注:</div>
				<div>手机与取款密码为核实取款操作的必需凭证,请会员务必填写正确真实的资料。</div>
				<div>若公司有其它活动会实时短信通知，请会员正确填写</div>
			</div>
		</div>
	</div>
	<script>
		$(".registerBtn").click(function () {
			if ($("#memberId").val() == '') {
				$(".memberTip span").text("提示:会员账号不能为空")
				return
			}
			if (!$("#memberId").val().match(/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/)) {
				$(".memberTip span").text("提示:邮箱格式不正确")
				return
			}
			if ($("#memberPwd").val() == '') {
				$(".memberTip span").text("提示:会员密码不能为空")
				return
			}
			if ($("#memberPwdTrue").val() == '') {
				$(".memberTip span").text("提示:确认密码不能为空")
				return
			}
			if ($("#memberPwd").val() !== $("#memberPwdTrue").val()) {
				$(".memberTip span").text("提示:两次密码输入不一致")
				return
			}
			if($("#memberPwd").val().length<6||$("#memberPwd").val().length>20||$("#memberPwdTrue").val().length<6||$("#memberPwdTrue").val().length>20){
				$(".memberTip span").text("提示:密码长度应为6-20位")
				return
			}
			
			if(!$('#registerCheckbox').is(':checked')){
				$(".memberTip span").text("提示:请勾选用户协议")
				return
			}
			var load = layer.load(1, { shade: [0.01, '#fff'] });
			$.ajax({
				type: "POST",//传值类型
				url: "register",//路径
				data: { account: $("#memberId").val(), password: $("#memberPwd").val(), superior: $("#memberCode").val() },
				//要传的值，和键名
				dataType: "json",
				success: function (data) {
					layer.close(load);
					if (data.code == 1) {
						var index = parent.layer.getFrameIndex(window.name)
						parent.layer.close(index)
						layui.use('layer', function () {
							var layer = layui.layer;
							parent.$(".mainLopginBtn").click()
						})
					}
					if(data.code==500){
						$(".memberTip span").text("提示:服务器错误")
					}
					if(data.code==404){
						$(".memberTip span").text("提示:缺少参数")
					}
					if(data.code==-1){
						$(".memberTip span").text("提示:邀请码错误")
					}
					if(data.code==-2){
						$(".memberTip span").text("提示:账号已存在")
					}
					if(data.code==0){
						$(".memberTip span").text("提示:失败")
					}


				},
				error: function () {
					layer.close(load);
					$(".memberTip span").text("提示:网络错误")
				}
			})
		})
	</script>
</body>

</html>