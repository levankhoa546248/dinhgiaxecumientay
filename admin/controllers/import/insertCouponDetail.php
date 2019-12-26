<?php
require_once("../dbConnect.php");
$db = new DBController();
date_default_timezone_set("Asia/Ho_Chi_Minh");
if (!empty($_POST)) {
    $goodsid = isset($_POST['goodsid']) ? empty($_POST['goodsid']) ? '0' : intval($_POST['goodsid']) : '0';
    $couponid = isset($_POST['couponid']) ? empty($_POST['couponid']) ? '0' : intval($_POST['couponid']) : '0';
    $goodsname = $_POST['goodsname'];
    $goodscolor = $_POST['goodscolor'];
    $goodssize = $_POST['goodssize'];
    $goodsamount = $_POST['goodsamount'];
    $goodsprice = intval($_POST['goodsprice']);
    $goodstotal = intval($_POST['goodstotal']);
    $goodsretail = intval($_POST['goodsretail']);
    $goodswholesale = intval($_POST['goodswholesale']);
    $goodspricevip = intval($_POST['goodspricevip']);
    $option = array(
        'goodsid' => $goodsid,
        'goodsname' => $goodsname,
        'goodssize' => $goodssize,
        'goodscolor' => $goodscolor,
        'couponid' => $couponid,
        'amount' => $goodsamount,
        'price' => $goodsprice,
        'total' => $goodstotal,
        'retail' => $goodsretail,
        'wholesale' => $goodswholesale,
        'pricevip' => $goodspricevip
    );
//    $sql = "CALL COUPONDETAIL_INSERT('$goodsid', '$couponid', '$goodsname', '$goodscolor', '$goodssize', '$goodsamount',
//    '$goodsprice', '$goodstotal', '$goodsretail', '$goodswholesale', '$goodspricevip')";
    try {
        $result = $db->save('coupondetail', $option);
//        $result = $db->get_select_nested($sql);
        echo json_encode($result);
    } catch (Exception $e) {
        echo 0;
    }
} else {
    echo 0;
}
?>