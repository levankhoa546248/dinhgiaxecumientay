<?php
/** setting **/
define('BASEURL' , 'http://localhost/StoreManager');
define('BASEPATH', dirname(__FILE__) . '/');
define('PATH_URL', 'http://localhost/StoreManager');
define('PATH_URL_IMG', PATH_URL.'/public/upload/images/');
define('PATH_URL_IMG_PRODUCT', PATH_URL. '/public/upload/product/');

//DB Duy Linh
$ketnoi['Server']['name'] = 'localhost';
$ketnoi['Database']['dbname'] = 'duylinhstore';
$ketnoi['Database']['username'] = 'root';
$ketnoi['Database']['password'] = '';

//DB Duy Linh
//$ketnoi['Server']['name'] = 'remotemysql.com';
//$ketnoi['Database']['dbname'] = 'ppJVniYc3Y';
//$ketnoi['Database']['username'] = 'ppJVniYc3Y';
//$ketnoi['Database']['password'] = 'b7zfOlXZJA';

//$ketnoi['Server']['name'] = 'remotemysql.com';
//$ketnoi['Database']['dbname'] = '856Nl3IYtW';
//$ketnoi['Database']['username'] = '856Nl3IYtW';
//$ketnoi['Database']['password'] = 'ghk9M1RdCg';

//$ketnoi['Server']['name'] = 'sql308.byethost.com';
//$ketnoi['Database']['dbname'] = 'b3_24684374_DuyLinhDB';
//$ketnoi['Database']['username'] = 'b3_24684374';
//$ketnoi['Database']['password'] = '12345';

//mysqli_connect($server_host,$server_username,$server_password,$database)
$conn = mysqli_connect(
    "{$ketnoi['Server']['name']}",
    "{$ketnoi['Database']['username']}",
    "{$ketnoi['Database']['password']}",
    "{$ketnoi['Database']['dbname']}")
or
die("Can not connect database");
mysqli_set_charset($conn, 'UTF8');
?>