操作名POST 操作名GET
===============

搁置问题
===============
 + 密码强度
 + 领取救济金
 + 代金卷
 + 发送邮件
 + 兑换

 
TOKEN加密格式
===============
 + 帐号+密码（MD5加密后的）+登陆时间+登录IP
 
 数据库表名
===============
  + user 用户表
  + money 用户资产列表
  + superior_code 用户邀请码对照表 （未在注册时生成）
  + user_login_log 用户登录LOG表
  + bulletin 公告列表表
  + shop 商城
  + wallet 充值兑换列表
  
返回码
===============
 + 500 服务器错误
 + 404 缺少参数
 + 100 触发乐观锁
 + 0 失败
 + 1 成功
 + 2 未登录
 + 3 登录失效重新登录

 前台
 + -1 邀请码错误 Login/registerPost  注册 /register    POST
 + -2 帐号已存在 Login/registerPost  注册 /register    POST
 + -3 帐号或密码错误 Login/loginPost  登录 /login    POST
 + -4 重复密码错误 User/change 修改密码 /change   PUT  //在路径后加?type=password
 + -5 密码长度为6-20 User/change 修改密码 /change    PUT //在路径后加?type=password
 + -6 原密码错误 User/change 修改密码 /change    PUT //在路径后加?type=password
 + -7 新密码不能与旧密码相同 User/change 修改密码 /change    PUT //在路径后加?type=password
 + -8 救济金领取达到上限 /Money/helpMoney POST
 + -9 救济金领取条件不满足 /Money/helpMoney POST
 
 + -10 银行卡号已存在 
 
  后台
 + shopNameError 商品名称已存在
  


路由
===============
+ /login GET 登录页面
+ /register GET 注册页面
+ /change PUT 修改用户信息 需要在路径后加[type=password||type=nickName] 
+ /bulletin/list GET 公告列表页面
+ /bulletin/detail/:id GET 公告列表页面
+ /wallet 充值兑换页面

+ 
+ /login POST 登录 参数 account邮箱 password密码
+ /register POST 注册 参数 superior 邀请码  account邮箱 password密码
+ /walletList GET 首页充值兑换列表
+ /bulletin/listGet GET 公告列表
+ /bulletin/detailGet/:id GET 公告详情

+ /shop/listGet GET 商城列表 参数 [type=1||type=0] 0虚拟形象，1道具
+ /shop/detailGet/:id GET 商城详情

+ /wallet/listGet GET 充值兑换列表接口 [type=1||type=0] 0充值/1兑换 [status=0||status=1||status=2||status=3] 0申请 1成功  2失败 3取消