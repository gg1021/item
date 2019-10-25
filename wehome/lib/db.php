<?php
/**
 * Created by PhpStorm.
 * User: gg
 * Date: 2019/9/26
 * Time: 15:33
 */

$mysql = new mysqli('localhost','root','','wehome','3306');
if($mysql->connect_errno){
    echo '数据库连接失败，失败原因(状态码)'.$mysql->connect_errno;
    exit();
}
$mysql->query("set names utf8");//设置查询字符集