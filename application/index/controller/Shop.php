<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/10/15
 * Time: 10:24
 * 公告
 */

namespace app\index\controller;


use think\Db;

class Shop
{
    public function index()
    {
        return view();
    }

    /**
     * lists 商品列表
     */
    public function lists(){
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
     * :id 商品详情
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
}