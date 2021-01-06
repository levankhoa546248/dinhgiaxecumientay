<?php
if (!empty($_POST)) {
    $id = $_POST['id'];
    $ngaytao = date('Y-m-d H:i:s');
    $sql = "UPDATE `hopso` SET `trangthai`= 0, `ngaytao`= '$ngaytao'  WHERE (`id`= $id)";
    $data = update_sql($sql);
    echo $data;
}
?>