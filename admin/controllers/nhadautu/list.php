<?php
//load model
require_once('admin/models/users.php');
$options = array(
    'order_by' => 'manhadautu ASC'
);
$title = 'Danh mục nhà đầu tư';
$user = $_SESSION['user'];
$list_user = get_all('nhadautu', $options);
//load view
require('admin/views/nhadautu/list.php');