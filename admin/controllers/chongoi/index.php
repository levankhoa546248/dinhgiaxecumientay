<?php
//load model
require_once('admin/models/groups.php');
$title = 'Danh mục hộp số';
$user = $_SESSION['user'];
$chongois = get_select_nested('SELECT id, name FROM chongoi where trangthai = 1');
//load view
require('admin/views/chongoi/index.php');