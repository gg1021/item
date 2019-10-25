<?php
/**
 * Created by PhpStorm.
 * User: gg
 * Date: 2019/9/25
 * Time: 18:03
 */

//展示页面  获取数据

require '../lib/db.php';

$sql = "select * from nav order by nsort desc ";

$result = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

//echo '<pre>';
//print_r($result);

require '../view/admin/navselect.html'; //导入页面模板地址
$str;