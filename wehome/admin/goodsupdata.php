<?php
/**
 * Created by PhpStorm.
 * User: gg
 * Date: 2019/9/29
 * Time: 17:57
 */

require '../lib/db.php';
$method = $_SERVER['REQUEST_METHOD'];

if($method === 'GET'){

    $gid=$_GET['gid'];

//    $sql = "select goods.*,category.cname from goods left join category on goods.gid = $gid";
    $sql = "select * from goods where gid = $gid";
    $goods = $mysql->query($sql)->fetch_assoc();
    $sql = "select * from category where 1 order by id asc";
    $result = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
    require '../view/admin/goodsupdata.html';

}else{
    $data = $_POST;
    $gid=$data['gid'];
    upset($data['gid']);//删除gid这一属性
    //判断数据是否改变



    $str = joinKeysValues($data);
    $sql = "updata goods set $str where gid=$gid";
    $mysql->query($sql);
    if ($mysql->affected_rows){
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
}