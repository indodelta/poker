<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/10/15
 * Time: 10:23
 * 用户管理
 */

namespace app\index\controller;


use think\Cache;
use think\Db;

class User extends Base
{
    //用户页面
    public function index()
    {
        $data['bulletin'] = Db::table('bulletin')->field('id,type,title,detail,time')->where('status',1)->limit(6)->order('id desc')->select();
        return view('index',$data);
    }
    //我的金库
    public function vault()
    {
        return view("vault");
    }


    //朋友列表
    public function friend()
    {
        return view("friend");
    }

    //修改密码
    public function changePassword()
    {
        $type = input('param.type');
        if((session('user.money_password') === null) and ($type == 'exchange')){
            $first = 1;
        }else{
            $first = 0;
        }
        return view("changePassword",['type'=>$type,'first'=>$first]);
    }

    //我的道具
    public function myProp()
    {
        return view("myProp");
    }
    //我的虚拟形象
    public function userImage()
    {
        return view("userImage");
    }
    /**
     * 修改用户信息
     */
    public function change(){
        $type = input('get.type');
        switch ($type){
            case 'login':
                $old = input('put.old_password');
                $newPwd = input('put.new_password');
                $rPwd = input('put.r_password');
                if($newPwd!=$rPwd){
                    //重复密码错误
                    $data['code'] = -4;
                }else if(strlen($newPwd)<6||strlen($newPwd)>20){
                    //密码长度错误
                    $data['code'] = -5;
                }else{
                    $where['id'] = session('user.id');
                    $where['password'] = md5($old);
                    $select = Db::table('user')->where($where)->count();
                    if($select){
                        $updata = Db::table('user')->where('id',session('user.id'))->setField('password',md5($newPwd));
                        if($updata!==false){
                            $data['code'] = 1;
                        }else if($updata===0){
                            $data['code'] = -7;
                        }else{
                            $data['code'] = 0;
                        }
                    }else{
                        //密码错误插入错误表
                        $errorData['u_id'] = session('user.id');
                        $errorData['type'] = "login";
                        $errorData['ip'] = $_SERVER["REMOTE_ADDR"];
                        $errorData['time'] = date('Y-m-d H:i:s',time());
                        $errorData['status'] = 0;
                        $errorData['new'] = $newPwd;
                        $errorData['old'] = $old;
                        Db::table('password_change')->insert($errorData);
                        $data['code'] = -6;
                    }
                }
                break;
            case 'exchange':
                $old = input('put.old_password');
                $newPwd = input('put.new_password');
                $rPwd = input('put.r_password');
                if($newPwd!=$rPwd){
                    //重复密码错误
                    $data['code'] = -4;
                }else if(strlen($newPwd)<6||strlen($newPwd)>20){
                    //密码长度错误
                    $data['code'] = -5;
                }else{
                    $where['id'] = session('user.id');
                    $select = Db::table('user')->where($where)->value("money_password");
                    if($select==""||$select==null||$select==md5($old)){
                        $updata = Db::table('user')->where('id',session('user.id'))->setField('money_password',md5($newPwd));
                        if($updata!==false){
                            session('user.money_password',md5($newPwd));
                            $data['code'] = 1;
                        }else if($updata===0){
                            $data['code'] = -7;
                        }else{
                            $data['code'] = 0;
                        }
                    }else{
                        //密码错误插入错误表
                        $errorData['u_id'] = session('user.id');
                        $errorData['type'] = "exchange";
                        $errorData['ip'] = $_SERVER["REMOTE_ADDR"];
                        $errorData['time'] = date('Y-m-d H:i:s',time());
                        $errorData['status'] = 0;
                        $errorData['new'] = $newPwd;
                        $errorData['old'] = $old;
                        Db::table('password_change')->insert($errorData);
                        $data['code'] = -6;
                    }
                }
                break;
            default:
                $data['code'] = 404;
                break;
        }
        echo json_encode($data);
    }
    public function gameIndex(){
        return view("gameIndex");
    }
    //用户银行信息
    public function bankList()
    {
        $where['u_id'] = session('user.id');
        $where['status'] = 1;
        $list = Db::table('user_bank')->where($where)->select();
        return view("bankList",['data'=>$list]);
    }
    //用户银行信息
    public function bankAdd()
    {
        return view("bankAdd");
    }
    //用户银行信息
    public function bankAddApi()
    {
        $data = input('post.');
        $where['bank_number'] = $data['bank_number'];
        $where['u_id'] = session('user.id');
        $count = Db::table('user_bank')->where($where)->count();
        if($count>0){
            $return['code'] = -10;
        }else{
            $data['add_ip'] = $_SERVER["REMOTE_ADDR"];
            $data['add_time'] = date('Y-m-d H:i:s',time());
            $data['u_id'] = session('user.id');
            $updata = Db::table('user_bank')->insert($data);
            if($updata){
                $return['code'] = 1;
            }else{
                $return['code'] = 0;
            }
        }
        echo json_encode($return);
    }
    public function bankChange(){
        $id = input('param.id');
        $update = input('put.');
        $update['ip'] = $_SERVER["REMOTE_ADDR"];
        $update['time'] = date('Y-m-d H:i:s',time());
        $up = Db::table('user_bank')->where('id',$id)->update($update);
        if($up!==false){
            $data['code'] = 1;
        }else{
            $data['code'] = 0;
        }
        echo json_encode($data);
    }
}