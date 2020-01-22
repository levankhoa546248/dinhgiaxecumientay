<?php
require_once("../dbConnect.php");
$db = new DBController();
date_default_timezone_set("Asia/Ho_Chi_Minh");
if (!empty($_POST)) {
    $orderid = isset($_POST['orderid']) ? empty($_POST['orderid']) ? '0' : intval($_POST['orderid']) : '0';
    $ordername = $_POST['ordername'];
    $ordercustomerid = $_POST['ordercustomerid'];
    $ordercustomername = $_POST['ordercustomername'];
    $ordercustomertypeid = $_POST['ordercustomertypeid'];
    $ordercustomertypename = $_POST['ordercustomertypename'];
    $orderemployeeid = $_POST['orderemployeeid'];
    $orderemployeename = $_POST['orderemployeename'];
    $orderdate = $_POST['orderdate'];
    $createdate = date('Y-m-d H:m:i');
    $option = array(
        'id' => $orderid,
        'name' => $ordername,
        'createdate' => $createdate,
        'orderdate' => $orderdate,
        'employeesid' => $orderemployeeid,
        'customerid' => $ordercustomerid
    );
    $result = $db->save('orders', $option);
    echo json_encode($result);
} else {
    echo 0;
}
?>