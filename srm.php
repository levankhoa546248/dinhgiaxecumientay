<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
require_once('lib/model.php');
if (isset($_GET['controller'])) $controller = $_GET['controller'];
else $controller = 'home';
if (isset($_GET['action'])) $action = $_GET['action'];
else $action = 'index';
$file = 'srm/controllers/' . $controller . '/' . $action . '.php';
if (file_exists($file)) {
    require($file);
} else {
    echo $file;
}
