<?php
$sql = 'SELECT * FROM mausac WHERE trangthai = 1 ORDER BY ngaytao DESC ';
$data = select($sql);
echo json_encode($data);
?>