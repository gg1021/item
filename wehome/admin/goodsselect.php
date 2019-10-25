<?php
/**
 * Created by PhpStorm.
 * User: gg
 * Date: 2019/9/25
 * Time: 18:03
 */

//展示页面  获取数据

require '../lib/db.php';

$sql = "select * from goods order by gid asc ";
$sql = "select goods.* ,category.cname from goods LEFT JOIN category on goods.cid = category.id";

$result = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
//echo '<pre>';
//print_r($result);

require '../view/admin/goodsselect.html'; //导入页面模板地址
$str;