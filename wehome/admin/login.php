<?php
//展示登录的界面   验证
//请求方式  GET  展示页面   POST  验证

$method = $_SERVER['REQUEST_METHOD'];   //请求方式

if ($method ==='GET'){
    //GET 方式    跳到登录页面
    include '../view/admin/login.html';
}else{
    //POST方式    验证账号密码的正确性
    $arr=$_POST;
    $username = $arr['username'];
    $password = md5(crypt($arr['password'],'asasfas'));
    $mysql = new mysqli('localhost','root','','wehome','3306');
    if($mysql->connect_errno){
        echo '数据库连接失败，失败原因(状态码)'.$mysql->connect_errno;
        exit();
    }
    $mysql->query("set names utf8");//设置查询字符集

    $sql = "select * from manager where username = '".$username."'";
    $result=$mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
    if (count($result)){
        if ($password == $result[0]['password']){
            echo json_encode([
                'code'=>200,
                'msg'=>'登陆成功'
            ]);
        }
    }else{
        echo json_encode([
            'code'=>404,
            'msg'=>'用户名不存在'
        ]);
    }
}