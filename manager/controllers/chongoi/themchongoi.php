<?php
if (!empty($_POST)) {
    $tenchongoi = escape($_POST['tenchongoi']);
    $sql = "INSERT INTO chongoi(tenchongoi) VALUES ('$tenchongoi')";
    $data = insert_sql($sql);
    echo $data;
}
?>