<?php
function insert_user_online($session, $time, $ip, $browser, $date)
{
    $conn = $GLOBALS["conn"];
    $sql = "INSERT INTO user_online(session, time, ip, browser, dateonline)VALUES('$session', '$time','$ip','$browser', '$date')";
    return mysqli_query($conn, $sql);
}

function insert_visiter($session, $time, $ip, $browser, $date)
{
    $conn = $GLOBALS["conn"];
    $sql = "INSERT INTO visiter(session, time, ip, browser, dateonline)VALUES('$session', '$time','$ip','$browser', '$date')";
    return mysqli_query($conn, $sql);
}

function update_user_online($session, $time, $ip, $browser, $date)
{
    $conn = $GLOBALS["conn"];
    $sql = "UPDATE user_online SET time='$time' ,ip='$ip', browser ='$browser', dateonline ='$date' WHERE session = '$session'";
    return mysqli_query($conn, $sql);
}