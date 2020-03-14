<?php
//load model
require_once('admin/models/users.php');
if (!empty($_POST)) {
    $subcategory = array(
        'Id' => intval($_POST['id']),
        'Name' => escape($_POST['name'])
    );
    save('subcategory', $subcategory);
    header('location:admin.php?controller=group');
}
$title = 'Thêm hãng xe';
$user = $_SESSION['user'];
//load view
require('admin/views/group/add.php');