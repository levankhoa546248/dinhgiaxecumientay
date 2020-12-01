<?php
if (isset($_POST)) {
    $idguiban = $_POST["idguiban"];
    $xeguiban = array(
        'ngaytao' => date('Y-m-d'),
        'trangthai' => 1
    );
    $result = update("xeguiban", $xeguiban, ' id = ' . $idguiban);
    echo $result;
}