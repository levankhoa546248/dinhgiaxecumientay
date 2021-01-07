<?php
if (!empty($_POST)) {
    $id = $_POST['id'];
    $ten = escape($_POST['ten']);
    $ngaytao = date('Y-m-d H:i:s');
    $sql = "UPDATE `chucvu` SET `ten`='$ten', `ngaytao`= '$ngaytao'  WHERE (`id`= $id)";
    $data = update_sql($sql);
    echo $data;
}
?>