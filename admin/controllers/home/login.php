<?php
//require_once "lib/dbConnect.php";
$db = new DBController();
$conn = $db->connectDB();
if (!empty($_POST)) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM employees WHERE username='$username' AND password='$password' LIMIT 0,1";
    $query = mysqli_query($conn, $sql) or die(mysqli_error());
    if (mysqli_num_rows($query)>0) {
        $_SESSION['user'] = mysqli_fetch_assoc($query);
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            if (!$user["id"]){
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