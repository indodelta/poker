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

class Exchange extends Base
{
    /**
     * 兑换编辑
     * @return \think\response\View
     */
    public function indexView()
    {
        return view("indexView");
		}
		

		/**
     * 兑换loading
     * @return \think\response\View
     */
    public function loading()
    {
        return view("loading");
		}
		
}