<?php
/**
 * Created by PhpStorm.
 * User: gg
 * Date: 2019/10/14
 * Time: 11:18
 */

namespace app\index\controller;


use think\Controller;
use think\Db;

class Base extends Controller
{
    public function _initialize()
    {
        parent::_initialize();
       $nav = Db::table('nav')->order('nsort','desc')->select();
       $this->assign(['nav'=>$nav]);
    }
}