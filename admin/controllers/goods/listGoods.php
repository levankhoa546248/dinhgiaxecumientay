<?php
require_once("../dbConnect.php");
$db = new DBController();
//$goodssizesexid = $_POST['goodssizesexid'];
//$goodssizeid = $_POST['goodssizeid'];
//$goodscolorid = $_POST['goodscolorid'];
//$goodstypeid = $_POST['goodstypeid'];
//$goodsgroupsubid = $_POST['goodsgroupsubid'];
//$goodsgroupid = $_POST['goodsgroupid'];
//$countryid = $_POST['countryid'];
//$producerid = $_POST['producerid'];

$sql = '
SELECT g.*, 
u.`name` as unitname,
CASE g.sizesex WHEN 1 THEN \'Nam\' WHEN 2 THEN \'Nữ\' ELSE \'Không chọn\' END as sizesexname,
s.`name` as sizename, 
-- c.`name` as colorname, 
t.`name` as typename, ggs.`name` as groupsubname,
gg.`name` as groupname, ct.`name` as countryname,
sl.`name` as suppliername 
FROM goods g
LEFT JOIN size s ON g.sizeid = s.id
-- LEFT JOIN color c ON g.colorid = c.id
LEFT JOIN goodstype t ON g.typeid = t.id
LEFT JOIN goodsgroupsub ggs ON g.groupsubid = ggs.id
LEFT JOIN goodsgroup gg ON g.groupid = gg.id
LEFT JOIN country ct ON g.countryid = ct.id
LEFT JOIN supplier sl ON g.supplierid = sl.id
LEFT JOIN unit u ON g.unit = u.id
';
$list = $db->get_select_nested($sql);
echo json_encode($list);
?>