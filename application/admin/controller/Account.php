<?php
/**
 * Created by PhpStorm.
 * User: hao
 * Date: 2018/5/29
 * Time: 14:35
 */

namespace app\admin\controller;
use think\Db;
use think\facade\Request;

class Account extends Common
{
    //列表页
    public function index(){
        $data = Request::param();
        $p = isset($data['p'])?$data['p']:1;
        $limit = isset($data['limit'])?$data['limit']:10;
        $list = Db::name('admin')->page($p, $limit)->paginate(10);
        $this->assign('list',$list);
        $page = $list->render();
        $this->assign('page', $page);
        return $this->fetch();
    }

    //添加
    public function add(){
        $id = 0;
        $this->assign('id', $id);
        return $this->fetch();
    }

    //编辑
    public function edit(){
        $data = Request::param();
        $id = $data['id'];
        $item = Db::name('admin')->where('id',$id)->find();
        $this->assign('id', $id);
        $this->assign('item', $item);
        return $this->fetch();
    }

    //处理数据
    public function post(){
        if(Request::isPost()){
            $data = Request::param();
            $id = $data['id'];
            unset($data['id']);
            if($data['username']==''){
                $this->error('账户名不能为空');
            }
            if($data['password']==''){
                $this->error('密码不能为空');
            }
            $username = $data['username'];
            $admin = Db::name('admin')->where('username',$username)->field('id')->limit(1)->find();
            if($admin){
                if($id==0){
                    $this->error('该账户名已被注册');
                }elseif($id>0 && $id!=$admin['id']){
                    $this->error('该账户名已被注册');
                }
            }
            if($id){
                //编辑
                $salt = Db::name('admin')->where('id',$id)->value('salt');
                $data['password'] = md5($salt.$data['password']);
                Db::name('admin')->where('id',$id)->update($data);
                $this->success('修改成功','Account/index');
            }else{
                //添加
                $data['createtime'] = time();
                $salt = $this->random(8);
                $data['salt'] = $salt;
                $data['password'] = md5($salt.$data['password']);
                $insert = Db::name('admin')->insert($data);
                if($insert){
                    $this->success('添加成功','Account/index');
                }else{
                    $this->error('添加失败','Account/index');
                }
            }
        }
    }
}