<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
Route::get('getIp','getIp');
Route::group('',function(){
    Route::get('test','Index/test');
    //首页页面
    Route::get('','Index/index');
    //登录页面
    Route::get('login','Login/login');
    //注册页面
    Route::get('register','Login/register');
    //服务条款页面
    Route::get('terms','Login/terms');
    //首页充值兑换接口
    Route::get('walletList','Index/walletList');
    //登录POST
    Route::post('login','Login/loginPost');
    //注册POST
    Route::post('register','Login/registerPost');
    //充值接口
    Route::post('recharge','Wallet/recharge');
    //领取救济金
    Route::post('helpMoney','Money/helpMoney');
    //退出
    Route::delete('login','Login/loginOut');
});
Route::group('user',function() {
    //用户弹窗页面
    Route::get('index', 'User/index');
    //用户银行页面
    Route::get('bankList', 'User/bankList');
    //用户银行添加页面
    Route::get('bankAdd', 'User/bankAdd');
    //用户仪表盘页面
    Route::get('gameIndex', 'User/gameIndex');
    //朋友列表
    Route::get('friend', 'User/friend');
    //我的道具
    Route::get('myProp', 'User/myProp');
    //我的虚拟形象
    Route::get('userImage', 'User/userImage');
    //修改密码
    Route::get('changePassword/:type', 'User/changePassword');
    //我的金库
    Route::get('vault', 'User/vault');
    //修改put用户信息（密码，昵称，头像）
    Route::put('change','User/change');
    //银行卡添加API
    Route::post('bankAddApi','User/bankAddApi');
    //获取游戏TOKEN
    Route::get('tokenGenerate','Index/tokenGenerate');
});

Route::group('service',function() {
    //客服list
    Route::get('list', 'Service/serviceList');
    //客服视图
    Route::get('view', 'Service/serviceView');
    //客服编辑页
    Route::get('write', 'Service/serviceWrite');
});

Route::group('exchange',function() {
    //兑换视图页
    Route::get('indexView', 'Exchange/indexView');
    //兑换loading页
    Route::get('loading', 'Exchange/loading');
});

Route::group('email',function() {
    //站内信页面
    Route::get('index', 'Email/indexView');
    //站内信详情页
    Route::get('detail/:id', 'Email/detailView');
    //站内信详情页
    Route::get('list', 'Email/emailListData');
    //站内信删除

    Route::delete('emailRead', 'Email/emailDeleteRead');
    //站内信修改为已读
    Route::put('', 'Email/emailRead');
    //站内信删除
    Route::delete('', 'Email/emailDelete');
});
Route::group('bulletin',function(){
    //公告列表页面
    Route::get('list','Bulletin/listView');
    //公告列表接口
    Route::get('listGet','Bulletin/listGet');
    //公告详情页面
    Route::get('detail/:id','Bulletin/detailView');
    //公告详情接口
    Route::get('detailGet/:id','Bulletin/detail');
    //公告首页页面
    Route::get('','Bulletin/indexView');
});

Route::group('shop',function (){
    //商城列表页面
    Route::get('list/:type','Shop/listView');
    //商城消费列表
    Route::get('logList','Shop/logList');
    //商城列表接口
    Route::get('listGet','Shop/listGet');
    //商城详情页面
    Route::get('detail/:id','Shop/detailView');
    //商城详情接口
    Route::get('detailGet/:id','Shop/detail');
    //商城首页页面
    Route::get('index','Shop/indexView');
});
Route::group('wallet',function() {
    //资金流水页面
    Route::get('logList', 'Wallet/logList');
    //充值页面
    Route::get('recharge', 'Wallet/rechargeView');
    //代金券充值
    Route::get('cashCoupon', 'Wallet/cashCoupon');
    //充值兑换列表接口
    Route::get('listGet', 'Wallet/listGet');
    //等待页面
    Route::get('loading', 'Wallet/loading');
    //兑换充值首页页面
    Route::get('', 'Wallet/indexView');
});
Route::get('error/404', 'Error/error');
Route::get('error/login', 'Error/login');

//后台
Route::group('admin',function (){
    Route::get('login', 'Admin/Login/loginView');
    Route::post('login', 'Admin/Login/loginApi');
    Route::delete('loginOut', 'Admin/Login/loginOut');
    Route::get('index', 'Admin/Index/index');
    Route::group('shop',function (){
        //商品列表
        Route::get('listView', 'Admin/Shop/listView');
        //商品列表API
        Route::get('listApi', 'Admin/Shop/listApi');
        //商品添加
        Route::get('add', 'Admin/Shop/addView');
        //商品添加API
        Route::post('addUpload', 'Admin/Shop/addUpload');
    });
    Route::group('bulletin',function (){
        //公告列表
        Route::get('listView', 'Admin/bulletin/listView');
        //公告列表API
        Route::get('listApi', 'Admin/bulletin/listApi');
        //公告添加
        Route::get('add', 'Admin/bulletin/addView');
        //公告添加Api
        Route::post('add', 'Admin/bulletin/addApi');
        //公告删除
        Route::delete('delete', 'Admin/bulletin/delete');
    });
});
//MISS路由
//Route::miss('public/miss');