<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/10/15
 * Time: 19:40
 */

namespace app\index\controller;


use think\Db;

class Money extends Base
{
    //领取救济金 ['搁置']
    public function helpMoney(){
        $where['u_id'] = session('user.id');
        $where['time'] = ['>',date('Y-m-d',time()).' 00:00:00'];
        $count = Db::table('help_money')->where($where)->count();
        if($count>=config('helpMoneyNum')){
            $data['code'] = -8;
        }else{
            $coin = Db::table('money')->where('u_id',session('user.id'))->value('coin');
            if($coin<config('helpMinMoney')){
                $addData['u_id'] = session('user.id');
                $addData['money'] = config('helpMoney');
                $addData['ip'] = $_SERVER["REMOTE_ADDR"];
                $addData['time'] = date('Y-m-d H:i:s',time());
                $addStatus = Db::table('help_money')->insert($addData);
                if($addStatus!==false){
                    $data['code'] = 1;
                }else{
                    $data['code'] = 0;
                }
            }else{
                $data['code'] = -9;
            }
        }
        echo json_encode($data);
    }
}