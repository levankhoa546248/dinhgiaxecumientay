<?php
if (!empty($_POST)) {
    $tenhangxe = escape($_POST['tenhangxe']);
    $sql = "INSERT INTO hangxe(tenhang) VALUES ('$tenhangxe')";
    $data = insert_sql($sql);
    echo $data;
}
?>