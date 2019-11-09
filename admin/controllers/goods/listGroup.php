<?php
require_once("../dbConnect.php");
$db = new DBController();
if (empty($_POST['groupsubid'])) {
    $groupsubid = 0;
    $sql = 'SELECT p.* FROM goodsgroup p';
}else{
    $groupsubid = $_POST['groupsubid'];
    $sql = 'SELECT p.* FROM goodsgroup p where p.groupsubid = ' .$groupsubid;
}
$list = $db->get_select_nested($sql);
echo json_encode($list);
?>