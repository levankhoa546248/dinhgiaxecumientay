<?php
//load model
require_once('admin/models/users.php');
if (!empty($_POST)) {
    $xuatxu = array(
        'id' => intval($_POST['id']),
        'name' => escape($_POST['name'])
    );
    save('xuatxu', $xuatxu);
    header('location:admin.php?controller=xuatxu');
}
$title = 'Thêm xuất xứ';
$user = $_SESSION['user'];
//load view
require('admin/views/xuatxu/add.php');