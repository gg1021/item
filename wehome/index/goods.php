<?php
include '../lib/db.php';
$gid=$_GET['id'];
$sql = "select * from goods where gid = $gid";
$result=$mysql->query($sql)->fetch_assoc();
$gbanner = explode(',',$result['gbanner']);
$prevsql="select gid,gname from goods where gid<$gid order by gid desc limit 0,1";//limit 截取
$prevgoods = $mysql->query($prevsql)->fetch_assoc();
if($prevgoods){
    $prevsql = "<a gref = 'goods.php?gid = {$prevgoods['gid']}'>{$prevgoods['gname']}</a>";
}else{
    $prevsql = "<a>暂时没有更多内容</a>";
}
require './header.php';
require '../view/index/item.html';
require 'bottom.php';
