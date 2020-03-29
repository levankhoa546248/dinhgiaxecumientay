<?php
$sql = 'SELECT * FROM user';
$list = select($sql);
echo json_encode($list);
?>