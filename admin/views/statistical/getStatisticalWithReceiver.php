<?php
require_once("../dbcontroller.php");
$db_handle = new DBController();
if (!empty($_POST)) {
    $fromdate = $_POST["FromDate"];
    $todate = $_POST["ToDate"];
    $sql = 'SELECT
	r.ReceiverId,
	r.uName,
	SUM(r.Price) AS Total
FROM
	(
		SELECT
			e.ReceiverId,
			p.Price,
			u.`Name` AS uName
		FROM
			exportence e
		LEFT JOIN product p ON e.ProductId = p.Id
		LEFT JOIN `user` u ON u.Id = e.ReceiverId
		WHERE
			e.`Status` = 2
		AND DATE_FORMAT(e.Date, \'%Y-%m-%d\') BETWEEN "' . $fromdate . '"
		AND "' . $todate . '"
	) r
GROUP BY
	r.ReceiverId,
	r.uName';

    $staReveicer = $db_handle -> get_select_nested($sql);
    echo json_encode($staReveicer);
}
?>