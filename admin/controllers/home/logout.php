<?php
unset($_SESSION['user']);
session_destroy();
require('admin/views/home/login.php');
?>