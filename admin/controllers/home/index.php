<?php
$title = 'Quản trị hệ thống';
$user = $_SESSION["user"];
//require_once "lib/dbConnect.php";
$db = new DBController();
require('admin/views/home/index.php');
?>