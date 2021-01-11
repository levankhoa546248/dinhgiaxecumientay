<?php
if (!empty($_POST)) {
    $id = $_POST['id'];
    $hoten = escape($_POST['hoten']);
    $email = escape($_POST['email']);
    $diachi = escape($_POST['diachi']);
    $sodienthoai = escape($_POST['sodienthoai']);
    $facebook = escape($_POST['facebook']);
    $zalo = escape($_POST['zalo']);
    $chucvu = $_POST['chucvu'];
    if (!empty($_FILES)) {
        $avatar = "data:" . $_FILES['images']['type'] . ";base64," . base64_encode(file_get_contents($_FILES['images']['tmp_name']));
    } else {
        $avatar = '';
    }
    $nhanvien = array(
        'hoten' => $hoten,
        'email' => $email,
        'diachi' => $diachi,
        'sodienthoai' => $sodienthoai,
        'facebook' => $facebook,
        'zalo' => $zalo,
        'avatar' => $avatar,
        'idchucvu' => $chucvu
    );
    $result = update('nhanvien', $nhanvien, " id = $id");
    echo $result;

}
?>