<?php
$db = new DBController();
$title = 'Đơn hàng';
$user = $_SESSION['user'];
$sqlemployees = 'SELECT
e.id,
u.`name`,
e.active
FROM
employees AS e
INNER JOIN `user` AS u ON e.userid = u.id
WHERE e.active = 1 AND UPPER(e.username) = UPPER(\'' . $user["username"] . '\')';
$employee = $db->get_select_nested($sqlemployees);

require('admin/views/order/index.php');