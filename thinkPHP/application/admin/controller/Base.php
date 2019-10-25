<?php
/**
 * Created by PhpStorm.
 * User: gg
 * Date: 2019/10/14
 * Time: 11:18
 */

namespace app\admin\controller;


use think\Controller;
use think\Session;

class Base extends Controller
{
    public function _initialize()
    {
        parent::_initialize();
        if (!Session::has('user')){
            $this->error('请登录','/thinkPHP/public/index.php/admin/login/index');
            exit();
        }
    }
}