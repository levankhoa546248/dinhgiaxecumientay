<?php
if (isset($_GET["idtimmua"])) {
    $idtimmua = $_GET["idtimmua"];
    $xetimmua = 'SELECT * FROM xetimmua WHERE id =' . $idtimmua;
    $data = select_1_record($xetimmua);
    require('car/main/timmua/hosotimmuaxe.php');
}