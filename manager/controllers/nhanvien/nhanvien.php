<?php
$title = 'Nhân viên';
$header = 'Danh mục nhân viên';
$content = 'Bảng điều khiển';
$sql = 'SELECT * FROM chucvu WHERE trangthai = 1 ORDER BY ngaytao DESC ';
$chucvu = select($sql);
require('manager/pages/nhanvien/nhanvien.php');
?>