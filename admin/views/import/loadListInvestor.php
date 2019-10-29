<?php
require_once("../dbcontroller.php");
$db_handle = new DBController();
//if (!empty($_GET)) {
if (!empty($_POST)) {
    $opInvestor = array(
        'select' => ' i.*, 
        u.Name as NameUser, p.Name as NameProduct ',
        'where' => 'ProductId='.intval($_POST['ProductId']),
        'order_by' => 'Id DESC'
    );
    $tblInvestor = "investor i LEFT JOIN user u on i.UserId = u.Id LEFT JOIN product p ON p.Id = i.ProductId ";
    $investor = $db_handle -> get_all($tblInvestor, $opInvestor);
    echo json_encode($investor);
}
?>