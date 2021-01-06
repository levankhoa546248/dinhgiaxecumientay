<?php
if (!empty($_POST)) {
    $id = $_POST['id'];
    $tendongxe = escape($_POST['tendongxe']);
    $idhangxe = $_POST['idhangxe'];
    $ngaytao = date('Y-m-d H:i:s');
    $sql = "UPDATE `dongxe` SET `tendongxe`='$tendongxe', `idhangxe`=$idhangxe, `ngaytao`='$ngaytao' WHERE (`id`=$id)";
    $data = update_sql($sql);
    echo $data;
}
?>