<?php
require_once("../dbConnect.php");
$db = new DBController();
date_default_timezone_set("Asia/Ho_Chi_Minh");
if (!empty($_POST)) {
    $customername = $_POST['customername'] ? empty($_POST['customername']) ? '' : $_POST['customername'] : '';
    $sql = "SELECT * FROM customer AS c
            INNER JOIN `user` AS u ON c.userid = u.id WHERE c.active = 1 AND 
            upper(TRIM(REPLACE(u.`name`, ' ', ''))) = upper(TRIM(REPLACE('".$customername."', ' ', '')))";
    $count = $db->numRows($sql);
    if ($count == 0) {
        $sqluser = "INSERT INTO user (name) VALUES ('" . $customername . "')";
        $userid = $db ->insert($sqluser);
        $sqlcus = "INSERT INTO customer (userid) VALUES ('" . $userid . "')";
        $cusid = $db ->insert($sqlcus);
        echo json_encode($cusid);
    }
} else {
    echo 0;
}
?>