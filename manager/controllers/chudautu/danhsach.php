<?php
$data = select("SELECT * FROM chudautu WHERE trangthai = 1 ORDER BY ngaytao DESC ");
echo json_encode($data);
?>