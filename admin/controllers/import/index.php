<?php
$db = new DBController();
$title = 'Nhập hàng';
$user = $_SESSION['user'];
$sqlemployees = 'SELECT u.* FROM employees e JOIN `user` u ON e.userid = u.id WHERE UPPER(e.username) = UPPER(\'' . $user["username"] . '\')';
$employee = $db->get_select_nested($sqlemployees);

require('admin/views/import/index.php');