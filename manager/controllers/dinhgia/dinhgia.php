<?php
$title = 'Định giá';
$header = 'Danh mục định giá';
$content = 'Bảng điều khiển';
$sql = 'SELECT * FROM xedinhgia WHERE trangthai = 1 ORDER BY ngaytao DESC ';
$chucvu = select($sql);
require('manager/pages/dinhgia/dinhgia.php');
?>