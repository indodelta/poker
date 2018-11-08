<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/10/28
 * Time: 12:51
 */

namespace app\admin\controller;


use think\Controller;
use think\Db;

class Login extends Controller
{
    public function loginView(){
        return view('loginView');
    }
    public function loginApi(){
        $user = input("post.");
        $user['password'] = md5($user['password']);
        $userDate = Db::table("admin")->where($user)->find();
        if($userDate){
            $update['login_ip'] = $_SERVER["REMOTE_ADDR"];
            $update['login_time'] = date("Y-m-d H:i:s",time());
            $update['login_num'] = $userDate['login_num']+1;
            $updateSql = Db::table("admin")->where('id',$userDate['id'])->update($update);
            if($updateSql){
                unset($userDate['login_number']);
                session('admin',$userDate);
                //session过期时间3600
                session('admin.time',time()+3600);
                $return['code'] = 1;
            }else{
                $return['code'] = 0;
            }
        }else{
            $return['code'] = -3;
        }
        $log['account'] = input("post.account");
        $log['password'] = input("post.password");
        $log['status'] = input("post.status");
        $log['ip'] = $_SERVER["REMOTE_ADDR"];
        $log['time'] = date("Y-m-d H:i:s",time());
        switch ($return['code']){
            case 1:
                //登录成功
                $log['password'] = '-';
                $log['status'] = 1;
                $log['note'] = '登陆成功';
                break;
            case 0:
                //登录失败
                $log['status'] = 0;
                $log['note'] = '登录失败';
                break;
            case -3:
                //帐号密码错误
                $log['status'] = 3;
                $log['note'] = '帐号密码错误';
                break;
        }
        //插入日志
        Db::table('admin_login_log')->insert($log);
        echo json_encode($return);
    }
    public function loginOut(){
        session('admin',null);
        if(!session('admin')){
            $return['code'] = 1;
        }else{
            $return['code'] = 0;
        }
        echo json_encode($return);
    }
}