<?php
require_once("../dbConnect.php");
$db = new DBController();
if (!empty($_POST)) {
    $toDate = $_POST['toDate'];
    $fromDate = $_POST['fromDate'];
    $checkOrder = $_POST['checkOrder'];
    $sql = 'SELECT
            o.id,
            o.`name`,
            o.createdate,
            o.orderdate,
            o.employeesid,
            o.isorder,
            o.amount,
            o.istotal,
            o.canceldate,
            o.reportdate,
            o.customerid,
            uc.`name` AS customername,
            ue.`name` AS employeename,
            CASE o.isorder
        WHEN 0 THEN
            \'Lên đơn\'
        WHEN 1 THEN
            \'Đã xuất kho\'
        WHEN 2 THEN
            \'Đã hủy\'
        ELSE
            \'Đã báo cáo\'
        END AS isordername,
         c.typeid,
         ct.`name` AS typename,
            o.orderpayment,
            o.intototal,
            o.discountpercent,
            o.discountmoney,
            o.sumtotal,
            o.paidtotal,
            o.resttotal
        FROM
            orders AS o
        INNER JOIN employees e ON o.employeesid = e.id
        INNER JOIN `user` AS ue ON ue.id = e.userid
        INNER JOIN customer c ON o.customerid = c.id
        LEFT JOIN customertype ct ON ct.id = c.typeid
        INNER JOIN `user` AS uc ON uc.id = c.userid
        WHERE o.orderdate BETWEEN CAST("' . $toDate . '" AS DATE) AND CAST("' . $fromDate . '" AS DATE) 
        AND (( ' . $checkOrder . ' = 0 AND o.isorder = 0) OR (' . $checkOrder . ' != 0 AND o.isorder != 0)) 
        ORDER BY o.id desc
        ';
    $list = $db->get_select_nested($sql);
    echo json_encode($list);
}
?>