<?php
if (!empty($_POST)) {
    $id = $_POST['id'];
    $trangthai = $_POST['trangthai'];
    $ngaytao = date('Y-m-d H:i:s');
    $sql = "UPDATE `lienhe` SET `trangthai` = '$trangthai', `ngaytao`= '$ngaytao'  WHERE (`id`= $id)";
    $data = update_sql($sql);
    echo $data;
}
?>