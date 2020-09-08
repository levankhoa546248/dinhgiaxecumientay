<?php
$id = $_GET['id'];
$sql = 'SELECT * FROM xetimmua WHERE id = ' . $id;
$xetimmua = select_1_record($sql);
$title = 'Duyệt tìm xe';
$user = $_SESSION['user'];
require('admin/views/timmuaxe/info.php');