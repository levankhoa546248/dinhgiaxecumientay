<?php
//load model
require_once('admin/models/users.php');
if (!empty($_POST)) {
    $namsanxuat = array(
        'id' => intval($_POST['id']),
        'name' => escape($_POST['name'])
    );
    save('namsanxuat', $namsanxuat);
    header('location:admin.php?controller=namsanxuat');
}
$title = 'Thêm năm sản xuất';
$user = $_SESSION['user'];
//load view
require('admin/views/namsanxuat/add.php');