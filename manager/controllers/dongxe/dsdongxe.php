<?php
$sql = 'SELECT dx.*, hx.tenhang as tenhangxe FROM dongxe dx LEFT JOIN hangxe hx ON dx.idhangxe = hx.id WHERE dx.trangthai = 1 ORDER BY dx.ngaytao DESC ';
$data = select($sql);
echo json_encode($data);
?>