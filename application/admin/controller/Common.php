<?php
/**
 * Created by PhpStorm.
 * User: hao
 * Date: 2018/5/25
 * Time: 16:04
 */

namespace app\admin\controller;
use think\Controller;
use think\facade\Session;

class Common extends Controller
{
    protected function initialize(){
        $adminid = Session::get('adminid');
        if(!$adminid){
            $this->redirect('Login/index');
        }
    }

    public function random($length, $numeric = FALSE) {
        $seed = base_convert(md5(microtime() . $_SERVER['DOCUMENT_ROOT']), 16, $numeric ? 10 : 35);
        $seed = $numeric ? (str_replace('0', '', $seed) . '012340567890') : ($seed . 'zZ' . strtoupper($seed));
        if ($numeric) {
            $hash = '';
        } else {
            $hash = chr(rand(1, 26) + rand(0, 1) * 32 + 64);
            $length--;
        }
        $max = strlen($seed) - 1;
        for ($i = 0; $i < $length; $i++) {
            $hash .= $seed{mt_rand(0, $max)};
        }
        return $hash;
    }

}