<?php
//load model
require_once('admin/models/groups.php');
$gid = intval($_GET['gid']);
$xuatxu = array(
    'trangthai' => 0
);
$where = ' id = ' . $gid;
update('xuatxu', $xuatxu, $where);
header('location:admin.php?controller=xuatxu');