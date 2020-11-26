<?php
if (isset($_POST)) {
    $idguiban = $_POST["idguiban"];
    $xeguiban = array(
        'trangthai' => 1,
        'ngaytao' => date('Y-m-d')
    );
    $result = update("xeguiban", $xeguiban, 'id=' . $idguiban);
    echo $result;
}