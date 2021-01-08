<?php
$sql = 'SELECT * FROM xetimmua WHERE trangthai != 0 ORDER BY ngaytao DESC ';
$data = select($sql);
echo json_encode($data);
?>