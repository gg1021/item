<?php
require '../lib/db.php';
$data=$_POST;
$id = $data{'id'};
$value = $data{'value'};
$type = $data{'type'};

$sql = "update goods set $type='$value' where gid=$id";
$result = $mysql->query($sql);
if($mysql->affected_rows >0){
    echo json_encode([
        'code'=>200,
        'msg'=>'修改成功'
    ]);
}else{
    echo json_encode([
        'code'=>404,
        'msg'=>'修改失败'
    ]);
}
?>