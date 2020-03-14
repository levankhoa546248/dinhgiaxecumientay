<?php
require_once('admin/models/users.php');
require_once ('lib/dbConnect.php');

if (!empty($_POST)) {
    $user_add = array(
        'Id' => 0,
        'tennhadautu' => $_POST['tennhadautu'],
        'sodienthoai' => escape($_POST['sodienthoai']),
        'diachi' => escape($_POST['diachi'])
    );
    $uid = insert('nhadautu', $user_add);
    header('location:admin.php?controller=nhadautu&action=list');
}
$title = "Thêm nhà đầu tư";
require('admin/views/nhadautu/add.php');