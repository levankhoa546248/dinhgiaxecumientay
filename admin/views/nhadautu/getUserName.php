<?php
require_once("../dbcontroller.php");
$db_handle = new DBController();
if (!empty($_POST)) {
    $Id = intval($_POST["InvestorId"]);
    $sql = "DELETE FROM investor WHERE Id=$Id";
    if (!mysqli_query($db_handle->connectDB(), $sql))
    {
        echo 0;
    }else{
        echo 1;
    }
}
?>