<?php
$id = $_GET['idban'];
$sql = 'SELECT * FROM xeguiban WHERE id = ' . $id;
$xeguiban = select_1_record($sql);
$title = 'Duyệt xe gửi bán';
$user = $_SESSION['user'];
require('admin/views/guibanxe/duyetxeban.php');