<?php
require_once "lib/dbConnect.php";
if (!empty($_POST)) {
    $username = escape($_POST['username']);
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM user WHERE Username='$username' AND Password='$password' LIMIT 0,1";
//    $sql = "CALL DANGNHAP('$username', '$password')";
    $query = mysqli_query($conn, $sql) or die(mysqli_error());
    if (mysqli_num_rows($query)>0) {
        $_SESSION['user'] = mysqli_fetch_assoc($query);
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            if ($user['RoleId']==1||$user['RoleId']==2){
                header('location:admin.php');
            }
        }
        $title = 'Administrator';
        require('admin/controllers/home/index.php');
    }else{
        echo '<script type="text/javascript">alert("Đăng nhập không thành công!");</script>';
        require('admin/views/home/login.php');
    }
}else{
    require('admin/views/home/login.php');
}
?>