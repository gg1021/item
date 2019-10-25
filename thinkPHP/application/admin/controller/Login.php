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
use think\response\View;
use think\Session;

class Login extends Controller
{
    public function index($name='db'){
        return $this->fetch();
    }

    public function index1(){
//        $data=Db::name('goods')->find();
//        return view('hello',['goods'=>$data]);
//        $this->assign('result',$data);
//        return $this->fetch();
    }
    public function check(){
        if (!request()->isPost()){
            return json([
               'code'=>404,
               'msg'=>'请求方式错误'
            ]);
        }
        $data = input('post.');
        if(!captcha_check($data['code'])) {
            return json([
                'code' => 404,
                'msg' => '验证码错误'
            ]);
        }
        $username = $data['username'];
        $password = md5(crypt($data['password'],'asasfas'));
        $result = Db::table('manager')->where(['username'=>$username,'password'=>$password])->find();
        if ($result){
            Session::set('user',$result);
            return json([
                'code'=>0,
                'msg'=>'登录成功'
            ]);
        }else{
            return json([
                'code'=>404,
                'msg'=>'登陆失败'
            ]);
        }

    }
}