<?php
if (!empty($_POST)) {
    $ten = escape($_POST['ten']);
    $sql = "INSERT INTO mausac(ten) VALUES ('$ten')";
    $data = insert_sql($sql);
    echo $data;
}
?>