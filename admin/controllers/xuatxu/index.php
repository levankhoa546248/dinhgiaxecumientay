<?php
//load model
require_once('admin/models/groups.php');
$title = 'Danh mục xuất xứ';
$user = $_SESSION['user'];
$xuatxus = get_select_nested('SELECT id, name FROM xuatxu where trangthai = 1');
//load view
require('admin/views/xuatxu/index.php');