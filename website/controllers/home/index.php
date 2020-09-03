<?php
$banner_left = get_a_record('banner','Visible = 1');
$banner_right = get_a_record('banner','Visible = 2');
$banner_ads = get_a_record('banner','Visible = 3');
$slideshow = get_a_record('slideshow','Id = 1');
$logo = get_a_record('logo','LogoId = 1 and IsActive = 1');

$options_orderproduct = array(
    'where' => 'trangthai = 0',
    'limit' => '16',
    'offset' => '0',
    'order_by' => 'ngaytao DESC'
);
$order_products = get_select_nested("SELECT hax.id as idhax, hax.duongdan as imagemain, x.* FROM xe x
LEFT JOIN (SELECT MIN(id) as id, idxe, duongdan FROM hinhanhxe
GROUP BY idxe) hax ON x.id = hax.idxe WHERE x.trangthai = 0");

$options_newproduct = array(
    'where' => 'TypeId = 2',
    'limit' => '16',
    'offset' => '0',
    'order_by' => 'Createdate DESC'
);
$new_products = get_all('product',$options_newproduct);

$options_saleproduct = array(
    'where' => 'TypeId = 3',
    'limit' => '16',
    'offset' => '0',
    'order_by' => 'Createdate DESC'
);
$saleoff_products = get_all('product',$options_saleproduct);

$title = 'Trang chủ';
require('website/views/home/index.php');