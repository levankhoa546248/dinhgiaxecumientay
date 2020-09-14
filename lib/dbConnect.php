<?php
/** setting **/
define('BASEURL', 'http://duylinh.byethost3.com');
define('BASEPATH', dirname(__FILE__) . '/');
define('PATH_URL', 'http://duylinh.byethost3.com');
define('PATH_URL_IMG', PATH_URL . '/public/upload/images/');
define('PATH_IMG_WEB', 'website/themes/upload/images/');
define('PATH_IMG_PRODUCT', 'website/themes/upload/product/');
define('PATH_URL_IMG_PRODUCT', PATH_URL . '/public/upload/product/');
define('PATH_IMG', '/images/xe/');

//define('BASEURL', 'http://duylinh.byethost3.com');
//define('BASEPATH', dirname(__FILE__) . '/');
//define('PATH_URL', 'http://duylinh.byethost3.com');
//define('PATH_URL_IMG', PATH_URL . '/public/upload/images/');
//define('PATH_IMG_WEB', 'website/themes/upload/images/');
//define('PATH_IMG_PRODUCT', 'website/themes/upload/product/');
//define('PATH_URL_IMG_PRODUCT', PATH_URL . '/public/upload/product/');
//define('PATH_IMG', '/images/xe/');

//    private $host = "sql104.byethost.com";
//    private $user = "b11_25278721";
//    private $password = "vian@1995";
//    private $database = "b11_25278721_vianshop";
function __construct()
{
    $this->conn = $this->connectDB();
}

function connectDB()
{
//    $ketnoi['Server']['name'] = 'localhost';
//    $ketnoi['Database']['dbname'] = 'duylinhstore';
//    $ketnoi['Database']['username'] = 'root';
//    $ketnoi['Database']['password'] = '';
    $ketnoi['Server']['name'] = 'sql354.main-hosting.eu';
    $ketnoi['Database']['dbname'] = 'u794343867_dinhgiaxecu';
    $ketnoi['Database']['username'] = 'u794343867_vankhoa';
    $ketnoi['Database']['password'] = 'Levankhoa0478';
    $conn = mysqli_connect(
        "{$ketnoi['Server']['name']}",
        "{$ketnoi['Database']['username']}",
        "{$ketnoi['Database']['password']}",
        "{$ketnoi['Database']['dbname']}")
    or
    die("Can not connect database");
    mysqli_set_charset($conn, "utf8");
    return $conn;
}

?>