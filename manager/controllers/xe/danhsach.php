<?php
$title = 'Danh sách xe';
$header = 'Danh sách xe';
$hangxes= select("SELECT * FROM hangxe WHERE trangthai = 1 ORDER BY ngaytao DESC ");
require('manager/pages/xe/danhsach.php');
?>