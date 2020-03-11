<?php
//load model
//require_once('admin/models/groups.php');

if (isset($_POST['gid'])) {
    foreach ($_POST['gid'] as $gid) {
        $gid = intval($gid);
        subcategories_delete($gid);
    }
}
$opProduct = array(
    'select' => 'p.*, 
    e.Id as ExportId, IFNULL(e.Status, 0) as Status, e.Date as Date, e.PaymentId, e.ReceiverId, 
    u.Name as ReceiverName, pa.Name as PaymentName',
    'order_by' => 'Id'
);
$tbProduct = '
product p 
LEFT JOIN exportence e ON p.Id = e.ProductId 
LEFT JOIN user u ON u.Id = e.ReceiverId
LEFT JOIN paymention pa ON pa.Id = e.PaymentId
';

$opUserInvestor = array(
    'where' => 'TypeUser = 2',
    'order_by' => 'Id DESC'
);
$opInvestor = array(
    'select' => ' i.*, u.Name as NameUser, p.Name as NameProduct ',
    'order_by' => 'Id DESC'
);
$tblInvestor = "investor i LEFT JOIN user u on i.UserId = u.Id LEFT JOIN product p ON p.Id = i.ProductId ";
//data
$title = 'Xuất hàng';
$user = $_SESSION['user'];
$product = get_all($tbProduct, $opProduct);
$userInvestor = get_all('user', $opUserInvestor);
$investor = get_all($tblInvestor, $opInvestor);
$opPaymention = array(
    'order_by' => 'Id DESC'
);
$paymention = get_all('paymention', $opPaymention);// hinh thuc thanh toan
//load view
require('admin/views/export/index.php');