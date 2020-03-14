<?php
//load model
require_once('admin/models/users.php');
$title = 'Danh mục nhà đầu tư';
$user = $_SESSION['user'];
$dsNhaDauTu = select('SELECT * FROM nhadautu');
//load view
require('admin/views/nhadautu/list.php');