<?php
$sql = 'SELECT
	xdg.id,
	xdg.trangthai,
	xdg.ngaytao,
	xdg.hoten,
	xdg.dienthoai,
	xdg.diachi,
	xdg.thongtinxe,
	xdg.giabanmongmuon,
	xdg.hangxe,
	xdg.dongxe
FROM
	xedinhgia AS xdg
ORDER BY
	xdg.ngaytao DESC';
$data = select($sql);
echo json_encode($data);
?>