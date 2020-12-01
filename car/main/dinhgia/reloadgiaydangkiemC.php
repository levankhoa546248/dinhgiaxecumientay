<?php
//load view
$idguiban = $_GET["idguiban"];
$giaydangkiem = 'SELECT id, duongdan FROM ha_giaydangkiem WHERE idguiban =' . $idguiban;
$data = select($giaydangkiem);
$preview = "";

for ($k = 0; $k < count($data); $k++) {
    if ($k == count($data) - 1) {
        $preview .= "\"" . $data[$k]["duongdan"] . "\"";
    } else {
        $preview .= "\"" . $data[$k]["duongdan"] . "\"" . ",";
    }
}
$config = select('SELECT id as \'key\' FROM ha_giaydangkiem WHERE idguiban =' . $idguiban);
$previewconfig = json_encode($config);
require('car/main/dinhgia/giaydangkiem.php');