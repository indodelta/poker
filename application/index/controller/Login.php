<?php
/**
 * 登录
 */
namespace app\index\controller;

use think\Cache;
use think\Db;
class Login
{
    public function login()
    {
        return view();
    }
    //登录
    public function loginPost(){
        header("Access-Control-Allow-Origin: *");
        $user = input("post.");









        $user['account'] = 1;
        $user['password'] = 1;









        $user['password'] = md5($user['password']);
        $userDate = Db::table("user")->field('id,account,password,money_password,login_token,login_ip,login_time,login_number,login_status')->where($user)->find();
        if($userDate){
            $update['login_ip'] = $_SERVER["REMOTE_ADDR"];
            $update['login_time'] = date("Y-m-d H:i:s",time());
            $update['login_number'] = $userDate['login_number']+1;
            if($userDate['login_status'] != 2){
                $update['login_status'] = 1;
            }
            $redis = Cache::getHandler();
            if($redis->exist("game:token:".$userDate['account'])===1){
                //如果有Token在有效期 删除
                $redis->del("game:token:".$userDate['account']);
            }
            $updateSql = Db::table("user")->where('id',$userDate['id'])->update($update);
            if($updateSql){
                unset($userDate['login_status']);
                unset($userDate['login_number']);
                session('user',$userDate);
                //session过期时间3600
                session('user.time',time()+3600);
                $token['account'] = $userDate['account'];
                $token['password'] = $userDate['password'];
                $token['login_time'] = $update['login_time'];
                $token['login_ip'] = $update['login_ip'];
                session('userToken',$token);
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
        Db::table('user_login_log')->insert($log);
        echo json_encode($return);
    }
    //注册页面
    public function register(){
        return view();
    }
    //服务条款
    public function terms(){
        return view();
    }
    //注册
    public function registerPost(){
        Db::startTrans();
        $return['code'] = 1;
        $userDate = input("post.");
        if($userDate['superior']!=""){
            //查询邀请码是否存在
            $code = Db::table("superior_code")->where("superior",$userDate['superior'])->value("u_id");
            if($code) {
                $userDate['superior'] = $code;
            }else{
                $return['code'] = -1;
            }
        }else{
            //没有邀请码 删除键
            unset($userDate['superior']);
        }
        if($return['code'] ==1 ){
            //判断账号是否存在
            $account = Db::table('user')->where('account',$userDate['account'])->count();
            if($account){
                $return['code'] = -2;
            }else{
                $userDate['password'] = md5($userDate['password']);
                $userDate['register_time'] = date("Y-m-d H:i:s",time());
                $userDate['register_ip'] = $_SERVER["REMOTE_ADDR"];
                try{
                    $user = Db::table("user")->insertGetId($userDate);
                    Db::table('money')->insert(['u_id'=>$user]);
                    Db::commit();
                } catch (\Exception $e) {
                    // 回滚事务
                    $user = false;
                     Db::rollback();
                }
                if($user){
                    $return['code'] = 1;
                }else{
                    $return['code'] = 0;
                }
            }
        }
        echo json_encode($return);
    }
    public function loginOut(){
        session('user',null);
        session('userToken',null);
        if(!session('user')){
            $return['code'] = 1;
        }else{
            $return['code'] = 0;
        }
        echo json_encode($return);
    }
}
