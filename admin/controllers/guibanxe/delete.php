<?php
$id = intval($_POST['id']);
$result = delete('xeguiban', 'id = ' . $id);
echo 1;