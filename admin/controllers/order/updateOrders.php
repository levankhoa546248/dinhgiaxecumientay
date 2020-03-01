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
    $orderpayment = $_POST['orderpayment'];
    $intototal = $_POST['intototal'];
    $discountpercent = isset($_POST['discountpercent']) ? empty($_POST['discountpercent']) ? '0' : intval($_POST['discountpercent']) : '0';
    $discountmoney = $_POST['discountmoney'];
    $sumtotal = $_POST['sumtotal'];
    $paidtotal = $_POST['paidtotal'];
    $resttotal = $_POST['resttotal'];
    $sumamount = isset($_POST['sumamount']) ? empty($_POST['sumamount']) ? '0' : intval($_POST['sumamount']) : '0';
    $createdate = date('Y-m-d H:m:i');
    $isorder = $_POST['isorder'];
    $option = array(
        'id' => $orderid,
        'name' => $ordername,
        'createdate' => $createdate,
        'orderdate' => $orderdate,
        'employeesid' => $orderemployeeid,
        'customerid' => $ordercustomerid,
        'orderpayment' => $orderpayment,
        'intototal' => $intototal,
        'discountpercent' => $discountpercent,
        'discountmoney' => $discountmoney,
        'sumtotal' => $sumtotal,
        'paidtotal' => $paidtotal,
        'resttotal' => $resttotal,
        'amount' => $sumamount,
        'isorder' => $isorder
    );
    $result = $db->save('orders', $option);
    echo json_encode($result);
} else {
    echo 0;
}
?>