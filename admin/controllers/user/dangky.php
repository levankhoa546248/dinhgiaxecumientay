<?php
if (!empty($_POST)) {
    $username = escape($_POST["taikhoan"]);
    $matkhau = md5($_POST["matkhau"]);
    $where = "Username = '" . $username . "'";
    $select = "COUNT(1)";
    $count = select_value_a_record('user', $where, $select);
    if (intval($count) > 0) {
        echo -1;
    } else {
        $user = array(
            'Username' => $username,
            'Password' => $matkhau,
            'Name' => $_POST['hoten'],
            'Phone' => escape($_POST['sodienthoai']),
            'Address' => $_POST['diachi'],
            'CreateDate' => date('Y-m-d')
        );
        $result = insert('user', $user);
        echo json_encode($result);
    }
} else {
    $user = $_SESSION['user'];
    require('admin/views/user/dangky.php');
}
?>