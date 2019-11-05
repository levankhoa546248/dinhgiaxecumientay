<?php
require_once("../dbConnect.php");
$db = new DBController();
$sql = '
SELECT
c.id,
c.lastpurchase,
c.total,
c.debt,
c.userid,
c.typeid,
c.groupid,
u.`name`,
u.birthday,
u.identity,
u.phone,
u.email,
u.address,
u.sex,
u.facebook,
u.zalo,
u.province as provinceid,
u.district as districtid,
u.village as villageid,
p.`name` as provincename,
d.`name` as districtname,
v.`name` AS villagename,
t.`name` AS typename,
g.`name` AS groupname
FROM customer c
LEFT JOIN `user` u ON c.userid = u.id
LEFT JOIN village v ON v.id = u.village
LEFT JOIN customertype t ON t.id = c.typeid
LEFT JOIN customergroup g ON g.id = c.groupid
LEFT JOIN province p ON p.id = u.province
LEFT JOIN district d ON d.id = u.district
WHERE c.active = 1
';
$result = $db->get_select_nested($sql);
echo json_encode($result);
?>