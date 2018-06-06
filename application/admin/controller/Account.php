<?php
/**
 * Created by PhpStorm.
 * User: hao
 * Date: 2018/5/29
 * Time: 14:35
 */

namespace app\admin\controller;
use think\facade\Request;

class Account extends Common
{
    //列表页
    public function index(){
        $data = Request::param();
        if(Request::isPost()){
            $idList = isset($data['id'])?$data['id']:array();
            if($idList){
                foreach($idList as $k => $v){
                    model('Account')->delOne($v);
                }
                $this->success('删除成功');
            }
        }
        $p = isset($data['p'])?$data['p']:1;
        $list = model('Account')->getList($p);
        $this->assign('list',$list);
        $page = $list->render();
        $this->assign('page', $page);
        return $this->fetch();
    }

    //添加
    public function add(){
        $id = 0;
        $this->assign('id', $id);
        return $this->fetch('post');
    }

    //编辑
    public function edit(){
        $data = Request::param();
        $id = $data['id'];
        $item = model('Account')->getOne($id);
        $this->assign('id', $id);
        $this->assign('item', $item);
        return $this->fetch('post');
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
            $admin =  model('Account')->checkName($username);
            if($admin){
                if($id==0){
                    $this->error('该账户名已被注册');
                }elseif($id>0 && $id!=$admin['id']){
                    $this->error('该账户名已被注册');
                }
            }
            if($id){
                //编辑
                $salt = model('Account')->getSalt($id);
                $data['password'] = md5($salt.$data['password']);
                model('Account')->updateOne($id,$data);
                $this->success('修改成功','Account/index');
            }else{
                //添加
                $data['createtime'] = time();
                $salt = $this->random(8);
                $data['salt'] = $salt;
                $data['password'] = md5($salt.$data['password']);
                $insert = model('Account')->insertOne($data);
                if($insert){
                    $this->success('添加成功','Account/index');
                }else{
                    $this->error('添加失败','Account/index');
                }
            }
        }
    }

    //删除
    public function del(){
        if(Request::isGet()){
            $data = Request::param();
            $id = $data['id'];
            model('Account')->delOne($id);
            $this->success('删除成功');
        }
    }
}