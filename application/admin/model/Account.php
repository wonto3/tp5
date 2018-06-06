<?php
/**
 * Created by PhpStorm.
 * User: hao
 * Date: 2018/6/5
 * Time: 16:51
 */

namespace app\admin\model;
use think\Model;
use think\Db;

class Account extends Model
{
    public function getList($p){
        $list = Db::name('admin')->alias('a')->join('admin b','a.parentid=b.id','left')->field('a.*,b.username as parentname')->page($p, 10)->paginate(10);

        return $list;
    }

    public function getOne($id){
        $item = Db::name('admin')->where('id',$id)->find();

        return $item;
    }

    public function delOne($id){
        $del = Db::name('admin')->where('id',$id)->delete();

        return $del;
    }

    public function updateOne($id,$data){
        $update = Db::name('admin')->where('id',$id)->update($data);

        return $update;
    }

    public function insertOne($data){
        $insert = Db::name('admin')->insert($data);

        return $insert;
    }

    public function getSalt($id){
        $salt = Db::name('admin')->where('id',$id)->value('salt');

        return $salt;
    }

    public function checkName($username){
        $admin = Db::name('admin')->where('username',$username)->field('id')->limit(1)->find();
        if($admin){
            return $admin;
        }else{
            return false;
        }
    }
}