<?php
require_once("../dbcontroller.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Ho_Chi_Minh");
if (!empty($_POST)) {
    $order = array(
        'Id' => intval($_POST["InvestorId"]),
        'ProductId' => intval($_POST['ProductId']),
        'UserId' => intval($_POST['UserId']),
        'Percentage' => intval($_POST['Percentage']),
        'Dividends' => intval(str_replace(',', '', $_POST['Dividends'])),
        'Funds' => intval(str_replace(',', '', $_POST['Funds'])),
        'Reinvestment' => intval($_POST["Reinvestment"])
    );
    if (intval($_POST["Reinvestment"]) == 1){
        $UserId = intval($_POST['UserId']);
        $Funds = intval(str_replace(',', '', $_POST['Funds']));
        $sql = 'UPDATE `user` SET `Surplus`= `Surplus` - '. $Funds .' WHERE Id='.$UserId;
        $surplus = mysqli_query($db_handle -> connectDB(), $sql);
    }
    try {
        $opImp = array(
            'Id' => intval($_POST["ImportId"]),
            'PurchaseDiscount' => intval(str_replace(',', '', $_POST['PurchaseDiscount'])),
            'SaleDiscount' => intval(str_replace(',', '', $_POST['SaleDiscount'])),
            'CostsIncurred' => intval(str_replace(',', '', $_POST['CostsIncurred'])),
            'SalePrice' => intval(str_replace(',', '', $_POST['SalePrice'])),
            'ImportUserId' => intval($_POST['ImportUserId']),
            'ProductId' => intval($_POST['ProductId']),
            'Date' => date('Y-m-d H:i:s')
        );
        $ImpId = $db_handle->save('importence', $opImp);
        $investorId = $db_handle->save('investor', $order);
        echo $investorId;
    } catch (Exception $exception) {
        echo '0';
    }

}
?>