<?php
if (isset($_POST)) {
    $hoten = ucwords($_POST["hoten"]);
    $dienthoai = escape($_POST["dienthoai"]);
    $email = $_POST["email"];
    $message = escape($_POST["message"]);
    $sql = "INSERT INTO `lienhe` (`hoten`, `dienthoai`, `email`, `noidung`) VALUES ('$hoten', '$dienthoai', '$email', '$message')";
    $data = insert_sql($sql);
    echo $data;
}