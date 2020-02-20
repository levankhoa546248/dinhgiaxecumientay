<?php
require_once("../dbConnect.php");
$db = new DBController();
date_default_timezone_set("Asia/Ho_Chi_Minh");
if (!empty($_POST)) {
    $custumername = isset($_POST['custumername']) ? empty($_POST['custumername']) ? '0' : intval($_POST['custumername']) : '0';
    $result = $db -> delete('orders', $custumername);
    echo json_encode($result);
} else {
    echo 0;
}
?>