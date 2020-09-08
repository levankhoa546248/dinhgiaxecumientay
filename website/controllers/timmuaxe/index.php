<?php
$banner_left = get_a_record('banner', 'Visible = 1');
$banner_right = get_a_record('banner', 'Visible = 2');
$banner_ads = get_a_record('banner', 'Visible = 3');
$slideshow = get_a_record('slideshow', 'Id = 1');
$logo = get_a_record('logo', 'LogoId = 1 and IsActive = 1');
$title = 'Tìm mua xe';
require('website/views/timmuaxe/index.php');