<?php
if (!empty($_POST)) {
    $username = escape($_POST['username']);
    $dupuser = select_1_record("SELECT COUNT(1) AS T FROM nhanvien WHERE username = '$username'");
    if ($dupuser["T"] == "0") {
        $hoten = escape($_POST['hoten']);
        $email = escape($_POST['email']);
        $password = md5($_POST['password']);
        if (!empty($_FILES)) {
            $avatar = base64_encode(file_get_contents($_FILES['images']['tmp_name']));
        } else {
            $avatar = '';
        }
        $nhanvien = array(
            'username' => $username,
            'password' => $password,
            'hoten' => $hoten,
            'avatar' => $avatar,
            'email' => $email
        );
        $result = insert('nhanvien', $nhanvien);
        echo $result;
    } else {
        echo -1;
    }

} else {
    $title = 'Đăng ky';
    require('manager/pages/login/register.php');
}
?>