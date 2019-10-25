<?php
/**
 * Created by PhpStorm.
 * User: gg
 * Date: 2019/10/8
 * Time: 17:57
 */



namespace app\index\controller;
use think\Controller;
use think\Db;

class Category extends Base
{
    public function index(){
        $cid = $this->request->get('cid');
        $currdentnav = Db::table('nav')->where('id',$cid)->find();
        $tpl=$currdentnav['ntpl'];
        $this->assign('title',$currdentnav['nname']);

//        switch ($tpl){
//            case 'aboutus':Db::table('nav')->where('ntpl','aboutus')->find();break;
//            case 'product':Db::table()->find();break;
//            case 'news':Db::table()->find();break;
//        }
        $this->assign('cid',$cid);
        $this->assign('currdentnav',$currdentnav);
        return $this->fetch($tpl);
    }
}