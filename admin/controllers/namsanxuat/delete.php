<?php
//load model
require_once('admin/models/groups.php');
$gid = intval($_GET['gid']);
$namsanxuat = array(
    'trangthai' => 0
);
$where = ' id = ' . $gid;
update('namsanxuat', $namsanxuat, $where);
header('location:admin.php?controller=namsanxuat');