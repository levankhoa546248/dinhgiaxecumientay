<?php
//load model
require_once('admin/models/groups.php');
$gid = intval($_GET['gid']);
$dongxe = array(
    'trangthai' => 0
);
$whdongxe = ' id = ' . $gid;
update('dongxe', $dongxe, $whdongxe);
header('location:admin.php?controller=dongxe');