<?php
if (isset($_POST)) {
    $hoten = $_POST["hoten"];
    $dienthoai = $_POST["dienthoai"];
    $diachi = $_POST["diachi"];
    $thongtinxe = $_POST["thongtinxe"];
    $giamuamongmuon = $_POST["giamuamongmuon"];
    $hangxe = $_POST["hangxe"];
    $dongxe = $_POST["dongxe"];
    $xetimmua = array(
        'hoten' => ucwords($hoten),
        'dienthoai' => escape($dienthoai),
        'diachi' => $diachi,
        'thongtinxe' => $thongtinxe,
        'giamuamongmuon' => escape($giamuamongmuon),
        'hangxe' => $hangxe,
        'dongxe' => $dongxe
    );
    $result = insert("xetimmua", $xetimmua);
    echo $result;
}