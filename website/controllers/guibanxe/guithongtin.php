<?php
if (isset($_POST)) {
    $hoten = $_POST["hoten"];
    $dienthoai = $_POST["dienthoai"];
    $diachi = $_POST["diachi"];
    $thongtinxe = $_POST["thongtinxe"];
    $giabanmongmuon = $_POST["giabanmongmuon"];
    $xeguiban = array(
        'hoten' => escape($hoten),
        'dienthoai' => escape($dienthoai),
        'diachi' => escape($diachi),
        'thongtinxe' => escape($thongtinxe),
        'giabanmongmuon' => escape($giabanmongmuon)
    );
    $result = insert("xeguiban", $xeguiban);
    echo $result;
}