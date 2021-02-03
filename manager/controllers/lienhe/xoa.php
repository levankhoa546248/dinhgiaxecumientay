<?php
if (!empty($_POST)) {
    $id = $_POST['id'];
    $ngaytao = date('Y-m-d H:i:s');
    $sql = "DELETE FROM lienhe WHERE (`id`= $id)";
    $data = update_sql($sql);
    echo $data;
}
?>