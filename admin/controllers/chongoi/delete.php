<?php
//load model
require_once('admin/models/groups.php');
$gid = intval($_GET['gid']);
$chongoi = array(
    'trangthai' => 0
);
$where = ' id = ' . $gid;
update('chongoi', $chongoi, $where);
header('location:admin.php?controller=chongoi');