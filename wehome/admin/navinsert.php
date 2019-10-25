<?php
/**
 * Created by PhpStorm.
 * User: gg
 * Date: 2019/9/25
 * Time: 18:02
 */
$method = $_SERVER['REQUEST_METHOD'];
if($method ==='GET'){
    require ('../view/admin/navinsert.html');
}else{
    require '../lib/common.php';
    $data = $_POST;
    require '../lib/db.php';
    $mysql->query("set names utf8");//设置查询字符集

    $keys = joinkeys($data);
    $value = joinValues($data);
    $sql = "insert into nav ($keys) values ($value)";
    $mysql->query($sql);

    if($mysql->affected_rows >0){
        echo json_encode([
            'code'=>200,
            'msg'=>'插入成功'
        ]);
    }else{
        echo json_encode([
            'code'=>404,
            'msg'=>'插入失败'
        ]);
    }
}