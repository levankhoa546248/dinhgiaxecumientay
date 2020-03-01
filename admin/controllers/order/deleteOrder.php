<?php
require_once("../dbConnect.php");
$db = new DBController();
date_default_timezone_set("Asia/Ho_Chi_Minh");
if (!empty($_POST)) {
    $id = isset($_POST['id']) ? empty($_POST['id']) ? '0' : intval($_POST['id']) : '0';
    $sql = "DELETE FROM ordersdetail WHERE ordersid=$id";
    if (!mysqli_query($db->connectDB(), $sql))
    {
        echo 0;
    }else{
        $result = $db -> delete('orders', $id);
        echo json_encode($result);
    }
} else {
    echo 0;
}
?>