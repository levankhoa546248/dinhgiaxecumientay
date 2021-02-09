<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
$file = "srm.php";
if (file_exists($file)) {
    require($file);
} else {
    show_404();
}


