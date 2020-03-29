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
require('admin/views/product/edit.php');