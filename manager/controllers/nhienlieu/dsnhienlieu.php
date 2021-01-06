<?php
$sql = 'SELECT * FROM nhienlieu WHERE trangthai = 1 ORDER BY ngaytao DESC ';
$data = select($sql);
echo json_encode($data);
?>