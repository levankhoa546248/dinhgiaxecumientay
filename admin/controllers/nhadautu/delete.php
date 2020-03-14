<?php
//load model
require_once('admin/models/users.php');
$where = 'manhadautu = ' . intval($_GET['uid']);
delete('nhadautu', $where);
header('location:admin.php?controller=nhadautu&action=list');