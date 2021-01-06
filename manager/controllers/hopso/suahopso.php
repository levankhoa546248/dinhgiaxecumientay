<?php
if (!empty($_POST)) {
    $id = $_POST['id'];
    $tenhopso = escape($_POST['tenhopso']);
    $ngaytao = date('Y-m-d H:i:s');
    $sql = "UPDATE `hopso` SET `tenhopso`='$tenhopso', `ngaytao`= '$ngaytao'  WHERE (`id`= $id)";
    $data = update_sql($sql);
    echo $data;
}
?>