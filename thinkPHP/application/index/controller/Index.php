<?php
namespace app\index\controller;



use think\Controller;

class Index extends Base
{
    public function index()
    {
        //定义数据
        $this->assign('cid',0);
        return $this->fetch();
    }
}
