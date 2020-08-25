<?php
//load model
require_once('admin/models/groups.php');
$title = 'Danh mục năm sản xuất';
$user = $_SESSION['user'];
$namsanxuats = get_select_nested('SELECT id, name FROM namsanxuat where trangthai = 1');
//load view
require('admin/views/namsanxuat/index.php');