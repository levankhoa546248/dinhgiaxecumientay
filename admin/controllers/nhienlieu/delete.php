<?php
//load model
require_once('admin/models/groups.php');
$gid = intval($_GET['gid']);
$nhienlieu = array(
    'trangthai' => 0
);
$where = ' id = ' . $gid;
update('nhienlieu', $nhienlieu, $where);
header('location:admin.php?controller=nhienlieu');