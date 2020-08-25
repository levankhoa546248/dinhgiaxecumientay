<?php
//load model
require_once('admin/models/users.php');
if (!empty($_POST)) {
    $chongoi = array(
        'id' => intval($_POST['id']),
        'name' => escape($_POST['name'])
    );
    save('chongoi', $chongoi);
    header('location:admin.php?controller=chongoi');
}
$title = 'Thêm chỗ ngồi';
$user = $_SESSION['user'];
//load view
require('admin/views/chongoi/add.php');