<?php
require_once("../dbConnect.php");
date_default_timezone_set("Asia/Ho_Chi_Minh");
$db = new DBController();
if (!empty($_POST)) {
    $id = isset($_POST['id']) ? empty($_POST['id']) ? '0' : intval($_POST['id']) : '0';
    if ($id == '0'){
        $userid = '0';
    }else{
        $userid = isset($_POST['userid']) ? empty($_POST['userid']) ? '0' : intval($_POST['userid']) : '0';
    }
    $name = $_POST['name'];
    $identity = $_POST['identity'];
    $phone = $_POST['phone'];
    $province = $_POST['province'];
    $district = $_POST['district'];
    $village = $_POST['village'];
    $address = $_POST['address'];
    $sex = $_POST['sex'];
    $birthday = $_POST['birthday'];
    $zalo = $_POST['zalo'];
    $facebook = $_POST['facebook'];
    $email = $_POST['email'];
    $groupid = $_POST['groupid'];
    $typeid = $_POST['typeid'];
    $opuser = array(
        'id' => $userid,
        'name' => $name,
        'birthday' => $birthday,
        'identity' => $identity,
        'phone' => $phone,
        'email' => $email,
        'address' => $address,
        'sex' => $sex,
        'facebook' => $facebook,
        'zalo' => $zalo,
        'province' => $province,
        'district' => $district,
        'village' => $village,
        'type' => '1'
    );
    $user = $db->save('user', $opuser);
    $arrcustomer = array(
        'id' => $id,
        'userid' => $userid == '0' ? $user : $userid,
        'typeid' => $typeid,
        'groupid' => $groupid
    );
    $result = $db->save('customer', $arrcustomer);
    echo json_encode($result);
} else {
    echo 0;
}
?>