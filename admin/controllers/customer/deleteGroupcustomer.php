<?php
require_once("../dbConnect.php");
$db = new DBController();
if (!empty($_POST)) {
    $id = isset($_POST['id']) ? empty($_POST['id']) ? '0' : intval($_POST['id']) : '0';
    $result = $db -> delete('customergroup', $id);
    echo json_encode($result);
} else {
    echo 0;
}
?>