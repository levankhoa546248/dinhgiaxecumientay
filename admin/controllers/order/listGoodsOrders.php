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
cd.goodsid,
cd.goodsname,
cd.goodssize,
cd.goodscolor,
cd.price,
cd.total,
FORMAT(cd.retail, 0) AS retail,
FORMAT(cd.wholesale, 0) AS wholesale,
FORMAT(cd.pricevip, 0) AS pricevip,
cd.goodsunit,
SUM(cd.amount) as amount
FROM
coupondetail AS cd
WHERE cd.isimport NOT IN (0, 2)
';
$sql_1 = $sql_0 . " AND upper(cd.goodsname) like upper ('$searchTerm')";
$sql_groupby = ' GROUP BY
cd.goodsid,
cd.goodsname,
cd.goodssize,
cd.goodscolor,
cd.price,
cd.total,
cd.retail,
cd.wholesale,
cd.pricevip,
cd.goodsunit';
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
	$SQL = $sql_0 . "AND upper(cd.goodsname) like upper ('$searchTerm') " . $sql_groupby . " ORDER BY $sidx $sord " . " LIMIT $start , $limit";
else
	$SQL = $sql_0 . "AND upper(cd.goodsname) like upper ('$searchTerm') " . $sql_groupby . " ORDER BY $sidx $sord";
$result = $db->get_select_nested($SQL);
class reponse{}
$response = new reponse();
$response->page = $page;
$response->total = $total_pages;
$response->records = $count;
$response->rows = $result;
echo json_encode($response);

?>
