<?php
//load model
require_once('admin/models/groups.php');
$title = 'Danh mục hãng xe';
$user = $_SESSION['user'];
$dongxes = get_select_nested('SELECT dx.id, dx.dongxe, dx.idhangxe, sub.`Name` as tenhangxe FROM dongxe dx
LEFT JOIN subcategory sub ON dx.idhangxe = sub.Id where dx.trangthai = 1');
//load view
require('admin/views/dongxe/index.php');