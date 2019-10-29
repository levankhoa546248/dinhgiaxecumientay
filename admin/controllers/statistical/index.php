<?php

if (isset($_POST['gid'])) {
    foreach ($_POST['gid'] as $gid) {
        $gid = intval($gid);
        subcategories_delete($gid);
    }
}
$fromdate = date("Y-m-d");
$todate = date("Y-m-d");
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

$staReveicer = get_select_nested($sql);

$title = 'Báo cáo theo người nhận';
$user = $_SESSION['user'];
require('admin/views/statistical/index.php');