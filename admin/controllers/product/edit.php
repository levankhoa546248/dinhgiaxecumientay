<?php
$title = 'Bán xe';
$user = $_SESSION['user'];
//Sub category
$subcategories = get_all('subcategory', array(
    'select' => 'Id,Name',
    'order_by' => 'Name'
));
$dsNhaDauTu = select('SELECT * FROM nhadautu');
//load view
$idxe = $_GET["idxe"];
$xe = select_1_record('SELECT * FROM xe WHERE id = ' . $idxe);
$chudautuxe = select(
    'SELECT
            c.id,
            c.idchudautu AS manhadautu,
            c.idxe AS maxedautu,
            FORMAT(c.vondautu, \',\', \'.\') as vondautu,
	        c.taidautu as taidautu,
            c.tile,
            FORMAT(IF(c.tienlai < 0, 0, c.tienlai), \',\', \'.\') as tienlai,
            n.tennhadautu
        FROM
            chudautuxe c
        JOIN nhadautu n ON c.idchudautu = n.manhadautu
        WHERE
            idxe = ' . $idxe
);
$chudautuxejson = json_encode($chudautuxe);
$hinhanhxe = select('SELECT * FROM hinhanhxe WHERE idxe =' . $idxe);
$hinhanhxe_json = json_encode($hinhanhxe);

$sqlha = 'SELECT id, duongdan FROM hinhanhxe WHERE idxe =' . $idxe;
$haxe = select($sqlha);
$resulthax = "";

for ($k = 0; $k < count($haxe); $k++) {
    if ($k == count($haxe) - 1) {
        $resulthax .= "\"" . PATH_URL . "/" . $haxe[$k]["duongdan"] . "\"";
    } else {
        $resulthax .= "\"" . PATH_URL . "/" . $haxe[$k]["duongdan"] . "\"" . ",";
    }
}

$iprvConf = select('SELECT id as \'key\' FROM hinhanhxe WHERE idxe =' . $idxe);
$iprvConf_json = json_encode($iprvConf);

require('admin/views/product/edit.php');