<?php
if (!empty($_POST)) {
    $tungay = $_POST['tungay'];
    $denngay = $_POST['denngay'];
    $hangxe = $_POST['hangxe'];
    $daban = $_POST['daban'];
    if ($daban == 1){
        $sql = 'SELECT 
                hx.`Name` AS tenhangxe,
                x.id,
                x.hangxe,
                x.tenxe,
                x.mausac,
                x.giavon,
                x.chietkhaumua,
                x.chietkhauban,
                x.soluong,
                x.chiphiphatsinh,
                x.giaban,
                IF(x.tonglai<0,0,x.tonglai) as tonglai,
                x.sotienconlai,
                x.ngaynhap,
                x.trangthai,
                x.nhanvien,
                x.ngayban, hx.`Name` as tenhangxe 
            FROM xe x JOIN subcategory hx on x.hangxe = hx.id
            WHERE x.ngayban BETWEEN CAST("' . $tungay . '" AS DATE) AND CAST("' . $denngay . '"  AS DATE)
            AND ((' . $hangxe . ' = 0) OR (' . $hangxe . ' != 0 AND x.hangxe = ' . $hangxe . '))
            AND x.trangthai = ' . $daban;
    }else{
        $sql = 'SELECT 
                hx.`Name` AS tenhangxe,
                x.id,
                x.hangxe,
                x.tenxe,
                x.mausac,
                x.giavon,
                x.chietkhaumua,
                x.chietkhauban,
                x.soluong,
                x.chiphiphatsinh,
                x.giaban,
                IF(x.tonglai<0,0,x.tonglai) as tonglai,
                x.sotienconlai,
                x.ngaynhap,
                x.trangthai,
                x.nhanvien,
                x.ngayban, hx.`Name` as tenhangxe 
            FROM xe x JOIN subcategory hx on x.hangxe = hx.id
            WHERE x.ngaynhap BETWEEN CAST("' . $tungay . '" AS DATE) AND CAST("' . $denngay . '"  AS DATE)
            AND ((' . $hangxe . ' = 0) OR (' . $hangxe . ' != 0 AND x.hangxe = ' . $hangxe . '))
            AND x.trangthai = ' . $daban;
    }
    $list = select($sql);
    echo json_encode($list);
}
?>