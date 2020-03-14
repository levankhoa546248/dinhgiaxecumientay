<?php
//load model
require_once('admin/models/users.php');
//if form submit
if (!empty($_POST)) {
    $array = array(
        'tennhadautu' => escape($_POST['tennhadautu']),
        'sodienthoai' => escape($_POST['sodienthoai']),
        'diachi' => escape($_POST['diachi'])
    );
    $where = 'manhadautu = ' . $_POST['manhadautu'];
    $result = update('nhadautu', $array, $where);
    header('location:admin.php?controller=nhadautu&action=list');
}
if (isset($_GET['uid'])) $uid = intval($_GET['uid']); else $uid = 0;
$title = 'Cập nhật nhà đầu tư';
$user = $_SESSION['user'];
$sql = 'SELECT * FROM nhadautu WHERE manhadautu = ' . $uid;
$info = select_1_record($sql);
//load view
require('admin/views/nhadautu/edit.php');