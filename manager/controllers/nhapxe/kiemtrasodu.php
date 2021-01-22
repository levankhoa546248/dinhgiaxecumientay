<?php
if (!empty($_POST)) {
    $id = $_POST["idchudautu"];
    $sodu = select_1_record("SELECT sodu FROM chudautu WHERE id = $id AND trangthai = 1 ORDER BY ngaytao DESC");
    echo $sodu["sodu"];
}
?>