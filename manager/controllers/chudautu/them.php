<?php
if (!empty($_POST)) {
    $idnhanvien = $_POST['idnhanvien'];
    if ($idnhanvien !== '') {
        $idnhanvien = $_POST['idnhanvien'];
        $sql = "INSERT INTO `chudautu` (`hoten`, `avatar`, `email`, `diachi`, `sodienthoai`, `facebook`, `zalo`) 
            SELECT	hoten,	avatar,	email,	diachi,	sodienthoai,	facebook,	zalo FROM	nhanvien WHERE	id = $idnhanvien";
        $data = insert_sql($sql);
        echo $data;
    } else {
        $hoten = escape($_POST['hoten']);
        $email = $_POST['email'];
        $sodienthoai = $_POST['sodienthoai'];
        $facebook = $_POST['facebook'];
        $zalo = $_POST['zalo'];
        $diachi = $_POST['diachi'];
        if (!empty($_FILES)) {
            $avatar = "data:" . $_FILES['images']['type'] . ";base64," . base64_encode(file_get_contents($_FILES['images']['tmp_name']));
        } else {
            $avatar = '';
        }
        $sql = "INSERT INTO `chudautu` (`hoten`, `avatar`, `email`, `diachi`, `sodienthoai`, `facebook`, `zalo`) 
            VALUES ('$hoten', '$avatar', '$email', '$diachi', '$sodienthoai', '$facebook', '$zalo')";
        $data = insert_sql($sql);
        echo $data;
    }
}
?>