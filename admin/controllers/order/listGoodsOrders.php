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
st.id,
st.gid AS goodsid,
st.`name` AS goodsname,
FORMAT(st.price, 0) as price,
FORMAT(st.retail, 0) as retail,
FORMAT(st.whole, 0) as wholesale,
FORMAT(st.vip, 0) as pricevip,
SUM(st.amount) - SUM(st.amounttemp) as amount
FROM `storage` st
WHERE st.amount > 0
';
$sql_1 = $sql_0 . " AND upper(st.`name`) like upper ('$searchTerm')";
$sql_groupby = ' GROUP BY
st.gid,
st.`name`,
st.price,
st.retail,
st.whole,
st.vip';
$sql = $sql_1 . $sql_groupby;
$count = $db->numRows($sql);

if( $count >0 ) {
	$total_pages = ceil($count/$limit);
} else {
	$total_pages = 0;
}
if ($page > $total_pages) $page=$total_pages;
$start = $limit*$page - $limit; // do not put $limit*($page - 1)
if($total_pages!=0)
	$SQL = $sql_0 . "AND upper(st.`name`) like upper ('$searchTerm') " . $sql_groupby . " ORDER BY $sidx $sord " . " LIMIT $start , $limit";
else
	$SQL = $sql_0 . "AND upper(st.`name`) like upper ('$searchTerm') " . $sql_groupby . " ORDER BY $sidx $sord";
$result = $db->get_select_nested($SQL);
class reponse{}
$response = new reponse();
$response->page = $page;
$response->total = $total_pages;
$response->records = $count;
$response->rows = $result;
echo json_encode($response);

?>
