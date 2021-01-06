<?php
if (!empty($_POST)) {
    $tennhienlieu = escape($_POST['tennhienlieu']);
    $sql = "INSERT INTO nhienlieu(tennhienlieu) VALUES ('$tennhienlieu')";
    $data = insert_sql($sql);
    echo $data;
}
?>