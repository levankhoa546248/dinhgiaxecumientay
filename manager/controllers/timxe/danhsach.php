<?php
$sql = 'SELECT * FROM xetimmua ORDER BY ngaytao DESC ';
$data = select($sql);
echo json_encode($data);
?>