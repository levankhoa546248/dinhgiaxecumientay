<?php
require_once("../dbConnect.php");
$db = new DBController();
$sql = 'SELECT p.* FROM position p where active = 1';
$list = $db->get_select_nested($sql);
echo json_encode($list);
?>