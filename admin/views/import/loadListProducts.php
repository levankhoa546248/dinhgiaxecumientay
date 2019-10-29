<?php
require_once("../dbcontroller.php");
$db_handle = new DBController();
//if (!empty($_GET)) {
$opProduct = array(
    'select' => ' i.Id AS ImportId,
        i.ProductId,
        i.PurchaseDiscount,
        i.SaleDiscount,
        i.CostsIncurred,
        i.SalePrice,
        i.ImportUserId,
        i.Date,
        u.name as ImportUserName,
        p.* ',
    'order_by' => 'p.Id DESC'
);
$tblProduct = "product p LEFT JOIN importence i ON p.Id = i.ProductId LEFT JOIN user u ON i.ImportUserId = u.Id";
$product = $db_handle->get_all($tblProduct, $opProduct);
echo json_encode($product);
?>