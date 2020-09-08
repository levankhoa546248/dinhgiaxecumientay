<?php
if (isset($_POST)) {
    $hoten = $_POST["hoten"];
    $dienthoai = $_POST["dienthoai"];
    $diachi = $_POST["diachi"];
    $thongtinxe = $_POST["thongtinxe"];
    $giabanmongmuon = $_POST["giabanmongmuon"];
    $xeguiban = array(
        'hoten' => ucwords($hoten),
        'dienthoai' => escape($dienthoai),
        'diachi' => $diachi,
        'thongtinxe' => $thongtinxe,
        'giabanmongmuon' => escape($giabanmongmuon),
        'ngaytao' => date('Y-m-d')
    );
    $result = insert("xeguiban", $xeguiban);
    echo $result;
}