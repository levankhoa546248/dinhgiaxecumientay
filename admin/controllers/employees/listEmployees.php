<?php
require_once("../dbConnect.php");
$db = new DBController();
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
WHERE e.active = 1';
$employees = $db->get_select_nested($sql);
echo json_encode($employees);
?>