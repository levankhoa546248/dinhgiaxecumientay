<?php
//load model
require_once('admin/models/groups.php');
$title = 'Danh mục hãng xe';
$user = $_SESSION['user'];
$groups = get_all('subcategory', '');
//load view
require('admin/views/group/index.php');