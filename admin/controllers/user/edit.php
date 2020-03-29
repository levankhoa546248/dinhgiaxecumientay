<?php
if (!empty($_POST)) {
    $id = $_POST["id"];
    $username = escape($_POST["taikhoan"]);
    $matkhau = md5($_POST["matkhau"]);
    $where = "Username = '" . $username . "'";
    $select = "COUNT(1)";
    $count = select_value_a_record('user', $where, $select);
    $user = array(
        'Username' => $username,
        'Password' => $matkhau,
        'Name' => $_POST['hoten'],
        'Phone' => escape($_POST['sodienthoai']),
        'Address' => $_POST['diachi'],
        'CreateDate' => date('Y-m-d')
    );
    $result = update('user', $user, 'Id = ' . $id);
    header('location:admin.php?controller=user&action=list');
} else {
    $title = 'Cập nhật nhân viên';
    $user = $_SESSION['user'];
    require('admin/views/user/edit.php');
}