<?php
/**
 * Created by PhpStorm.
 * User: gg
 * Date: 2019/10/7
 * Time: 18:41
 */
require '../lib/common.php';
require '../lib/db.php';
$data=$_POST;
$keys = joinkeys($data);
$value = joinValues($data);
$sql = "insert into onlinebooking ($keys) values ($value)";

$mysql->query($sql);

if($mysql->affected_rows >0){
    echo json_encode([
        'code'=>200,
        'msg'=>'信息提交成功'
    ]);
}else{
    echo json_encode([
        'code'=>404,
        'msg'=>'信息提交失败'
    ]);
}
