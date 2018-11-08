<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/10/15
 * Time: 10:23
 * 充值兑换
 */

namespace app\index\controller;

use think\Db;
class Wallet extends Base
{
    /**
     * 充值兑换页面
     * @return \think\response\View
     */
    public function indexView()
    {
        return view('indexView');
    }

    /**
     * 代金券充值
     * @return \think\response\View
     */
    public function cashCoupon()
    {
        return view('cashCoupon');
    }



    /**
     * 充值兑换接口
     */
    public function listGet(){
        //type 0充值/1兑换
        //status 0申请 1成功  2失败 3取消
        $type = input('get.type');
        $status = input('get.status');
        $where['u_id'] = session('user.id');
        $type?$where['type'] = $type:'';
        $status?$where['status'] = $status:'';
        $list = Db::table('wallet')->field('id,type,money,status,bank_name,bank_account,bank_number')->where($where)->select();
        if($list!==false){
            $data['list'] = $list;
            $data['code'] = 1;
        }else{
            $data['code'] = 0;
        }
        echo json_encode($data);
    }
    /**
     * 充值页面
     */
    public function rechargeView(){
        $where['type'] = 1;
        $where['status'] = 1;
        $bank = Db::table('bank')->field('bank_name,bank_account,bank_number')->where($where)->find();
        $this->assign('bank',$bank);
        foreach ($bank as $k=>$v){
            $lockBank[$k] = lock($v);
        }
        $this->assign('lockBank',$lockBank);
        return view("rechargeView");
    }
    /**
     * 充值
     */
    public function recharge(){
        Db::startTrans();
        try{
            $addData['u_id'] = session('user.id');
            $addData['type'] = 0;
            $addData['money'] = input('post.money');
            $addData['time_0'] = date('Y-m-d H:i:s',time());
            $addData['ip_0'] = $_SERVER["REMOTE_ADDR"];
            $addData['bank_name'] = input('post.bank_name');
            $addData['bank_account'] = input('post.bank_account');
            $addData['bank_number'] = input('post.bank_number');
            $walletId = Db::table('wallet')->insertGetId($addData);
            $log['u_id'] = session('user.id');
            $log['money'] = input('post.money');
            $log['bank_name'] = input('post.lock_name');
            $log['bank_account'] = input('post.lock_account');
            $log['bank_number'] = input('post.lock_number');
            $log['ip'] = $_SERVER["REMOTE_ADDR"];
            $log['time'] = date('Y-m-d H:i:s',time());
            $log['wallet_id'] = $walletId;
            Db::table('wallet_log')->insert($log);
            if($walletId!==false){
                $data['code'] = 1;
            }else{
                $data['code'] = 0;
            }
            // 提交事务
            Db::commit();
        } catch (\Exception $e) {
            $data['code'] = 500;
            // 回滚事务
            Db::rollback();
        }
        echo json_encode($data);
    }

    /**
     * 兑换
     */
    public function exchange(){

        $addData['u_id'] = session('user.id');
        $addData['type'] = 1;
        $addData['money'] = input('post.money');
        $addData['time_0'] = date('Y-m-d H:i:s',time());
        $addData['ip_0'] = $_SERVER["REMOTE_ADDR"];
        $addData['bank_name'] = input('post.bank_name');
        $addData['bank_account'] = input('post.bank_account');
        $addData['bank_number'] = input('post.bank_number');
        $data = Db::table('wallet')->insert($addData);

    }
    public function loading(){
        return view();
    }
    public function logList(){
        return view('logList');
    }
}