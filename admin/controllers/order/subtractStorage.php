<?php
require_once("../dbConnect.php");
$db = new DBController();
date_default_timezone_set("Asia/Ho_Chi_Minh");
if (!empty($_POST)) {
    $storageid = isset($_POST['storageid']) ? empty($_POST['storageid']) ? '0' : intval($_POST['storageid']) : '0';
    $goodsamount = intval($_POST['goodsamount']);
    $sqlUpd = "UPDATE storage SET amounttemp = amounttemp + $goodsamount WHERE id = $storageid";
    $reUpd = $db -> runQuery($sqlUpd);
    echo 1;
} else {
    echo 0;
}
?>