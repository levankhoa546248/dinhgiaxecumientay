<?php
if (!empty($_POST)) {
    $password = md5(escape($_POST['password']));
    $username = escape($_GET['username']);
    $arr = array(
        'password' => $password
    );
    $result = update('nhanvien', $arr, "username = '$username'");
    echo $result;
}