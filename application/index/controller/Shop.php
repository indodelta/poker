<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/10/15
 * Time: 10:24
 * 商城
 */

namespace app\index\controller;


use think\Db;

class Shop extends Base
{
    /**
     * 商品首页
     * @return \think\response\View
     */
    public function indexView()
    {
        return view('index');
    }

    /**
     * 商品列表页面
     */
    public function listView()
    {
        $where['type'] = input('param.type');
        $where['status'] = 1;
        $data = Db::table('shop')->where($where)->select();
        return view('listView',['data'=>$data]);
    }
    /**
     * lists 商品列表
     * data [type]
     */
    public function listGet(){
        $where['status'] = 1;
        if(input('get.type')!=""){
            $where['type'] = input('get.type');
        }
        $list = Db::table('shop')->field('id,name,coin,gold,note,icon')->where($where)->select();
        if($list!==false){
            $data['list'] = $list;
            $data['code'] = 1;
        }else{
            $data['code'] = 0;
        }
        echo json_encode($data);
    }

    /**
     * 商品详情页面
     * :id
     * @return \think\response\View
     */
    public function detailView()
    {
        return view();
    }
    /**
     * 商品详情
     * :id
     */
    public function detail(){
        $where['status'] = 1;
        $where['id'] = input('param.id');;
        $detail = Db::table('shop')->field('id,name,coin,gold,note,icon')->where($where)->find();
        if($detail!==false){
            $data['detail'] = $detail;
            $data['code'] = 1;
        }else{
            $data['code'] = 0;
        }
        echo json_encode($data);
    }
    /**
     * 商城消费记录
     *
     */
    public function logList(){
        $where="u_id=".session('user.id')." and (change_type=1 or change_type=2)";
        $page = input('get.page');
        $limit = input('get.limit');
        $page = $limit * ($page-1);
        $detail = Db::table('money_log')
            ->field('note,change_money,change_type,pay_type,time')
            ->where($where)
            ->order('time desc')
            ->limit($page,$limit)
            ->select();
        $data['count'] = Db::table('money_log')
            ->where($where)
            ->count();
        if($detail!==false){
            $data['data'] = $detail;
            $data['code'] = 1;
        }else{
            $data['code'] = 0;
        }
        echo json_encode($data);
    }
}