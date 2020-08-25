<?php
//load model
require_once('admin/models/groups.php');
$title = 'Danh mục màu sắc';
$user = $_SESSION['user'];
$mausacs = get_select_nested('SELECT id, name FROM mausac where trangthai = 1');
//load view
require('admin/views/mausac/index.php');