<?php
/**
 * Created by PhpStorm.
 * User: gg
 * Date: 2019/9/30
 * Time: 14:55
 */

require 'header.php';
$id = $_GET['id'];

$sql="select * from nav where id = $id";

$nav=$mysql->query($sql)->fetch_assoc();
$tpl=$nav['ntpl'];

//判断文件是否存在来决定是否打开页面
if (file_exists('../view/index/'.$tpl.'.html')){

    require '../view/index/'.$tpl.'.html';
    require 'bottom.php';
}else{
    require '../view/index/404.html';
}
