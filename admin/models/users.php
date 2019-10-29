<?php
function user_login($email, $password) {
    $conn = $GLOBALS["conn"];
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password' LIMIT 0,1";
    $query = mysqli_query($conn, $sql) or die(mysqli_error());
    if (mysqli_num_rows($query)>0) {
        $_SESSION['user'] = mysqli_fetch_assoc($query);
        return true;
    }
    return false;
}
function user_delete($id) {
    $conn = $GLOBALS["conn"];
    $id = intval($id);
    $sql = "DELETE FROM user WHERE id=$id";
    mysqli_query($conn, $sql) or die(mysqli_error());
}