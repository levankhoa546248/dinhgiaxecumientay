<?php
if (!empty($_POST)) {
    $id = $_POST['id'];
    $idnhanvien = $_POST['idnhanvien'];
    $hoten = escape($_POST['hoten']);
    $email = $_POST['email'];
    $sodienthoai = $_POST['sodienthoai'];
    $facebook = $_POST['facebook'];
    $zalo = $_POST['zalo'];
    $diachi = $_POST['diachi'];
    if (!empty($_FILES)) {
        $avatar = "data:" . $_FILES['images']['type'] . ";base64," . base64_encode(file_get_contents($_FILES['images']['tmp_name']));
        $sql = "UPDATE `chudautu` SET `hoten`='$hoten', `avatar`='$avatar', `email`='$email', `diachi`='$diachi', `sodienthoai`='$sodienthoai', 
        `facebook`='$facebook', `zalo`='$zalo' WHERE (`id`=$id)";
    } else {
        $avatar = '';
        $sql = "UPDATE `chudautu` SET `hoten`='$hoten', `email`='$email', `diachi`='$diachi', `sodienthoai`='$sodienthoai', 
        `facebook`='$facebook', `zalo`='$zalo' WHERE (`id`=$id)";
    }
    $data = update_sql($sql);
    echo $data;
}
?>