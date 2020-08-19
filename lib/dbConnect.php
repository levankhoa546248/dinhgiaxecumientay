<?php
/** setting **/
define('BASEURL', 'http://duylinh.byethost3.com');
define('BASEPATH', dirname(__FILE__) . '/');
define('PATH_URL', 'http://duylinh.byethost3.com');
define('PATH_URL_IMG', PATH_URL . '/public/upload/images/');
define('PATH_IMG_WEB', 'website/themes/upload/images/');
define('PATH_URL_IMG_PRODUCT', PATH_URL . '/public/upload/product/');

//DB Duy Linh
//$ketnoi['Server']['name'] = 'sql308.byethost.com';
//$ketnoi['Database']['dbname'] = 'b3_24684374_banxe';
//$ketnoi['Database']['username'] = 'b3_24684374';
//$ketnoi['Database']['password'] = '12345';
//DB Duy Linh
//$ketnoi['Server']['name'] = 'localhost';
//$ketnoi['Database']['dbname'] = 'duylinhstore';
//$ketnoi['Database']['username'] = 'root';
//$ketnoi['Database']['password'] = '';

//mysqli_connect($server_host,$server_username,$server_password,$database)
//$conn = mysqli_connect(
//    "{$ketnoi['Server']['name']}",
//    "{$ketnoi['Database']['username']}",
//    "{$ketnoi['Database']['password']}",
//    "{$ketnoi['Database']['dbname']}")
//or
//die("Can not connect database");

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
    $ketnoi['Server']['name'] = 'localhost';
    $ketnoi['Database']['dbname'] = 'duylinhstore';
    $ketnoi['Database']['username'] = 'root';
    $ketnoi['Database']['password'] = '';
//    $ketnoi['Server']['name'] = 'sql308.byethost.com';
//    $ketnoi['Database']['dbname'] = 'b3_24684374_autodunglam';
//    $ketnoi['Database']['username'] = 'b3_24684374';
//    $ketnoi['Database']['password'] = '12345';
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