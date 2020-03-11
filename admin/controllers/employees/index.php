<?php
$db = new DBController();
$title = 'Danh mục nhân viên';
$user = $_SESSION['user'];
$dsNhanVien = $db->get_select_nested('call dsNhanVien()');
require('admin/views/employees/index.php');