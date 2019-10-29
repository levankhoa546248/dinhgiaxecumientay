<?php
require_once("../dbcontroller.php");
$db_handle = new DBController();
//if (!empty($_GET)) {
if (!empty($_POST)) {
    $funds = intval(str_replace(',', '', $_POST['Funds']));
    $opSurplus = array(
        'select' => 'u.Surplus',
        'where' => 'Id='.intval($_POST['UserId']).' and u.Surplus>='.$funds
    );
    $tblUser = "user u";
    $surplus = $db_handle -> get_total($tblUser, $opSurplus);
    echo $surplus;
}
?>