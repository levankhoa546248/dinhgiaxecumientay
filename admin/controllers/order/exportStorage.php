<?php
require_once("../dbConnect.php");
$db = new DBController();
date_default_timezone_set("Asia/Ho_Chi_Minh");
if (!empty($_POST)) {
    $storageid = $_POST['storageid'];
    $amount = $_POST['amount'];
    for ($i = 0; $i < count($storageid); $i++) {
        $sqlUpd = "UPDATE storage SET amount = amount - $amount[$i], amounttemp = amounttemp - $amount[$i]
                    WHERE id = $storageid[$i]";
        $reUpd = $db -> runQuery($sqlUpd);
    }
    echo 1;
} else {
    echo 0;
}
?>