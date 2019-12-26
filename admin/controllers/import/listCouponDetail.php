<?php
require_once("../dbConnect.php");
$db = new DBController();
if (!empty($_POST)) {
    $couponid = $_POST['couponid'];
    $sql = 'SELECT * FROM coupondetail WHERE couponid = '.$couponid;
    $list = $db->get_select_nested($sql);
    echo json_encode($list);
}
?>