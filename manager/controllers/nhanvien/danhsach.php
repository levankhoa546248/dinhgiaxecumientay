<?php
$sql = 'SELECT nv.*, cv.ten as tenchucvu FROM nhanvien nv LEFT JOIN chucvu cv ON cv.id = nv.idchucvu WHERE nv.trangthai = 1 ORDER BY nv.ngaytao DESC ';
$data = select($sql);
echo json_encode($data);
?>