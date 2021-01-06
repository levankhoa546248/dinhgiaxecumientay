<?php
if (!empty($_POST)) {
    $ten = escape($_POST['ten']);
    $sql = "INSERT INTO namsanxuat(ten) VALUES ('$ten')";
    $data = insert_sql($sql);
    echo $data;
}
?>