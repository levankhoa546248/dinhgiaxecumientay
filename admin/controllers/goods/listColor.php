<?php
require_once("../dbConnect.php");
$db = new DBController();
$sql = 'SELECT p.* FROM color p';
$list = $db->get_select_nested($sql);
echo json_encode($list);
?>