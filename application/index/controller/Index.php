<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        // : 冒号可以创建数据包
//        $redis = new Redis();
//        $redis->handler()->set('php:test','test');
//        echo "<pre>";
//        print_r($redis->get('php:test'));
        return view();
    }
}
