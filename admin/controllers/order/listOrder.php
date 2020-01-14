<?php
require_once("../dbConnect.php");
$db = new DBController();
if (!empty($_POST)) {
    $toDate = $_POST['toDate'];
    $fromDate = $_POST['fromDate'];
    $checkOrder = $_POST['checkOrder'];
    $sql = 'SELECT
        o.id,
        o.`name` as name,
        o.createdate,
        o.orderdate,
        o.employeesid,
        o.isorder,
        o.amount,
        o.total,
        o.istotal,
        o.canceldate,
        o.reportdate,
        o.customerid,
        c.`name` as customername,
        e.`name` as employeename,
        CASE o.isorder WHEN 0 THEN \'Lên đơn\' WHEN 1 THEN \'Đã xuất kho\' WHEN 2 THEN \'Đã hủy\' ELSE \'Đã báo cáo\' END AS isordername
        FROM orders AS o
        INNER JOIN `user` e ON o.employeesid = e.id
        INNER JOIN `user` c ON o.customerid = c.id
        WHERE o.orderdate BETWEEN CAST("' . $toDate . '" AS DATE) AND CAST("' . $fromDate . '" AS DATE) 
        AND (( ' . $checkOrder . ' = 0 AND o.isorder = 0) OR (' . $checkOrder . ' != 0 AND o.isorder != 0)) 
        ORDER BY o.id desc
        ';
    $list = $db->get_select_nested($sql);
    echo json_encode($list);
}
?>