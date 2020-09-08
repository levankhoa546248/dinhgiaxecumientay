<?php
if (isset($_POST)) {
    $hoten = $_POST["hoten"];
    $dienthoai = $_POST["dienthoai"];
    $diachi = $_POST["diachi"];
    $thongtinxe = $_POST["thongtinxe"];
    $giamuamongmuon = $_POST["giamuamongmuon"];
    $xetimmua = array(
        'hoten' => escape($hoten),
        'dienthoai' => escape($dienthoai),
        'diachi' => escape($diachi),
        'thongtinxe' => escape($thongtinxe),
        'giamuamongmuon' => escape($giamuamongmuon)
    );
    $result = insert("xetimmua", $xetimmua);
    echo $result;
}