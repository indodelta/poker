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

class Bulletin
{
    /**
     * lists 公告首页
     */
    public function indexView()
    {
        return view();
    }

    /**
     * listView 公告列表页面
     */
    public function listView()
    {
        return view();
    }

    /**
     * lists 公告列表
     */
    public function lists(){
        $where['status'] = 1;
        $list = Db::table('bulletin')->field('id,type,title,detail,time')->where($where)->order('id desc')->select();
        if($list){
            $data['list'] = $list;
            $data['code'] = 1;
        }else{
            $data['code'] = 0;
        }
        echo json_encode($data);
    }

    /**
     * detailView 公告详情页面
     */
    public function detailView()
    {
        $where['status'] = 1;
        $where['id'] = input('param.id');;
        $detail = Db::table('bulletin')->field('id,type,title,detail,time')->where($where)->find();
        if($detail!==false){
            $data['detail'] = $detail;
            $data['code'] = 1;
        }else{
            $data['code'] = 0;
        }
        return view();
    }

    /**
     * :id 公告详情
     */
    public function detail(){
        $where['status'] = 1;
        $where['id'] = input('param.id');;
        $detail = Db::table('bulletin')->field('id,type,title,detail,time')->where($where)->find();
        if($detail!==false){
            $data['detail'] = $detail;
            $data['code'] = 1;
        }else{
            $data['code'] = 0;
        }
        echo json_encode($data);
    }
}