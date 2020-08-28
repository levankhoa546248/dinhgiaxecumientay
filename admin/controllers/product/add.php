<?php
$title = 'Thêm xe';
$user = $_SESSION['user'];
//Sub category
$subcategories = get_all('subcategory', array(
    'select' => 'Id,Name',
    'order_by' => 'Name'
));
$dongxes = get_select_nested('SELECT dx.id, dx.dongxe, dx.idhangxe, sub.`Name` as tenhangxe FROM dongxe dx
LEFT JOIN subcategory sub ON dx.idhangxe = sub.Id where dx.trangthai = 1');
$nhienlieus = get_select_nested('SELECT id, name FROM nhienlieu where trangthai = 1');
$hopsos = get_select_nested('SELECT id, name FROM hopso where trangthai = 1');
$chongois = get_select_nested('SELECT id, name FROM chongoi where trangthai = 1');
$xuatxus = get_select_nested('SELECT id, name FROM xuatxu where trangthai = 1');
$dsNhaDauTu = select('SELECT * FROM nhadautu');
$mausacs = get_select_nested('SELECT id, name FROM mausac where trangthai = 1');
$namsanxuats = get_select_nested('SELECT id, name FROM namsanxuat where trangthai = 1');

$idxe = select_id_auto("xe");
//load view
require('admin/views/product/add.php');