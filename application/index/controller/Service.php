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

class Service extends Base
{
    /**
     * 客服list
     * @return \think\response\View
     */
    public function serviceList()
    {
        return view("serviceList");
		}
		

		/**
     * 客服视图
     * @return \think\response\View
     */
    public function serviceView()
    {
        return view("serviceView");
		}
		

		/**
     * 客服编辑
     * @return \think\response\View
     */
    public function serviceWrite()
    {
        return view("serviceWrite");
    }
}