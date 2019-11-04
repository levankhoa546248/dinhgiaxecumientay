<?php
require_once("../dbConnect.php");
$db = new DBController();
$sql = 'SELECT * FROM customergroup';
$result = $db->get_select_nested($sql);
echo json_encode($result);
?>