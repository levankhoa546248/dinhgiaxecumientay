<?php
require_once("../dbcontroller.php");
$db_handle = new DBController();
$opProduct = array(
    'select' => 'p.*, e.ProductId, e.Id as ExportId, IFNULL(e.Status, 0) as Status, e.Date as Date, e.PaymentId, e.ReceiverId, 
            u.Name as ReceiverName, pa.Id as PaymentId, pa.Name as PaymentName',
    'order_by' => 'Id'
);
$tbProduct = '
        product p 
        LEFT JOIN exportence e ON p.Id = e.ProductId 
        LEFT JOIN user u ON u.Id = e.ReceiverId
        LEFT JOIN paymention pa ON pa.Id = e.PaymentId
        ';

$product = $db_handle->get_all($tbProduct, $opProduct);
echo json_encode($product);
?>