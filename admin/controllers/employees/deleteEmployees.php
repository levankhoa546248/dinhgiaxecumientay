<?php
require_once("../dbConnect.php");
date_default_timezone_set("Asia/Ho_Chi_Minh");
$db = new DBController();
if (!empty($_POST)) {
    $id = isset($_POST['id']) ? empty($_POST['id']) ? '0' : intval($_POST['id']) : '0';
    $createtime = empty($_POST['createtime']) ? date('Y-m-d H:m:i') : $_POST['createtime'];
    $opemployee = array(
        'id' => $id,
        'active' => '0',
        'createtime' => $createtime
    );
    $result = $db->save('employees', $opemployee);
    echo json_encode($result);
} else {
    echo 0;
}
?>