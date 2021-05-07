<?php
if (!empty($_POST)){
    $tungay = $_POST['tungay'];
    $denngay = $_POST['denngay'];
    $hangxe = $_POST['hangxe'];
    $trangthai = $_POST['trangthai'];
    $sql = "SELECT x.id, x.tenxe, x.giaban, DATE_FORMAT(x.ngaynhap,'%Y-%m-%d') AS ngaynhap, x.giavon, x.chiphimua, x.chiphiban,
       x.soluong, x.tienlai,
DATE_FORMAT(x.ngayban,'%Y-%m-%d') AS ngayban, CASE x.trangthai WHEN 1 THEN 'Đã bán' WHEN 0 THEN 'Chưa bán' END AS trangthai
FROM xe x WHERE x.ngaynhap BETWEEN CAST('$tungay' AS DATE) AND CAST('$denngay'  AS DATE) 
AND  x.trangthai = $trangthai AND (($hangxe = 0) OR ($hangxe != 0 AND x.hangxe = $hangxe))
ORDER BY x.ngaytao DESC ";
    $data = select($sql);
    echo json_encode($data);
}
?>