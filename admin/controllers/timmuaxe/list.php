<?php
if (!empty($_POST)) {
    $tungay = $_POST['tungay'];
    $denngay = $_POST['denngay'];
    $daduyet = $_POST['daduyet'];

    $sql = 'SELECT * FROM xetimmua WHERE trangthai = ' . $daduyet . ' AND ngaytao BETWEEN CAST("' . $tungay . '" AS DATE) AND CAST("' . $denngay . '"  AS DATE)';
    $list = select($sql);
    echo json_encode($list);
}
?>