<?php
require_once('admin/models/users.php');
if (!empty($_POST)) {
    $array = array(
        'tennhadautu' => escape($_POST['tennhadautu']),
        'sodienthoai' => escape($_POST['sodienthoai']),
        'diachi' => escape($_POST['diachi'])
    );
    $result = insert('nhadautu', $array);
    header('location:admin.php?controller=nhadautu&action=list');
}
$title = "Thêm nhà đầu tư";
require('admin/views/nhadautu/add.php');