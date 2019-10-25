<?php
/**
 * Created by PhpStorm.
 * User: gg
 * Date: 2019/10/9
 * Time: 16:21
 */

namespace app\admin\controller;


use think\Controller;
use think\Session;

class Main extends Base
{
    public function _initialize()
    {
        parent::_initialize();
    }
    public function index(){
        $user = Session::get('user');
        return view('index',['user'=>$user]);
    }
}