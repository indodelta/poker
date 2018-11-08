<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------
// 应用公共文件
//加密
use think\Cache;

function lock($content)
{
    $key = config("LockKey");
    $txt = $content.$key;
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-=+";
    $nh = rand(0,64);
    $ch = $chars[$nh];
    $mdKey = md5($key.$ch);
    $mdKey = substr($mdKey,$nh%8, $nh%8+7);
    $txt = base64_encode($txt);
    $tmp = '';
    $i = 0;
    $j = 0;
    $k = 0;
    for ($i=0; $i<strlen($txt); $i++) {
        $k = $k == strlen($mdKey) ? 0 : $k;
        $j = ($nh+strpos($chars,$txt[$i])+ord($mdKey[$k++]))%64;
        $tmp .= $chars[$j];
    }
    return urlencode(base64_encode($ch.$tmp));
}
//解密
function unlock($content)
{
    $key = config("LockKey");
    $txt = base64_decode(urldecode($content));
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-=+";
    $ch = $txt[0];
    $nh = strpos($chars,$ch);
    $mdKey = md5($key.$ch);
    $mdKey = substr($mdKey,$nh%8, $nh%8+7);
    $txt = substr($txt,1);
    $tmp = '';
    $i = 0;
    $j = 0;
    $k = 0;
    for ($i=0; $i<strlen($txt); $i++) {
        $k = $k == strlen($mdKey) ? 0 : $k;
        $j = strpos($chars,$txt[$i])-$nh - ord($mdKey[$k++]);
        while ($j<0) $j+=64;
        $tmp .= $chars[$j];
    }
    return trim(base64_decode($tmp),$key);
}
function token($content,$ip,$time){
    $redis = Cache::getHandler();
    $token = lock($content);
    if($redis->exist("game:token:".$token)>0){
        token($content,$ip,$time);
    }else{
        $redis->hSet("game:token:".$token,'server_ip',$ip);
        $redis->hSet("game:token:".$token,'client_ip',$_SERVER['REMOTE_ADDR']);
        $redis->hSet("game:token:".$token,'time',$time);
        $redis->hSet("game:token:".$token,'id',session('user.id'));
        $redis->hSet("game:token:".$token,'account',session('user.account'));
        $redis->hSet("game:token:".$token,'status',1);
        $redis->lPush("game:userTokenList:".session("user.id"),$token);
        if($token==""){
            token($content,$ip,$time);
        }else{
            return $token;
        }
    }
}