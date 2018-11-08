<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/10/25
 * Time: 18:37
 */

namespace app\admin\controller;


use think\Controller;

class Base extends Controller
{
    public function _initialize(){
        if(!session('admin.id')){
            $this->error('请先登录！',url('/Admin/login'));
        }else if(session('admin.time')<time()){
            session('admin',null);
            $this->error('认证过期！','/Admin/login');
        }
        session('user.time',time()+3600);
    }
}