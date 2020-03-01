<?php
require_once("../dbConnect.php");
$db = new DBController();
date_default_timezone_set("Asia/Ho_Chi_Minh");
if (!empty($_POST)) {
    $storageid = isset($_POST['storageid']) ? empty($_POST['storageid']) ? '0' : intval($_POST['storageid']) : '0';
    $ordersid = isset($_POST['ordersid']) ? empty($_POST['ordersid']) ? '0' : intval($_POST['ordersid']) : '0';
    $goodsid = $_POST['goodsid'];
    $goodsname = $_POST['goodsname'];
    $goodsamount = $_POST['goodsamount'];
    $goodscash = $_POST['goodscash'];
    $goodstotal = $_POST['goodstotal'];
    $createdate = date('Y-m-d H:m:i');
    $option = array(
        'id' => 0,
        'storageid' => $storageid,
        'ordersid' => $ordersid,
        'goodsid' => $goodsid,
        'goodsname' => $goodsname,
        'goodsamount' => $goodsamount,
        'goodscash' => $goodscash,
        'goodstotal' => $goodstotal,
        'createdate' => $createdate
    );
    $result = $db->save('ordersdetail', $option);
    echo json_encode($result);
} else {
    echo 0;
}
?>