<?php
if (!empty($_POST)) {
    $tungay = $_POST['tungay'];
    $denngay = $_POST['denngay'];

    $sql = 'SELECT
                n.manhadautu,
                n.tennhadautu,
                n.tongtien,
                n.sodu,
                sum(c.tienlai) AS tienlai,
                sum(c.vondautu) AS vondautu
            FROM
                nhadautu AS n
            INNER JOIN chudautuxe AS c ON c.idchudautu = n.manhadautu
            WHERE c.ngayban BETWEEN CAST("' . $tungay . '" AS DATE) AND CAST("' . $denngay . '"  AS DATE)
            AND c.trangthai = 1
            GROUP BY
                n.manhadautu,
                n.tennhadautu,
                n.tongtien,
                n.sodu';
    $list = select($sql);
    echo json_encode($list);
}
?>