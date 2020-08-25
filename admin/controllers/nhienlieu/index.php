<?php
//load model
require_once('admin/models/groups.php');
$title = 'Danh mục nhiên liệu';
$user = $_SESSION['user'];
$nhienlieus = get_select_nested('SELECT id, name FROM nhienlieu where trangthai = 1');
//load view
require('admin/views/nhienlieu/index.php');