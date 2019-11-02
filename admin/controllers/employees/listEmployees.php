<?php
require_once("../dbConnect.php");
$db = new DBController();
$sql = 'SELECT e.*, u.*, p.name as positionname FROM employees e LEFT JOIN `user` u ON e.user_id = u.id
LEFT JOIN position p ON p.id = e.position';
$employees = $db->get_select_nested($sql);
echo json_encode($employees);
?>