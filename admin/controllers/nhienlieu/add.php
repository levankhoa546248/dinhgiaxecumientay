<?php
//load model
require_once('admin/models/users.php');
if (!empty($_POST)) {
    $nhienlieu = array(
        'id' => intval($_POST['id']),
        'name' => escape($_POST['name'])
    );
    save('nhienlieu', $nhienlieu);
    header('location:admin.php?controller=nhienlieu');
}
$title = 'Thêm nhiên liệu';
$user = $_SESSION['user'];
//load view
require('admin/views/nhienlieu/add.php');