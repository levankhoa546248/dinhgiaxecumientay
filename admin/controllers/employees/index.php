<?php
$db = new DBController();
$sql = 'SELECT e.*, u.*, p.name as positionname FROM employees e LEFT JOIN `user` u ON e.userid = u.id
LEFT JOIN position p ON p.id = e.position';
$title = 'Danh mục nhân viên';
$user = $_SESSION['user'];
$employees = $db->get_select_nested($sql);
$sqlPosition = 'SELECT * FROM position';
$listposition = $db->get_select_nested($sqlPosition);
$sqlprovince = 'SELECT * FROM province';
$province = $db->get_select_nested($sqlprovince);
//$sqldistrict = '
//SELECT
//DISTINCT(u.district) as id,
//d.`name` as name
//FROM
//	employees e
//LEFT JOIN `user` u ON e.user_id = u.id
//LEFT JOIN position p ON p.id = e.position
//LEFT JOIN district d ON d.provinceid = u.province
//WHERE u.village IS NOT NULL
//ORDER BY u.district, d.`name` ASC
//';
//$district = $db->get_select_nested($sqldistrict);
//$sqlvillage = '
//SELECT
//DISTINCT(u.district) as id,
//d.`name` as name
//FROM
//	employees e
//LEFT JOIN `user` u ON e.user_id = u.id
//LEFT JOIN position p ON p.id = e.position
//LEFT JOIN district d ON d.provinceid = u.province
//WHERE u.village IS NOT NULL
//ORDER BY u.district, d.`name` ASC
//';
//$village = $db->get_select_nested($sqlvillage);

//load view
$sqlunits = '
SELECT
DISTINCT(u.district) as district,
v.districtname,
u.village,
v.`name` as villagename
FROM
	employees e
LEFT JOIN `user` u ON e.userid = u.id
LEFT JOIN village v ON v.id = u.village
WHERE u.village IS NOT NULL
ORDER BY u.district, v.districtname ASC
';
$unit = $db->get_select_nested($sqlunits);
require('admin/views/employees/index.php');