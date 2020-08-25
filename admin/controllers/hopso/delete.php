<?php
//load model
require_once('admin/models/groups.php');
$gid = intval($_GET['gid']);
$hopso = array(
    'trangthai' => 0
);
$where = ' id = ' . $gid;
update('hopso', $hopso, $where);
header('location:admin.php?controller=hopso');