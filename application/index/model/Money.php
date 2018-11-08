<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/10/16
 * Time: 13:36
 */

namespace app\index\model;

use think\Model;
use think\Exception;
class Money extends Model
{
    /**
     * @param $save_data
     * @param string $edit_pk
     * @param string $version_field
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function index($save_data,$type = 0, $edit_pk = "u_id", $version_field = "version"){
        if (empty($version_field)){
            $version_field = isset($this->versionField) ? $this->versionField : "version";
        }
        if (empty($edit_pk)){
            $edit_pk = isset($this->editPk) ? $this->editPk : $this->getPk();
        }
        //判断PK字段是否存在
        if (!isset($save_data[$edit_pk])||!isset($save_data[$version_field])){
            return 404;
        }else{
            //设置升级检索条件 PK和版本号
            $map[$edit_pk] = $save_data[$edit_pk];
            $map[$version_field] = $save_data[$version_field];
            //剔除PK
            unset($save_data[$edit_pk]);
        }
        try{
            //检测版本字段
            $original_data = $this->where($map)->find();
            if (empty($original_data)){
                return 100;
            }
            //版本号升级
            $save_data[$version_field]=(int)$original_data[$version_field]+1;
            if($type==0){
                $save_data['coin']=$original_data['coin']+$save_data['coin'];
            }else{
                $save_data['coin']=$original_data['coin']-$save_data['coin'];
            }
            if (1!=$this->allowField(true)->save($save_data,$map)){
                return 404;
            }
            return 1;
        }catch (Exception $e){

            return 500;
        }
    }
}