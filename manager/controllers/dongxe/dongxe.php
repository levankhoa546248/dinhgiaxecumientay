<?php
$title = 'Dòng xe';
$header = 'Danh mục dòng xe';
$content = 'Bảng điều khiển';
$sql = 'SELECT * FROM hangxe WHERE trangthai = 1 ORDER BY ngaytao DESC ';
$hangxe = select($sql);
require('manager/pages/dongxe/dongxe.php');
?>