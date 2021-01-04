<?php
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
require_once('lib/model.php');
if (isset($_GET['controller'])) $controller = $_GET['controller'];
else $controller = 'home';
if (isset($_GET['action'])) $action = $_GET['action'];
else $action = 'index';
$file = 'manager/controllers/' . $controller . '/' . $action . '.php';
$website = select_1_record('SELECT * FROM website');
$logows = 'data:image/png;base64,' . $website["logo"];
$shortcuticon = $website["shortcuticon"];
$namews = $website["name"];
if (!empty($_SESSION)) {
    if (file_exists($file)) {
        require($file);
    } else {
        show_404();
    }
} else {
    if ($controller == "login") {
        if (file_exists($file)) {
            require($file);
        } else {
            show_404();
        }
    } else {
        require('manager/controllers/login/login.php');
    }
}