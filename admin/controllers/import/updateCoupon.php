<?php
require_once("../dbConnect.php");
$db = new DBController();
date_default_timezone_set("Asia/Ho_Chi_Minh");
if (!empty($_POST)) {
    $id = isset($_POST['id']) ? empty($_POST['id']) ? '0' : intval($_POST['id']) : '0';
    $name = $_POST['name'];
    $coupondate = $_POST['coupondate'];
    $employeeid = $_POST['employeeid'];
    $createdate = date('Y-m-d H:m:i');
    $option = array(
        'id' => $id,
        'name' => $name,
        'coupondate' => $coupondate,
        'employeeid' => $employeeid,
        'createdate' => $createdate
    );
    $result = $db->save('coupon', $option);
    echo json_encode($result);
} else {
    echo 0;
}
?>