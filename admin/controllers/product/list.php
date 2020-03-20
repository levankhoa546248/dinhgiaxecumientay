<?php
if (!empty($_POST)) {
    $tungay = $_POST['tungay'];
    $denngay = $_POST['denngay'];
    $hangxe = $_POST['hangxe'];
    $sql = 'SELECT x.*, hx.`Name` as tenhangxe FROM xe x JOIN subcategory hx on x.hangxe = hx.id
            WHERE x.ngaynhap BETWEEN CAST("' . $tungay . '" AS DATE) AND CAST("' . $denngay . '"  AS DATE)
            AND ((' . $hangxe . ' = 0) OR (' . $hangxe . ' != 0 AND x.hangxe = ' . $hangxe . '))';
    $list = select($sql);
    echo json_encode($list);
}
?>