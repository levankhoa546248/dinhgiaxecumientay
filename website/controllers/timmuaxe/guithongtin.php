<?php
if (isset($_POST)) {
    $hoten = $_POST["hoten"];
    $dienthoai = $_POST["dienthoai"];
    $diachi = $_POST["diachi"];
    $thongtinxe = $_POST["thongtinxe"];
    $giamuamongmuon = $_POST["giamuamongmuon"];
    $xetimmua = array(
        'hoten' => ucwords($hoten),
        'dienthoai' => escape($dienthoai),
        'diachi' => ($diachi),
        'thongtinxe' => ($thongtinxe),
        'giamuamongmuon' => ($giamuamongmuon),
        'ngaytao' => date('Y-m-d')
    );
    $result = insert("xetimmua", $xetimmua);
    echo $result;
}