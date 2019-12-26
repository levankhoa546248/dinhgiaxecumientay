<?php
require_once("../dbConnect.php");
$db = new DBController();
if (!empty($_POST)) {
    $toDate = $_POST['toDate'];
    $fromDate = $_POST['fromDate'];
    $checkImport = $_POST['checkImport'];
//    $sql = 'SELECT c.*, u.`name` as employeename FROM coupon c JOIN `user` u ON u.id = c.employeeid
//WHERE c.coupondate BETWEEN CAST("' . $toDate . '" AS DATE) AND CAST("' . $fromDate . '" AS DATE)
//ORDER BY c.id desc';
    $sql = 'SELECT c.id, c.`name`, c.employeeid, c.coupondate, c.createdate, c.isimport, 
CASE c.isimport WHEN 0 THEN \'Chưa nhập\' WHEN 1 THEN \'Đã nhập\' WHEN 2 THEN \'Đã hủy\' ELSE \'Đã nhận tiền\' END AS isimportname,
u.`name` as employeename FROM coupon c JOIN `user` u ON u.id = c.employeeid
WHERE c.coupondate BETWEEN CAST("' . $toDate . '" AS DATE) AND CAST("' . $fromDate . '" AS DATE) 
AND (( ' . $checkImport . ' = 0 AND c.isimport = 0) OR (' . $checkImport . ' != 0 AND c.isimport != 0)) ORDER BY c.id desc';
    $list = $db->get_select_nested($sql);
    echo json_encode($list);
}
?>