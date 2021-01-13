<?php
$idxe = intval($_POST['idxe']);
$sql = "SELECT
	xdt.idxe,
	xdt.id,
	xdt.idchudautu,
	xdt.trangthai,
	xdt.ngaytao,
	xdt.tiendautu,
	xdt.taidautu,
	dt.hoten
FROM xedautu AS xdt
INNER JOIN chudautu AS dt ON dt.id = xdt.idchudautu
INNER JOIN `xe` AS x ON x.id = xdt.idxe
WHERE (($idxe = 0 ) OR ($idxe != 0 AND xdt.idxe = $idxe)) 
AND xdt.trangthai = 1 
ORDER BY xdt.ngaytao DESC ";
$data = get_select_nested($sql);
echo json_encode($data);
?>