<?php
$idxe = $_GET["idxe"];
$sqlha = 'SELECT duongdan FROM hinhanhxe WHERE idxe =' . $idxe;
$hinhanhxe = select($sqlha);
$result = "";
for ($k = 0; $k < count($hinhanhxe); $k++) {
    if ($k == count($hinhanhxe) - 1) {
        $result .= PATH_URL . "/". $hinhanhxe[$k]["duongdan"];
    } else {
        $result .= PATH_URL . "/".  $hinhanhxe[$k]["duongdan"] . ",";
    }
}
echo $result;
?>