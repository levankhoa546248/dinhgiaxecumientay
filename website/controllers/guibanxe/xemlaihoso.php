<?php
$banner_left = get_a_record('banner', 'Visible = 1');
$banner_right = get_a_record('banner', 'Visible = 2');
$banner_ads = get_a_record('banner', 'Visible = 3');
$slideshow = get_a_record('slideshow', 'Id = 1');
$logo = get_a_record('logo', 'LogoId = 1 and IsActive = 1');
$idguiban = $_GET["idguiban"];
$title = 'Định giá xe';
$xeguiban = get_a_record('xeguiban', 'id = ' . $idguiban);
require('website/views/guibanxe/xemlaihoso.php');