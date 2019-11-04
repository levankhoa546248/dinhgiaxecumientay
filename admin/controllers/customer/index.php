<?php
$db = new DBController();
$title = 'Danh mục khách hàng';
$user = $_SESSION['user'];
require('admin/views/customer/index.php');