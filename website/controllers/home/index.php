<?php
$banner_left = get_a_record('banner','Visible = 1');
$banner_right = get_a_record('banner','Visible = 2');
$banner_ads = get_a_record('banner','Visible = 3');
$slideshow = get_a_record('slideshow','Id = 1');
$logo = get_a_record('logo','LogoId = 1 and IsActive = 1');
$order_products = get_select_nested("SELECT hax.id as idhax, hax.duongdan as duongdan, x.* FROM xe x
LEFT JOIN (SELECT MIN(id) as id, idxe, duongdan FROM hinhanhxe
GROUP BY idxe) hax ON x.id = hax.idxe WHERE x.trangthai = 0");

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
$mausacs = get_select_nested('SELECT id, name FROM mausac where trangthai = 1');
$namsanxuats = get_select_nested('SELECT id, name FROM namsanxuat where trangthai = 1');

$title = 'Trang chủ';
require('website/views/home/index.php');