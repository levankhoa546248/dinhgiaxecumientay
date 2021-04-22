<?php
$title = 'Nhập xe';
$header = 'Danh mục nhập xe';
$content = 'Bảng điều khiển';
$hangxes= select("SELECT * FROM hangxe WHERE trangthai = 1 ORDER BY ngaytao DESC ");
$dongxes= select("SELECT * FROM dongxe WHERE trangthai = 1 ORDER BY ngaytao DESC ");
$nhienlieus= select("SELECT * FROM nhienlieu WHERE trangthai = 1 ORDER BY ngaytao DESC ");
$hopsos= select("SELECT * FROM hopso WHERE trangthai = 1 ORDER BY ngaytao DESC ");
$chongois= select("SELECT * FROM chongoi WHERE trangthai = 1 ORDER BY ngaytao DESC ");
$xuatxus= select("SELECT * FROM xuatxu WHERE trangthai = 1 ORDER BY ngaytao DESC ");
$mausacs= select("SELECT * FROM mausac WHERE trangthai = 1 ORDER BY ngaytao DESC ");
$namsanxuats= select("SELECT * FROM namsanxuat WHERE trangthai = 1 ORDER BY ngaytao DESC ");
$chudautus= select("SELECT * FROM chudautu WHERE trangthai = 1 ORDER BY ngaytao DESC ");
$idxe=$_GET["idxe"];
require('manager/pages/xe/banxe.php');
?>