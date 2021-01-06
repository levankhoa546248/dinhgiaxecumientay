<?php
$idhangxe = $_POST["idhangxe"];
$sql = "SELECT dx.*, hx.tenhang as tenhangxe FROM dongxe dx LEFT JOIN hangxe hx ON dx.idhangxe = hx.id 
WHERE (( $idhangxe = -1) OR ( $idhangxe != -1 AND dx.idhangxe = $idhangxe)) AND dx.trangthai = 1 ORDER BY dx.ngaytao DESC ";
$data = select($sql);
echo json_encode($data);
?>