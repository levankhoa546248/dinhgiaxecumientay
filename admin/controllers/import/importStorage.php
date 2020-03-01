<?php
require_once("../dbConnect.php");
$db = new DBController();
date_default_timezone_set("Asia/Ho_Chi_Minh");
if (!empty($_POST)) {
    $gid = $_POST['gid'];
    $gname = $_POST['gname'];
    $gamount = $_POST['gamount'];
    $gprice = $_POST['gprice'];
    $gretail = $_POST['gretail'];
    $gwhole = $_POST['gwhole'];
    $gvip = $_POST['gvip'];
    for ($i = 0; $i < count($gid); $i++) {
        $sqlCount =
            "SELECT * FROM `storage`
                WHERE gid = $gid[$i]
                AND `name` = '$gname[$i]'
                AND price = $gprice[$i]
                AND retail = $gretail[$i]
                AND whole = $gwhole[$i]
                AND vip = $gvip[$i]";
        $data = $db -> get_select_nested($sqlCount);
        if(count($data) == 0){
            $sqlIns = "INSERT INTO `storage` (`gid`, `name`, `amount`, `price`, `retail`, `whole`, `vip`) 
                VALUES ($gid[$i], '$gname[$i]', $gamount[$i], $gprice[$i], $gretail[$i], $gwhole[$i], $gvip[$i])";
            $reIns = $db -> insert($sqlIns);
        } else {
            $id = $data[0]["id"];
            $amount = intval($data[0]["amount"]) + intval($gamount[$i]);
            $sqlUpd =
                "UPDATE `storage` SET 
                `amount`= $amount
                WHERE id = $id";
            $reUpd = $db -> runQuery($sqlUpd);
        }
    }
    echo 1;
} else {
    echo 0;
}
?>