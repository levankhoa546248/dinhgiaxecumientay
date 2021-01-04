<?php
if (!empty($_POST)) {
    $username = escape($_POST['username']);
    $email = escape($_POST['email']);
    $sql = "SELECT count(1) as bool FROM nhanvien nv WHERE nv.username = '$username' AND nv.email = '$email' LIMIT 0,1";
    $result = select_1_record($sql);
    echo $result["bool"];
}