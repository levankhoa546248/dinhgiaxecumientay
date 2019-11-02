<?php
$db = new DBController();
$sql = 'SELECT e.*, u.*, p.name as positionname FROM employees e LEFT JOIN `user` u ON e.user_id = u.id
LEFT JOIN position p ON p.id = e.position';
$title = 'Danh mục nhân viên';
$user = $_SESSION['user'];
$employees = $db->get_select_nested($sql);
$sqlPosition = 'SELECT * FROM position';
$listposition = $db->get_select_nested($sqlPosition);
$sqlprovince = 'SELECT * FROM province';
$province = $db->get_select_nested($sqlprovince);

//load view
require('admin/views/employees/index.php');