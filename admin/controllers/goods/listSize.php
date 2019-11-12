<?php
require_once("../dbConnect.php");
$db = new DBController();
$sex = $_POST['sex'];
$where = '';
if ($sex != -1){
    $where = 'WHERE s.sex = '.$sex;
}
$sql = 'SELECT
	s.id,
	s.`name` AS name,
	CASE s.sex
WHEN 2 THEN
	"Nữ"
WHEN 1 THEN
	"Nam"
ELSE
	"Không chọn"
END AS sex
FROM
	size s ' . $where;
$list = $db->get_select_nested($sql);
echo json_encode($list);
?>