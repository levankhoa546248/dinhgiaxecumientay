<?php
require_once("../dbConnect.php");
$db = new DBController();
date_default_timezone_set("Asia/Ho_Chi_Minh");
if (!empty($_POST)) {
    $orderid = isset($_POST['orderid']) ? empty($_POST['orderid']) ? '0' : intval($_POST['orderid']) : '0';
    $orderpayment = $_POST['orderpayment'];
    $intototal = $_POST['intototal'];
    $discountpercent = isset($_POST['discountpercent']) ? empty($_POST['discountpercent']) ? '0' : intval($_POST['discountpercent']) : '0';
    $discountmoney = $_POST['discountmoney'];
    $sumtotal = $_POST['sumtotal'];
    $paidtotal = $_POST['paidtotal'];
    $resttotal = $_POST['resttotal'];
    $sumamount = $_POST['sumamount'];
    $updatedate = date('Y-m-d H:m:i');
    $option = array(
        'id' => $orderid,
        'orderpayment' => $orderpayment,
        'intototal' => $intototal,
        'discountpercent' => $discountpercent,
        'discountmoney' => $discountmoney,
        'sumtotal' => $sumtotal,
        'paidtotal' => $paidtotal,
        'resttotal' => $resttotal,
        'amount' => $sumamount,
        'updatedate' => $updatedate
    );
    $result = $db->save('orders', $option);
    echo json_encode($result);
} else {
    echo 0;
}
?>