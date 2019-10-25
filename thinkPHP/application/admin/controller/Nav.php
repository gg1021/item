<?php
/**
 * Created by PhpStorm.
 * User: gg
 * Date: 2019/10/9
 * Time: 9:43
 */

namespace app\admin\controller;

use think\Controller;
use think\Db;

class Nav extends Base
{
    public function _initialize()
    {
        parent::_initialize();
    }

    public function index(){
        //  查看
        return $this->fetch();
    }
    //展示插入页面
    public function openinsert(){
        return view();
    }
    //插入逻辑
    public function insert(){


        //权限    请求方式    参数
        $method = $this->request->method();
        if ($method != 'POST'){
            return json(['code'=>400,'msg'=>'请求方式错误']);
            exit();
        }
        $data = input('post.');
        //验证规则  验证参数
        $validate = validate('nav');
        if(!$validate->scene('insert')->check($data)){
            return json(['code'=>400,'msg'=>'数据形式或者类型有误']);
            exit();
        }

        $result = Db::table('nav')->insert($data);
        if ($result >0 ){
            return json(['code'=>200,'msg'=>'数据插入成功']);
        }else{
            return json(['code'=>400,'msg'=>'数据插入失败']);
        }
    }
    public function remove(){
        if (!$this->request->isPost()){return json(['code'=>400,'msg'=>'请求方式错误']);exit();};
        $data=input('post.');
        $id = input('post.id');
        //验证规则  验证参数
        $validate = validate('nav');
        if(!$validate->scene('del')->check($data)){
            return json(['code'=>400,'msg'=>'数据形式或者类型有误']);
            exit();
        }


        $result=Db::table('nav')->where('id',$id)->delete();
        if ($result >0 ){
            return json(['code'=>200,'msg'=>'数据删除成功']);
        }else{
            return json(['code'=>400,'msg'=>'数据删除失败']);
        }
    }
    public function update(){
        //权限    请求方式    参数
        $method = $this->request->method();
        if ($method != 'POST'){
            return json(['code'=>400,'msg'=>'请求方式错误']);
            exit();
        }
        $data = input('post.');
        //验证规则  验证参数
        $validate = validate('nav');
        if(!$validate->scene('update')->check($data)){
            return json(['code'=>400,'msg'=>'数据形式或者类型有误']);
            exit();
        }
//        $id = input('post.id');
//        $value = input('post.value');
//        $field = input('post.field');
        $result = Db::table('nav')->where('id',$data['id'])->update([$data['field']=>$data['value']]);
        if ($result >0 ){
            return json(['code'=>200,'msg'=>'数据修改成功']);
        }else{
            return json(['code'=>400,'msg'=>'数据修改失败']);
        }
    }
    public function query(){
        $data=Db::table('nav')->select();
       return json([
          'code'=>0,
          'msg'=>'success',
          'data'=>$data,
          'count'=>1
        ]);
    }
}