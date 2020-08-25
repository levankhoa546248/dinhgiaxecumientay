<?php
//load model
require_once('admin/models/groups.php');
$gid = intval($_GET['gid']);
$mausac = array(
    'trangthai' => 0
);
$where = ' id = ' . $gid;
update('mausac', $mausac, $where);
header('location:admin.php?controller=mausac');