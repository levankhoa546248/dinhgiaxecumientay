<?php
require_once("../dbConnect.php");
$db = new DBController();
if (!empty($_POST)) {
    $orderid = isset($_POST['orderid']) ? empty($_POST['orderid']) ? '0' : intval($_POST['orderid']) : '0';
    $sql = '
            SELECT
            od.id,
            od.storageid,
            od.ordersid,
            od.goodsid,
            od.goodsname,
            od.goodsamount,
            od.goodscash,
            od.goodstotal,
            od.createdate
        FROM
            ordersdetail AS od
        WHERE od.ordersid = ' . $orderid;
    $list = $db->get_select_nested($sql);
    echo json_encode($list);
}
?>