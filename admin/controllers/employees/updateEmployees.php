<?php
require_once("../dbConnect.php");
date_default_timezone_set("Asia/Ho_Chi_Minh");
$db = new DBController();
if (!empty($_POST)) {
    $id = isset($_POST['id']) ? empty($_POST['id']) ? '0' : intval($_POST['id']) : '0';
    $userid = isset($_POST['userid']) ? empty($_POST['userid']) ? '0' : intval($_POST['userid']) : '0';
    $name = $_POST['name'];
    $username = $_POST['username'];
    $identity = $_POST['identity'];
    $email = $_POST['email'];
    $province = $_POST['province'];
    $district = $_POST['district'];
    $village = $_POST['village'];
    $address = $_POST['address'];
    $sex = $_POST['sex'];
    $birthday = $_POST['birthday'];
    $position = $_POST['position'];
    $phone = $_POST['phone'];
    $zalo = $_POST['zalo'];
    $facebook = $_POST['facebook'];
    $createtime = empty($_POST['createtime']) ? date('Y-m-d H:m:i') : $_POST['createtime'];
    $datejoined = $_POST['datejoined'];
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
        'village' => $village
    );
    $userid = $db->save('user', $opuser);
    $opemployee = array(
        'id' => $id,
        'username' => $username,
        'password' => md5("12345"),
        'createtime' => $createtime,
        'position' => $position,
        'datejoined' => $datejoined,
        'userid' => $userid
    );
    $result = $db->save('employees', $opemployee);
    echo json_encode($result);
} else {
    echo 0;
}
?>