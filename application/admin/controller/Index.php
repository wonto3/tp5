<?php

/**
 * Created by PhpStorm.
 * User: hao
 * Date: 2018/5/25
 * Time: 14:12
 */
namespace app\admin\controller;

class Index extends Common
{
    //后台首页
    public  function index(){
        return $this->fetch();
    }

    //切换壁纸
    public function theme(){
        return $this->fetch();
    }
}