<?php
//load model
require_once('admin/models/users.php');
if (!empty($_POST)) {
    $mausac = array(
        'id' => intval($_POST['id']),
        'name' => escape($_POST['name'])
    );
    save('mausac', $mausac);
    header('location:admin.php?controller=mausac');
}
$title = 'Thêm màu sắc';
$user = $_SESSION['user'];
//load view
require('admin/views/mausac/add.php');