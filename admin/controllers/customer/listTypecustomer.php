<?php
require_once("../dbConnect.php");
$db = new DBController();
$sql = 'SELECT * FROM customertype';
$typecustomer = $db->get_select_nested($sql);
echo json_encode($typecustomer);
?>