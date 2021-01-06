<?php
if (!empty($_POST)) {
    $id = $_POST['id'];
    $tenhangxe = escape($_POST['tenhangxe']);
    $ngaytao = date('Y-m-d H:i:s');
    $sql = "UPDATE `hangxe` SET `tenhang`='$tenhangxe', `ngaytao`= '$ngaytao'  WHERE (`id`= $id)";
    $data = update_sql($sql);
    echo $data;
}
?>