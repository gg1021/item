<?php
require '../lib/db.php';
$sql = "select * from category order by id asc ";
$result = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

require '../view/admin/catselect.html';