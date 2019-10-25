<?php
require '../lib/db.php';
$sql='select * from nav order by nsort desc ';
$result = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

require 'header.php';
require '../view/index/index.html';
require 'bottom.php';