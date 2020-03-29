<?php
//load model
require_once('admin/models/products.php');

$sql = 'SELECT 
hx.`Name` AS tenhangxe,
x.id,
x.hangxe,
x.tenxe,
x.mausac,
x.giavon,
x.chietkhaumua,
x.chietkhauban,
x.soluong,
x.chiphiphatsinh,
x.giaban,
IF(x.tonglai<0,0,x.tonglai) as tonglai,
x.sotienconlai,
x.ngaynhap,
x.trangthai,
x.nhanvien,
x.ngayban FROM xe x JOIN subcategory hx on x.hangxe = hx.id';
$products = select($sql);
$subcategories = get_all('subcategory', array(
    'select' => 'Id,Name',
    'order_by' => 'Name'
));
//data
$title = 'Sản phẩm';
$user = $_SESSION['user'];

//load view
require('admin/views/product/index.php');