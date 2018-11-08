<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/10/15
 * Time: 22:01
 */

namespace app\index\controller;


use think\Controller;
use think\Cache;

class Base extends Controller
{
    public function _initialize(){
        if(!session('user.id')){
            $this->error('请先登录！','/login');
        }else if(session('user.time')<time()){
            session('user',null);
            session('userToken',null);
            $this->error('认证过期！','/login');
        }
        session('user.time',time()+3600);
        $redis = Cache::getHandler();
        $redis->handler()->expire('game:token:'.session("user.token"),3600);
        $path = request()->pathinfo();
        $this->assign('path',$path);
    }
}