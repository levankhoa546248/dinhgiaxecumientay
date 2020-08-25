<?php
//load model
require_once('admin/models/users.php');
if (!empty($_POST)) {
    $dongxe = array(
        'dongxe' => escape($_POST['name']),
        'idhangxe' => intval($_POST['hangxe'])
    );
    $whdongxe = ' id = ' . intval($_POST['id']);
    update('dongxe', $dongxe, $whdongxe);
    header('location:admin.php?controller=dongxe');
}
if (isset($_GET['gid'])) $gid = intval($_GET['gid']); else $gid = 0;
$title = 'Sửa dòng xe';
$user = $_SESSION['user'];
$dongxes = select_1_record('SELECT dx.id, dx.dongxe, dx.idhangxe, sub.`Name` as tenhangxe FROM dongxe dx
LEFT JOIN subcategory sub ON dx.idhangxe = sub.Id
where dx.id = ' . $gid);
//load view
$subcategories = get_all('subcategory', array(
    'select' => 'Id,Name',
    'order_by' => 'Name'
));
require('admin/views/dongxe/edit.php');