<?php
if (!empty($_POST)){
    $tungay = $_POST['tungay'];
    $denngay = $_POST['denngay'];
    $hangxe = $_POST['hangxe'];
    $sql = "SELECT x.id, x.tenxe, x.giaban, DATE_FORMAT(x.ngaynhap,'%Y-%m-%d') AS ngaynhap FROM xe x 
WHERE x.ngaynhap BETWEEN CAST('$tungay' AS DATE) AND CAST('$denngay'  AS DATE) 
AND  x.trangthai = 1 AND (($hangxe = 0) OR ($hangxe != 0 AND x.hangxe = $hangxe))
ORDER BY x.ngaytao DESC ";
    $data = select($sql);
    echo json_encode($data);
}
?>