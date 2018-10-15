操作名POST 操作名GET
===============

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
 + 0 失败
 + 1 成功
 + -1 邀请码错误 Login/registerPost  注册 /register
 + -2 帐号已存在 Login/registerPost  注册 /register
 + -3 帐号或密码错误 Login/loginPost  登录 /login


路由
===============
+ /login GET 页面
+ /login POST 登录
+ /register GET 注册页面
+ /register POST 注册
+ /bulletin/listGet GET 公告列表
+ /bulletin/detailGet/:id GET 公告详情
+ /shop/list GET 商城列表 参数 [type=1||type=0] 0虚拟形象，1道具
+ /shop/:id GET 商城详情
