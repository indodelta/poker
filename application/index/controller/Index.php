<?php
namespace app\index\controller;
use think\Cache;
use think\Db;
use think\Loader;
class Index
{
    public function _initialize(){
        if(session('user.time')<time()){
            session('user',null);
        }
    }
    public function getIp(){
        header("Access-Control-Allow-Origin: *");
        $redis = Cache::getHandler();
        echo json_encode($redis->sMembers("ip"));
    }
    public function index()
    {
        $data['bulletin'] = Db::table('bulletin')->field('id,type,title,detail,time')->where('status',1)->limit(6)->order('id desc')->select();
        $data['wallet'] = Db::table('wallet')->field('type,money,bank_account,time_1 as time')->where('status',1)->order('time desc')->limit(20)->select();
        $data['shop'][0] = Db::table('shop')->where('type',0)->limit(6)->order('id desc')->select();
        $data['shop'][1] = Db::table('shop')->where('type',1)->limit(4)->order('id desc')->select();
        return view('index',$data);
    }
    public function test()
    {
//        $res = Db::table('bulletin')->field('id,type,title,detail,time')->where('status',1)->order('id desc')->select();
//        $redis = Cache::getHandler();
//        $redis->set('bulletin',$res);;
//        print_r($redis->get('bulletin'));
        return view();
    }
    /**
     * 首页充值兑换列表
     */
    public function walletList(){
        //0申请 1成功  2失败 3取消
        $where['status'] = 1;
        $list = Db::table('wallet')->field('type,money,bank_account,time_1 as time')->where($where)->order('time desc')->limit(20)->select();
        if($list!==false){
            $data['list'] = $list;
            $data['code'] = 1;
        }else{
            $data['code'] = 0;
        }
        echo json_encode($data);
    }
    public function tokenGenerate(){
        header("Access-Control-Allow-Origin: *");
        $account = input("get.account");
        $redis = Cache::getHandler();

        if($account){
            $data = Db::table("user")->where('account',$account)->find();
            $lock = $data['account'];
            $lock = $lock."_".$data['password'];
            $lock = $lock."_".$data['login_time'];
            $lock = $lock."_".$data['login_ip'];
        }else{
            $lock = session('userToken.account');
            $lock = $lock."_".session('userToken.password');
            $lock = $lock."_".session('userToken.login_time');
            $lock = $lock."_".session('userToken.login_ip');
        }
        $loclkArr = [];
        $time = time();
        foreach ($redis->lRange("game:userTokenList:".session("user.id")) as $k=>$v ){
            $redis->del("game:token:".$v);
        };
        $redis->del("game:userTokenList:".session("user.id"));
        foreach ($redis->sMembers("ip") as $k=>$v){
            $loclkArr[$k]['token'] = token($lock,$v,$time);
            $loclkArr[$k]['ip'] = $v;
        }
        echo json_encode($loclkArr);
    }
}
