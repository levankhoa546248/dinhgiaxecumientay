<?php
//load view
$idxe = $_GET["idxe"];
$sql = 'SELECT * FROM hinhanhxe WHERE idxe =' . $idxe;
$data = select($sql);
$preview = "";

for ($k = 0; $k < count($data); $k++) {
    if ($k == count($data) - 1) {
        $preview .= "\"" . $data[$k]["duongdan"] . "\"";
    } else {
        $preview .= "\"" . $data[$k]["duongdan"] . "\"" . ",";
    }
}
$config = select('SELECT id as \'key\' FROM hinhanhxe WHERE idxe =' . $idxe);
$previewconfig = json_encode($config);
$sqlxe = '
SELECT
	IFNULL(hax.soluonghinh, 0) AS soluonghinh,
	x.id,
	x.tenxe,
	x.giaban,
	x.mota,
	x.chitiet,
	x.giamgia,
	cn.`name` AS tenchongoi,
	hs.`name` AS tenhopso,
	nl.`name` AS tennhienlieu,
	sub.`Name` AS tenhangxe,
	dx.dongxe AS tendongxe,
	xx.`name` AS tenxuatxu,
	nsx.`name` AS tennamsanxuat,
	ms.`name` AS tenmausac,
	u.`Name` AS tennhanvien,
	u.Phone AS dienthoai,
	u.Zalo AS zalo,
	u.Facebook AS facebook,
	u.Email AS email,
	u.ZaloView AS zaloview,
	u.FacebookView AS facebookview
FROM
	xe x
LEFT JOIN (
	SELECT
		idxe,
		count(1) AS soluonghinh
	FROM
		hinhanhxe
	GROUP BY
		idxe
) hax ON x.id = hax.idxe
LEFT JOIN chongoi cn ON cn.id = x.chongoi
LEFT JOIN hopso hs ON hs.id = x.hopso
LEFT JOIN nhienlieu nl ON nl.id = x.nhienlieu
LEFT JOIN subcategory sub ON sub.id = x.hangxe
LEFT JOIN dongxe dx ON dx.id = x.dongxe
LEFT JOIN xuatxu xx ON xx.id = x.xuatxu
LEFT JOIN namsanxuat nsx ON nsx.id = x.namsanxuat
LEFT JOIN mausac ms ON ms.id = x.mausac
LEFT JOIN `user` u ON u.Id = x.nhanvien
WHERE
	x.trangthai = 0
AND x.id = ' . $idxe;
$chitietxe = select_1_record($sqlxe);
require('car/main/xe/chitiet.php');