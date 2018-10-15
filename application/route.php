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
Route::group(['method'=>'get'],function(){
    //首页页面
    Route::rule('','Index/index');
    //登录页面
    Route::rule('login','Login/login');
    //注册页面
    Route::rule('register','Login/register');
    Route::group('bulletin',[
        //公告列表页面
        'list' => 'Bulletin/listView',
        //公告列表接口
        'listGet' => 'Bulletin/lists',
        //公告详情页面
        'detail/:id' => 'Bulletin/detailView',
        //公告详情接口
        'detailGet/:id' => 'Bulletin/detail',
        //公告首页页面
        '' => 'Bulletin/index',
    ]);
    Route::group('shop',[
        //商城列表页面
        'list' => 'Shop/listsView',
        //商城列表接口
        'listGet' => 'Shop/lists',
        //商城详情页面
        'detail/:id' => 'Shop/detailView',
        //商城详情接口
        'detailGet/:id' => 'Shop/detail',
        //商城首页页面
        '' => 'Shop/index',
    ]);
});
Route::group(['method'=>'post'],function(){
    //登录POST
    Route::rule('login','Login/loginPost');
    //注册POST
    Route::rule('register','Login/registerPost');
});
Route::group(['method'=>'put'],function(){

});
//MISS路由
Route::miss('public/miss');