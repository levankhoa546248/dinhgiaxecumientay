<?php
$db = new DBController();
$title = 'Danh mục khách hàng';
$user = $_SESSION['user'];
$sqlprovince = 'SELECT * FROM province';
$province = $db->get_select_nested($sqlprovince);
$sqlcustomertype = 'SELECT * FROM customertype';
$customertype = $db->get_select_nested($sqlcustomertype);
$sqlcustomergroup = 'SELECT * FROM customergroup';
$customergroup = $db->get_select_nested($sqlcustomergroup);
require('admin/views/customer/index.php');