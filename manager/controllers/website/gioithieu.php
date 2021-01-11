<?php
if (!empty($_POST)) {
    if (!empty($_POST["id"])) {
        $id = $_POST["id"];
        $tieude = escape($_POST["tieude"]);
        $noidung = escape($_POST["noidung"]);
        $result = update_sql("UPDATE `gioithieu` SET `tieude`='$tieude', `noidung`='$noidung' WHERE `id` = $id");
        echo $result;
    } else {
        $tieude = $_POST["tieude"];
        $noidung = $_POST["noidung"];
        $sql = "INSERT INTO `gioithieu` (`tieude`, `noidung`) VALUES ('$tieude', '$noidung')";
        $result = insert_sql($sql);
        echo $result;
    }
} else {
    $title = 'Website | Giới thiệu';
    $header = 'Cập nhật phần giới thiệu';
    $content = 'Bảng điều khiển';
    $gioithieu = select_1_record("SELECT * FROM gioithieu");
    require('manager/pages/website/gioithieu.php');
}
?>