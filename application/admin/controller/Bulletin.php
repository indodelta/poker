<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/10/28
 * Time: 13:19
 */

namespace app\admin\controller;


use think\Db;

class Bulletin extends Base
{
    public function listView(){
        return view('listView');
    }
    public function listApi(){
        $page = input('get.page');
        $limit = input('get.limit');
        $data = input('get.');
        unset($data['page']);
        unset($data['limit']);
        unset($data['/admin/bulletin/listApi_html']);
        $page = $limit * ($page-1);
        $where['status'] = 1;
        foreach ($data as $k=>$v){
            if($v == ''||$v=='undefined'){
                continue;
            }else if($k=='title'){
                $where[$k] = ['like',"%$v%"];
            }else{
                $where[$k] = $v;
            }
        }
        $data['data'] = Db::table('bulletin')
            ->field('id,type,title,time')
            ->where($where)
            ->limit($page,$limit)
            ->order('time desc')
            ->select();
        $data['count'] = Db::table('bulletin')
            ->where($where)
            ->count();
        if($data['data']){
            $data['code'] = 1;
        }else{
            $data['code'] = 0;
        }
        echo json_encode($data);

    }
    public function addView(){
        return view('addView');
    }
    public function addApi(){
        $data = input('post.');
        $data['a_id'] = session('admin.id');
        $data['ip'] = $_SERVER["REMOTE_ADDR"];
        $data['time'] = date("Y-m-d H:i:s",time());
        $sql = Db::table('bulletin')->insert($data);
        if($sql){
            $return['code']=1;
        }else{
            $return['code']=0;
        }
        echo json_encode($return);
    }
    public function delete(){
        $id = input('delete.id');
        $delete = Db::table('bulletin')->whereIn('id',$id)->setField('status',0);
        if($delete){
            $return['code']=1;
        }else{
            $return['code']=0;
        }
        echo json_encode($return);
    }
}