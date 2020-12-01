<?php
if (isset($_GET["idguiban"])) {
    $idguiban = $_GET["idguiban"];
    $xeguiban = 'SELECT * FROM xeguiban WHERE id =' . $idguiban;
    $data = select_1_record($xeguiban);
//
    $hinhxeguiban = 'SELECT id, duongdan FROM hinhanhguibanxe WHERE idguiban =' . $idguiban;
    $dataxeguiban = select($hinhxeguiban);
    $prehinhxeguiban = "";

    for ($k = 0; $k < count($dataxeguiban); $k++) {
        if ($k == count($dataxeguiban) - 1) {
            $prehinhxeguiban .= "\"" . $dataxeguiban[$k]["duongdan"] . "\"";
        } else {
            $prehinhxeguiban .= "\"" . $dataxeguiban[$k]["duongdan"] . "\"" . ",";
        }
    }
    $configxeguiban= select('SELECT id as \'key\' FROM hinhanhguibanxe WHERE idguiban =' . $idguiban);
    $preconfxeguiban = json_encode($configxeguiban);
//
    $giaydangkiem = 'SELECT id, duongdan FROM ha_giaydangkiem WHERE idguiban =' . $idguiban;
    $datagiaydangkiem = select($giaydangkiem);
    $pregiaydangkiem= "";

    for ($k = 0; $k < count($datagiaydangkiem); $k++) {
        if ($k == count($datagiaydangkiem) - 1) {
            $pregiaydangkiem .= "\"" . $datagiaydangkiem[$k]["duongdan"] . "\"";
        } else {
            $pregiaydangkiem .= "\"" . $datagiaydangkiem[$k]["duongdan"] . "\"" . ",";
        }
    }
    $configgiaydangkiem = select('SELECT id as \'key\' FROM ha_giaydangkiem WHERE idguiban =' . $idguiban);
    $precofgiaydangkiem = json_encode($configgiaydangkiem);
    require('car/main/dinhgia/hosoguibanxe.php');
}