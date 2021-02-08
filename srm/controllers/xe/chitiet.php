<?php
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
                            xx.ten AS tenxuatxu
                            FROM
                            `xe` AS x
                            INNER JOIN namsanxuat AS nsx ON nsx.id = x.namsanxuat
                            INNER JOIN nhienlieu AS nl ON nl.id = x.nhienlieu
                            INNER JOIN mausac AS ms ON ms.id = x.mausac
                            INNER JOIN dongxe AS dx ON dx.id = x.dongxe
                            INNER JOIN hangxe AS hx ON hx.id = x.hangxe
                            INNER JOIN hopso AS hs ON hs.id = x.hopso
                            INNER JOIN chongoi AS cn ON cn.id = x.chongoi
                            INNER JOIN xuatxu AS xx ON xx.id = x.xuatxu
                            WHERE
                                x.trangthai = 1
                            AND x.id = $idxe
                            ORDER BY
                                x.ngaytao DESC
                         ");
$ctnhanvien = select_1_record();
require('srm/pages/xe/chitiet.php');
