<?php
if (!empty($_POST)) {
    $hoten = empty(escape($_POST["hoten"])) ? null : escape($_POST["hoten"]);
    $dienthoai = empty(escape($_POST["dienthoai"])) ? null : escape($_POST["dienthoai"]);
    $diachi = empty(escape($_POST["diachi"])) ? null : escape($_POST["diachi"]);
    $hangxe = empty(escape($_POST["hangxe"])) ? null : escape($_POST["hangxe"]);
    $dongxe = empty(escape($_POST["dongxe"])) ? null : escape($_POST["dongxe"]);
    $giabanmongmuon = empty(escape($_POST["giabanmongmuon"])) ? null : escape($_POST["giabanmongmuon"]);
    $thongtinxe = empty(escape($_POST["thongtinxe"])) ? null : escape($_POST["thongtinxe"]);
    $sqlxe = "INSERT INTO `xedinhgia` (`hoten`, `dienthoai`, `diachi`, `thongtinxe`, `giabanmongmuon`, `hangxe`, `dongxe`)
     VALUES ('$hoten', '$dienthoai', '$diachi', '$thongtinxe', '$giabanmongmuon', '$hangxe', '$dongxe')";
    $isxe = insert_sql($sqlxe);
    if ($isxe > 0) {
        if (!empty($_FILES)) {
            $counthdk = count($_FILES['hinhdangkiems']['tmp_name']);
            for ($k = 0; $k < $counthdk; $k++) {
                $hdk = "data:" . $_FILES['hinhdangkiems']['type'][$k] . ";base64," . base64_encode(file_get_contents($_FILES['hinhdangkiems']['tmp_name'][$k]));
                $sqlhdk = "INSERT INTO `hinhdangkiem` (`iddinhgia`, `images`) VALUES ($isxe, '$hdk')";
                $ishdk = insert_sql($sqlhdk);
            }
            $countima = count($_FILES['hinhdinhgias']['tmp_name']);
            for ($k = 0; $k < $countima; $k++) {
                $hinhanh = "data:" . $_FILES['hinhdinhgias']['type'][$k] . ";base64," . base64_encode(file_get_contents($_FILES['hinhdinhgias']['tmp_name'][$k]));
                $sqlhinh = "INSERT INTO `hinhdinhgia` (`iddinhgia`, `images`) VALUES ($isxe, '$hinhanh')";
                $ishinh = insert_sql($sqlhinh);
            }
        }
        echo $isxe;
    } else {
        echo -1;
    }
}
?>