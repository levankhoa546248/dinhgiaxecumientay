<?php
$sql = 'SELECT * FROM hangxe WHERE trangthai = 1 ORDER BY ngaytao DESC ';
$data = select($sql);
echo json_encode($data);
?>