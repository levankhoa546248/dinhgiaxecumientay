<?php
if (!empty($_POST)) {
    $username = escape($_POST['username']);
    $password = md5($_POST['password']);
    $sql = "SELECT nv.* FROM nhanvien nv WHERE nv.username = '$username' AND nv.password = '$password' LIMIT 0,1";
//    $sql = "call login('$username', '$password')";
    $query = mysqli_query(connectDB(), $sql) or die(mysqli_error());
    $count = mysqli_num_rows($query);
    if ($count > 0) {
        $result = mysqli_fetch_assoc($query);
        $_SESSION["username"] = $result["username"];
    }
    echo $count;
} else {
    $title = 'Đăng nhập';
    require('manager/pages/login/login.php');
}
?>