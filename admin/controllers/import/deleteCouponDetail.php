<?php
require_once("../dbConnect.php");
$db_handle = new DBController();
if (!empty($_POST)) {
    $Id = intval($_POST["id"]);
    $sql = "DELETE FROM coupondetail WHERE Id=$Id";
    if (!mysqli_query($db_handle->connectDB(), $sql))
    {
        echo 0;
    }else{
        echo 1;
    }
}
?>