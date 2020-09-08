<?php
if (!empty($_POST)) {
    $id = $_POST['id'];
    $hoten = $_POST['hoten'];
    $dienthoai = $_POST['dienthoai'];
    $diachi = $_POST['diachi'];
    $thongtinxe = $_POST['thongtinxe'];
    $giabanmongmuon = $_POST['giabanmongmuon'];
    echo numRows('UPDATE xeguiban SET trangthai = 1 WHERE id = ' . $id);
}