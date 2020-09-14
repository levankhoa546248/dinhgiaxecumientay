<?php
//load model
require_once('admin/models/users.php');
if (!empty($_POST)) {
    $hopso = array(
        'id' => intval($_POST['id']),
        'name' => escape($_POST['name'])
    );
    save('hopso', $hopso);
    header('location:admin.php?controller=hopso');
}
$title = 'Thêm hộp số';
$user = $_SESSION['user'];
//load view
require('admin/views/hopso/add.php');