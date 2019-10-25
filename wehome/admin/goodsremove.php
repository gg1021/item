<?php
require '../lib/db.php';
$data=$_POST;
$id=$data['id'];
$sql = "delete from goods where gid=$id";

$mysql->query($sql);

if($mysql->affected_rows >0){
    echo json_encode([
        'code'=>200,
        'msg'=>'删除成功'
    ]);
}else{
    echo json_encode([
        'code'=>404,
        'msg'=>'删除失败'
    ]);
}