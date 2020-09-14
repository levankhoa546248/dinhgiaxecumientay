<?php
//load model
require_once('admin/models/groups.php');
$title = 'Danh mục hộp số';
$user = $_SESSION['user'];
$hopsos = get_select_nested('SELECT id, name FROM hopso where trangthai = 1');
//load view
require('admin/views/hopso/index.php');