<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/10/15
 * Time: 10:24
 * 公告
 */

namespace app\index\controller;


use think\Controller;
use think\Db;

class Bulletin extends Controller
{
    public function _initialize()
    {
        $this->assign('path','');
    }
        /**
     * lists 公告首页
     * @return \think\response\View
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
        $data['bulletin'] = Db::table('bulletin')->field('id,type,title,detail,time')->where('status',1)->order('id desc')->select();
        return view('listView',$data);
    }

    /**
     * lists 公告列表
     */
    public function listGet(){
        $page = input('get.page');
        $limit = input('get.limit');
        $page = $limit * ($page-1);

        $where['status'] = 1;
        $list = Db::table('bulletin')
            ->field('id,type,title,time')
            ->where($where)
            ->limit($page,$limit)
            ->order('id desc')
            ->select();
        $data['count'] = Db::table('bulletin')
            ->where($where)
            ->count();
        if($list){
            $data['data'] = $list;
            $data['code'] = 1;
        }else{
            $data['code'] = 0;
        }
        echo json_encode($data);
    }

    /**
     * detailView 公告详情页面
     *
     */
    public function detailView()
    {
        $where['status'] = 1;
        $where['id'] = input('param.id');;
        $detail = Db::table('bulletin')->field('id,type,title,detail,time')->where($where)->find();
//        if(!$detail){
//            $this->error('参数错误');
//        }
        return view('detail',['detail'=>$detail]);
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