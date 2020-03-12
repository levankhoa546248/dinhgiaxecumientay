<?php
$db = new DBController();
if (!empty($_GET['id'])) {
    $title = 'Thông tin tài khoản';
    $user = $_SESSION['user'];
    $sql = 'SELECT
        e.id,
        e.username,
        e.password,
        e.createtime,
        e.position,
        e.datejoined,
        e.userid,
        e.active,
        u.id AS userid,
        u.name,
        u.birthday,
        u.identity,
        u.phone,
        u.email,
        u.address,
        u.sex,
        u.facebook,
        u.zalo,
        u.province,
        u.district,
        u.village,
        p.name AS positionname,
        v.provincename,
        v.districtname,
        v.`name` AS villagename
    FROM
        employees e
    LEFT JOIN `user` u ON e.userid = u.id
    LEFT JOIN position p ON p.id = e.position
    LEFT JOIN village v ON v.id = u.village
    WHERE e.active = 1 and e.id = ' . $_GET['id'];
    $result = $db->get_select_nested($sql);
    $employees = $result['0'];
}
require('admin/views/nhadautu/index.php');