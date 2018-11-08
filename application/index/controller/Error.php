<?php
/**
 * 登录
 */
namespace app\index\controller;

use think\Db;

class Error
{
    public function error()
    {
        return view("public/error");
    }

    public function login()
    {
        return view("public/loginError");
    }
}
