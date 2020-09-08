<?php
$id = intval($_POST['id']);
$result = delete('xetimmua', 'id = ' . $id);
echo 1;