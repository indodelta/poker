<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/10/25
 * Time: 18:37
 */

namespace app\admin\controller;


use think\Db;

class Shop extends Base
{
    /**
     * 商品列表页
     * @return \think\response\View
     */
    public function listView(){
        return view('listView');
    }
    /**
     * 商品API
     */
    public function listApi(){

        $page = input('get.page');
        $limit = input('get.limit');
        $page = $limit * ($page-1);
        $where['status'] = 1;
        $data = input('get.');
        unset($data['page']);
        unset($data['limit']);
        unset($data['/admin/shop/listapi_html']);
        foreach ($data as $k=>$v){
            if($v == ''||$v=='undefined'){
                continue;
            }else if($k=='name'){
                $where[$k] = ['like',"%$v%"];
            }else{
                $where[$k] = $v;
            }
        }
        $data = Db::table('shop')
            ->where($where)
            ->order('time desc')
            ->limit($page,$limit)
            ->select();
        $return['count'] = Db::table('shop')
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
     * 商品添加
     * @return \think\response\View
     */
    public function addView(){
        return view('addView');
    }

    /**
     * 添加商品接口
     */
    public function addUpload(){
        $data = input('post.');
        $shopName = Db::table('shop')->where('name',$data['name'])->count();
        if($shopName>=1){
            $return['code'] = 'shopNameError';
            echo json_encode($return);
        }else{
            $file = request()->file('file');
            if($file){
                $info = $file->rule('uniqid')->move(ROOT_PATH . 'public' . DS . 'shop');

                if(!$info){
                    // 上传失败获取错误信息
                    // $file->getError();
                    $return['code'] = 'uploadeError';
                }else{
                    // 输出 42a79759f284b767dfcb2a0197904287.jpg
                    $data['ip'] = $_SERVER["REMOTE_ADDR"];
                    $data['img'] = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/shop/'.$info->getFilename();
                    $data['time'] = date('Y-m-d H:i:s',time());
                    $add = Db::table('shop')->insertGetId($data);
                    if($add){
                        $return['code'] = 1;
                        $return['id'] = $add;
                    }else{
                        $return['code'] = 0;
                        //无法删除 原因：文件未生成
//                        unlink( 'shop/'.$info->getFilename());
                    }
                }
            }
        }
        echo json_encode($return);
    }
}