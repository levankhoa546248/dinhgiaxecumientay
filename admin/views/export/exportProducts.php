<?php
require_once("../dbcontroller.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Ho_Chi_Minh");
if (!empty($_POST)) {
    if (isset($_POST['ProductPrice'])){
        $UserId = intval($_POST['ReceiverId']);
        $ProductPrice = intval(str_replace(',', '', $_POST['ProductPrice']));
        $sql = 'UPDATE `user` SET `Surplus`= `Surplus` + '. $ProductPrice .' WHERE Id='.$UserId;
        $surplus = mysqli_query($db_handle -> connectDB(), $sql);
    }

    $arrExportence = array(
        'Id' => intval($_POST["ExportId"]),
        'ProductId' => intval($_POST['ProductId']),
        'Status' => intval($_POST['Status']),
        'Date' => date('Y-m-d H:i:s'),
        'PaymentId' => intval($_POST["PaymentId"]),
        'ReceiverId' => intval($_POST["ReceiverId"])
    );

    $exceptence = $db_handle->save('exportence', $arrExportence);
    echo json_encode($exceptence);
}
?>