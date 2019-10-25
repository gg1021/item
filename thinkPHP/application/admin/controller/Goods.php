<?php
/**
 * Created by PhpStorm.
 * User: gg
 * Date: 2019/10/11
 * Time: 11:07
 */

namespace app\admin\controller;


use think\Controller;
use think\Db;

class Goods extends Base
{
    public function _initialize()
    {
        parent::_initialize();
    }

    public function openinsert(){
        //挂载数据的两种方法
        $cate = Db::table('category')->order('id','asc')->select();
        $this->assign('cate',$cate);
    //        return $this->fetch('openinsert',[]);
        return $this->fetch();
    }
    public function insert(){
        //权限    请求方式    参数
        $method = $this->request->method();
        if ($method != 'POST'){
            return json(['code'=>400,'msg'=>'请求方式错误']);
            exit();
        }
        $data = input('post.');
        $data = $this->request->post();
        //验证规则  验证参数
//        $validate = validate('nav');
//        if(!$validate->scene('insert')->check($data)){
//            return json(['code'=>400,'msg'=>'数据形式或者类型有误']);
//            exit();
//        }
        $data['create_time'] =date('Ymd');
        $result = Db::table('goods')->insert($data);
        if ($result >0 ){
            return json(['code'=>200,'msg'=>'数据插入成功']);
        }else{
            return json(['code'=>400,'msg'=>'数据插入失败']);
        }
    }
    public function index(){
        $cate = Db::table('category')->order('id','asc')->select();
        $this->assign('cates',$cate);
        return $this->fetch();
    }
    public function query()
    {
        //1.总数
        //2.当前页数据   select * from goods wjere 【】 order by gid asc offset ，length
        //搜索条件：点击搜索按钮
        $qs = $this->request->get();
        $where = [];
        if (isset($qs['cid']) && !empty($qs['cid'])){$where['cid']=$qs['cid'];};

       /* $where='';
        if (count($qs)>2){
            $field=$qs['field'];
            if ($field['cid']){
                $where .= "cid=".$field['cid'];
            }
            if ($field['gname']){
                if ($where){
                    $where .= " and gname like '%".$field['gname']."%'";
                }else{
                    $where .= "gname like '%".$field['gname']."%'";
                }
            }
            if ($field['price-min']&&$field['price-max']&& $field['price-min']<$field['price-max']){
                if ($where){
                    $where .= ' and sale between'.$field['price-min'].' and '.$field['price-max'];
                }else{
                    $where .= 'sale between'.$field['price-min'].' and '.$field['price-max'];
                }
            }
        }*/
        $page = $qs['page'];$limit=$qs['limit'];
        $offset=($page - 1)*$limit;
        $count = Db::table('goods')->where($where)->count();
//        $data = Db::table('goods')->limit($offset,$limit)->select();
        $data = Db::table('goods')->where($where)->page($page,$limit)->select();


//        $data=Db::table('goods')->order('gid','asc')->select();
//        $count=count($data);
        return json([
            'code'=>0,
            'msg'=>'数据获取成功',
            'data'=>$data,
            'count'=>$count
        ]);
    }
    public function remove(){

    }
    public function update(){

    }

}