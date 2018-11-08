<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/10/19
 * Time: 11:09
 */

namespace app\index\controller;


use think\Db;

class Email extends Base
{
    /**
     * 邮件首页
     * @return \think\response\View
     *
     */
    public function indexView(){
        return view('index');
    }

    /**
     * 邮件详情页面
     */
    public function detailView(){
        $id = input('param.id');
        $where['e.id'] = $id;
        $where['u_id'] = session('user.id');
        $email = Db::table('email')
            ->alias('e')
            ->where($where)
            ->join('user a','a.id=e.from_id','left')
            ->field('e.id,nickname,content,title,e.status,e.time')
            ->find();
        if(!$email){
            $this->error('参数错误');
        }
        if($email['status']==0){
            $where['id'] = $id;
            unset($where['e.id']);
            Db::table('email')->where($where)->setField('status',1);
        }
        return view('detail',['email'=>$email]);
    }
    /**
     * 邮件修改为已读
     */
    public function statusChange(){
        $id = input('param.id');
        Db::table('email')->where('id',$id)->setField('status',1);
    }
    /**
     * 邮件列表
     */
    public function emailListData(){
        $page = input('get.page');
        $limit = input('get.limit');
        $page = $limit * ($page-1);
        $where['u_id'] = session('user.id');
        $where['status'] = ['neq',2];
        $data = Db::table('email')
            ->alias('e')
            ->where($where)
            ->join('user a','a.id=e.from_id','left')
            ->field('e.id,nickname,title,e.status,e.time')
            ->order('time desc')
            ->limit($page,$limit)
            ->select();
        $return['count'] = Db::table('email')
            ->where($where)
            ->count();
        if($data!==false){
            $return['code'] = 1;
            $return['data'] = $data;
        }else{
            $return['code'] = 0;
        }
        echo json_encode($return);
    }
    /**
     * 删除邮件
     */
    public function emailDelete(){
        $emailId = input('delete.id');
        $detele = Db::table('email')->where('u_id',session('user.id'))->whereIn('id',$emailId)->setField('status',2);
        if($detele!==false){
            $return['code'] = 1;
        }else{
            $return['code'] = 0;
        }
        echo json_encode($return);
    }
    public function emailDeleteRead(){
        $where['u_id'] = session('user.id');
        $where['status'] = 1;
        $detele = Db::table('email')->where($where)->setField('status',2);
        if($detele!==false){
            $return['code'] = 1;
        }else{
            $return['code'] = 0;
        }
        echo json_encode($return);
    }
    /**
     * 全部标记为已读
     */
    public function emailRead(){
        $where['u_id'] = session('user.id');
        $where['status'] = 0;
        $detele = Db::table('email')->where($where)->setField('status',1);
        if($detele!==false){
            $return['code'] = 1;
        }else{
            $return['code'] = 0;
        }
        echo json_encode($return);
    }
}