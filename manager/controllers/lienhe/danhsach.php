<?php
$sql = 'SELECT * FROM lienhe ORDER BY ngaytao DESC ';
$data = select($sql);
echo json_encode($data);
?>