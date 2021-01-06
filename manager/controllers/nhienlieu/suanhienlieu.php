<?php
if (!empty($_POST)) {
    $id = $_POST['id'];
    $tennhienlieu = escape($_POST['tennhienlieu']);
    $ngaytao = date('Y-m-d H:i:s');
    $sql = "UPDATE `nhienlieu` SET `tennhienlieu`='$tennhienlieu', `ngaytao`= '$ngaytao'  WHERE (`id`= $id)";
    $data = update_sql($sql);
    echo $data;
}
?>