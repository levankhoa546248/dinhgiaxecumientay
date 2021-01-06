<?php
if (!empty($_POST)) {
    $tenhopso = escape($_POST['tenhopso']);
    $sql = "INSERT INTO hopso(tenhopso) VALUES ('$tenhopso')";
    $data = insert_sql($sql);
    echo $data;
}
?>