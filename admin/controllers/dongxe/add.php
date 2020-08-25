<?php
//load model
require_once('admin/models/users.php');
if (!empty($_POST)) {
    $dongxe = array(
        'id' => intval($_POST['id']),
        'dongxe' => escape($_POST['name']),
        'idhangxe' => intval($_POST['hangxe'])
    );
    save('dongxe', $dongxe);
    header('location:admin.php?controller=dongxe');
}
$title = 'Thêm dòng xe';
$user = $_SESSION['user'];
$groups = get_all('subcategory', '');
//load view
require('admin/views/dongxe/add.php');