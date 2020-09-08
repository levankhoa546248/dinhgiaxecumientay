<?php
if (!empty($_POST)) {
    $id = $_POST['id'];
    $hoten = $_POST['hoten'];
    $dienthoai = $_POST['dienthoai'];
    $diachi = $_POST['diachi'];
    $thongtinxe = $_POST['thongtinxe'];
    $giamuamongmuon = $_POST['giamuamongmuon'];
    echo numRows('UPDATE xetimmua SET trangthai = 1 WHERE id = ' . $id);
}