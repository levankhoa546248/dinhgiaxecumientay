<?php
//load model
//require_once('admin/models/groups.php');

if (isset($_POST['gid'])) {
    foreach ($_POST['gid'] as $gid) {
        $gid = intval($gid);
        subcategories_delete($gid);
    }
}

$opUserInvestor = array(
    'where' => 'TypeUser = 2',
    'order_by' => 'Id DESC'
);
$opInvestor = array(
    'select' => ' i.*, u.Name as NameUser, p.Name as NameProduct, i.Percentage, i.Dividends ',
    'order_by' => 'Id DESC'
);

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
$product = get_all($tblProduct , $opProduct);

$tblInvestor = "investor i LEFT JOIN user u on i.UserId = u.Id LEFT JOIN product p ON p.Id = i.ProductId ";
//data
$title = 'Nhập hàng';
$user = $_SESSION['user'];
$userInvestor = get_all('user', $opUserInvestor);
$investor = get_all($tblInvestor, $opInvestor);

//load view
require('admin/views/import/index.php');