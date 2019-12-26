<?php
require_once("../dbConnect.php");
$db = new DBController();
date_default_timezone_set("Asia/Ho_Chi_Minh");
if (!empty($_POST)) {
    $couponid = isset($_POST['couponid']) ? empty($_POST['couponid']) ? '0' : intval($_POST['couponid']) : '0';
    $isimport = $_POST['isimport'];
    $sumAmount = $_POST['sumAmount'];
    $sumTotal = $_POST['sumTotal'];
    $sumRetail = $_POST['sumRetail'];
    $sumWhole = $_POST['sumWhole'];
    $sumVip = $_POST['sumVip'];
    $importdate = date('Y-m-d H:m:i');
    $option = array(
        'id' => $couponid,
        'isimport' => $isimport,
        'amount' => $sumAmount,
        'total' => $sumTotal,
        'retail' => $sumRetail,
        'whole' => $sumWhole,
        'vip' => $sumVip,
        'importdate' => $importdate
    );
    $result = $db->save('coupon', $option);
    echo json_encode($result);
} else {
    echo 0;
}
?>