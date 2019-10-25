<?php
include '../lib/db.php';
require './header.php';
$id=$_GET['id'];
$nav=$nav[4];


$sql = "select * from news where id = $id";
$result=$mysql->query($sql)->fetch_assoc();
$prevsql="select id,name from news where id<$id order by id desc limit 0,1";//limit 截取
$nextsql="select id,name from news where id>$id order by id asc limit 0,1";
$nextgoods= $mysql->query($nextsql)->fetch_assoc();
$prevgoods = $mysql->query($prevsql)->fetch_assoc();
if($prevgoods){
    $prevsql = "<a href = 'news.php?id={$prevgoods['id']}'>上一篇&nbsp{$prevgoods['name']}</a>";
}else{
    $prevsql = "<a href='#'>暂时没有更多内容</a>";
}
if($nextgoods){
    $nextsql = "<a href = 'news.php?id={$nextgoods['id']}'>下一篇&nbsp{$nextgoods['name']}</a>";
}else{
    $nextsql = "<a href='#'>暂时没有更多内容</a>";
}

require '../view/index/newsdetail.html';
require 'bottom.php';
