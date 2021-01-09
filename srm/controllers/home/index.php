<?php
$title = 'Định giá xe cũ Miền Tây';
$sliders = select("SELECT * FROM intro WHERE trangthai = 1");
require('srm/pages/home/index.php');
?>