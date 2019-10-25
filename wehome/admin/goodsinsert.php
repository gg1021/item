<?php

//展示商品添加页面      插入数据

require '../lib/db.php';
$method = $_SERVER['REQUEST_METHOD'];
if($method == 'GET'){
    $sql = "select * from category order by id asc ";
    $result = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
    require '../view/admin/goodsinsert.html';

}else{
    require '../lib/common.php';
    $data = $_POST;
//    date_default_timezone_set('Asia/Shanghai');
    date_default_timezone_set('PRC');
    $data['create_time'] = date('Y-m-d H:i:s');
    $key = joinkeys($data);
    $value = joinValues($data);


    $sql = "insert into goods ($key) values ($value)";
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