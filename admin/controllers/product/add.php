<?php
$title = 'Thêm xe';
$user = $_SESSION['user'];
//Sub category
$subcategories = get_all('subcategory', array(
    'select' => 'Id,Name',
    'order_by' => 'Name'
));
$dsNhaDauTu = select('SELECT * FROM nhadautu');
$idxe = select_id_auto("xe");
//load view
require('admin/views/product/test.php');