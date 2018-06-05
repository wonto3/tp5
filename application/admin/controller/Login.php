<?php
/**
 * Created by PhpStorm.
 * User: hao
 * Date: 2018/5/25
 * Time: 16:16
 */

namespace app\admin\controller;
use think\Controller;
use think\facade\Request;
use think\Db;
use think\facade\Session;

class Login extends Controller
{
    //登录页面
    public  function index(){
        if(Request::isPost()){
            $data = Request::param();
            if(empty($data['username'])){
                $this->error('用户名不能为空');
            }
            if(empty($data['password'])){
                $this->error('密码不能为空');
            }
            $item = Db::name('admin')->where(array('username'=>$data['username'],'status'=>1))->limit(1)->find();
            if(empty($item)){
                $this->error('用户名或密码错误');
            }else{
                if($item['password']!=md5($item['salt'].$data['password'])){
                    $this->error('用户名或密码错误');
                }
                Db::name('admin')->where('id',$item['id'])->update(array('logintime'=>time()));
                Session::set('adminid',$item['id']);
                $this->success('登录成功','Index/index');
            }
        }
        $adminid = Session::get('adminid');
        if(!$adminid){
            $xml = xml(['code'=>1,'message'=>'操作完成']);
            return $this->fetch();
        }else{
            $this->redirect('Index/index');
        }
    }

    //退出登录
    public function logout(){
        Session::delete('adminid');
        $this->success('退出登录成功','Login/index');
    }
}