<?php
$idxe = intval($_POST['idxe']);
$sql = "SELECT
vdt.idxe,
vdt.id,
vdt.idchudautu,
vdt.trangthai,
vdt.ngaytao,
vdt.tiendautu,
vdt.taidautu,
dt.hoten
FROM
vondautu AS vdt
INNER JOIN chudautu AS dt ON dt.id = vdt.idchudautu
INNER JOIN `xe` AS x ON x.id = vdt.idxe
WHERE
vdt.idxe = $idxe AND
vdt.trangthai = 1
ORDER BY
vdt.ngaytao DESC";
$data = get_select_nested($sql);
echo json_encode($data);
?>