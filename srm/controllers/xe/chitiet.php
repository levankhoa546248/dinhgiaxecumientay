<?php
$title = 'Định giá xe cũ Miền Tây';
//load view
$idxe = $_GET["idxe"];
$chitietxe = select_1_record("
                        SELECT
                            x.id,
                            x.tenxe,
                            x.giahienthi,
                            x.giaban,
                            x.tieude,
                            x.mota,
                            x.chitiet,
                            ms.ten AS tenmausac,
                            dx.tendongxe AS tendongxe,
                            hx.tenhang AS tenhangxe,
                            hs.tenhopso AS tenhopso,
                            nl.tennhienlieu AS tennhienlieu,
                            cn.tenchongoi AS tenchongoi,
                            nsx.ten AS tennamsanxuat,
                            xx.ten AS tenxuatxu,
                            x.nhanviennhap
                            FROM
                            `xe` AS x
                            LEFT JOIN namsanxuat AS nsx ON nsx.id = x.namsanxuat
                            LEFT JOIN nhienlieu AS nl ON nl.id = x.nhienlieu
                            LEFT JOIN mausac AS ms ON ms.id = x.mausac
                            LEFT JOIN dongxe AS dx ON dx.id = x.dongxe
                            LEFT JOIN hangxe AS hx ON hx.id = x.hangxe
                            LEFT JOIN hopso AS hs ON hs.id = x.hopso
                            LEFT JOIN chongoi AS cn ON cn.id = x.chongoi
                            LEFT JOIN xuatxu AS xx ON xx.id = x.xuatxu
                            WHERE
                                x.trangthai = 1
                            AND x.id = $idxe
                            ORDER BY
                                x.ngaytao DESC
                         ");
$idnhanvien = $chitietxe["nhanviennhap"];
$ctnhanvien = select_1_record("SELECT * FROM nhanvien WHERE trangthai = 1 AND id = $idnhanvien");
//Hình ảnh xe
$sqlim = 'SELECT images FROM hinhanhxe WHERE idxe =' . $idxe;
$dataim = select_1_record($sqlim);
$images = json_encode($dataim["images"]);
require('srm/pages/xe/chitiet.php');
