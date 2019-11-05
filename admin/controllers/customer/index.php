<?php
$db = new DBController();
$title = 'Danh mục khách hàng';
$user = $_SESSION['user'];
$sqlprovince = 'SELECT * FROM province';
$province = $db->get_select_nested($sqlprovince);
require('admin/views/customer/index.php');