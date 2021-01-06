<?php
if (!empty($_POST)) {
    $id = $_POST['id'];
    $tenchongoi = escape($_POST['tenchongoi']);
    $ngaytao = date('Y-m-d H:i:s');
    $sql = "UPDATE `chongoi` SET `tenchongoi`='$tenchongoi', `ngaytao`= '$ngaytao'  WHERE (`id`= $id)";
    $data = update_sql($sql);
    echo $data;
}
?>