<?php
$sql = 'SELECT * FROM chongoi WHERE trangthai = 1 ORDER BY ngaytao DESC ';
$data = select($sql);
echo json_encode($data);
?>