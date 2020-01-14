<?php
$page = $_GET['page']; // get the requested page
$limit = $_GET['rows']; // get how many rows we want to have into the grid
$sidx = $_GET['sidx']; // get index row - i.e. user click to sort
$sord = $_GET['sord']; // get the direction
$searchTerm = strtoupper($_GET['searchTerm']);
if(!$sidx) $sidx =1;
if ($searchTerm=="") {
	$searchTerm="%";
} else {
	$searchTerm = "%" . $searchTerm . "%";
}

require_once("../dbConnect.php");
$db = new DBController();
$sql_0 = 'SELECT
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
t.`name` AS typename
FROM `user` u 
LEFT JOIN customer c ON c.userid = u.id
LEFT JOIN customertype t ON t.id = c.typeid
WHERE c.active = 1 ';
$sql = $sql_0 . "AND upper(u.`name`) like upper ('$searchTerm')";
$count = $db->numRows($sql);

if( $count >0 ) {
	$total_pages = ceil($count/$limit);
} else {
	$total_pages = 0;
}
if ($page > $total_pages) $page=$total_pages;
$start = $limit*$page - $limit; // do not put $limit*($page - 1)
if($total_pages!=0)
	$SQL = $sql_0 . "AND upper(u.`name`) like upper ('$searchTerm') ORDER BY $sidx $sord LIMIT $start , $limit";
else
	$SQL = $sql_0 . "AND upper(u.`name`) like upper ('$searchTerm') ORDER BY $sidx $sord";
$result = $db->get_select_nested($SQL);
class reponse{}
$response = new reponse();
$response->page = $page;
$response->total = $total_pages;
$response->records = $count;
$response->rows = $result;
echo json_encode($response);

?>
