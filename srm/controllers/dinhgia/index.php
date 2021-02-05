<?php
$title = 'Định giá xe cũ Miền Tây';
$sliders = select("SELECT * FROM intro WHERE trangthai = 1");
$gioithieu = select_1_record("SELECT * FROM gioithieu");
require('srm/pages/dinhgia/index.php');
?>