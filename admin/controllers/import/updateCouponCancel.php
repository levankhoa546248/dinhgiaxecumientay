<?php
require_once("../dbConnect.php");
$db = new DBController();
date_default_timezone_set("Asia/Ho_Chi_Minh");
if (!empty($_POST)) {
    $id = isset($_POST['id']) ? empty($_POST['id']) ? '0' : intval($_POST['id']) : '0';
    $isimport = $_POST['isimport'];
    $canceldate = date('Y-m-d H:m:i');
    $opDetail = array(
        'isimport' => $isimport
    );
    $whereDetail = array(
        'couponid' => $id
    );
    $coupondetail = $db->update('coupondetail', $opDetail, $whereDetail);
    $option = array(
        'id' => $id,
        'isimport' => $isimport,
        'canceldate' => $canceldate
    );
    $result = $db->save('coupon', $option);
    echo json_encode($result);
} else {
    echo 0;
}
?>