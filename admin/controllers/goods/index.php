<?php
//require_once("admin/controllers/dbConnect.php");
$db = new DBController();
$title = 'Danh mục';
$user = $_SESSION['user'];
$sql = 'SELECT e.*, u.*, p.name as positionname FROM employees e LEFT JOIN `user` u ON e.userid = u.id
LEFT JOIN position p ON p.id = e.position';
$employees = $db->get_select_nested($sql);
$sqlPosition = 'SELECT * FROM position';
$listposition = $db->get_select_nested($sqlPosition);
$sqlprovince = 'SELECT * FROM province';
$province = $db->get_select_nested($sqlprovince);
$sqlsize = 'SELECT * FROM size where sex = 0';
$size = $db->get_select_nested($sqlsize);
$sqlcolor = 'SELECT * FROM color';
$color = $db->get_select_nested($sqlcolor);
$sqlgoodstype = 'SELECT * FROM goodstype';
$goodstype = $db->get_select_nested($sqlgoodstype);
$sqlgoodsgroupsub = 'SELECT * FROM goodsgroupsub';
$goodsgroupsub = $db->get_select_nested($sqlgoodsgroupsub);
$sqlgoodsgroup = 'SELECT * FROM goodsgroup';
$goodsgroup = $db->get_select_nested($sqlgoodsgroup);
$sqlcountry = 'SELECT * FROM country';
$country = $db->get_select_nested($sqlcountry);
$sqlsupplier = 'SELECT * FROM supplier';
$supplier = $db->get_select_nested($sqlsupplier);
$sqlunit = 'SELECT * FROM unit';
$unit = $db->get_select_nested($sqlunit);
require('admin/views/goods/index.php');