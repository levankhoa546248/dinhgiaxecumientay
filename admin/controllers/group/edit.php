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
if (isset($_GET['gid'])) $gid = intval($_GET['gid']); else $gid = 0;
$title = 'Sửa nhóm danh mục';
$user = $_SESSION['user'];
$subcategories = select_1_record('SELECT * FROM subcategory WHERE Id = '. $gid);
//load view
require('admin/views/group/edit.php');