<?php
if (!empty($_POST)) {
    $idhangxe = $_POST['idhangxe'];
    $tendongxe = escape($_POST['tendongxe']);
    $sql = "INSERT INTO dongxe (`tendongxe`, `idhangxe`) VALUES ('$tendongxe', $idhangxe);";
    $data = insert_sql($sql);
    echo $data;
}
?>