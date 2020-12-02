<?php
if (isset($_POST)) {
    $hoten = $_POST["hoten"];
    $dienthoai = $_POST["dienthoai"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $lienlac = array(
        'hoten' => ucwords($hoten),
        'Phone' => escape($dienthoai),
        'Email' => $email,
        'Message' => $message,
        'ngaytao' => date('Y-m-d H:m:s')
    );
    $result = insert("contactinfo", $lienlac);
    echo $result;
}