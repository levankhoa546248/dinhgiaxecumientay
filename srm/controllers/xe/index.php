<?php
$title = 'Định giá xe cũ Miền Tây';
$gioithieu = select_1_record("SELECT * FROM gioithieu");
$s_hangxe = '0';
$s_dongxe = '0';
$s_nhienlieu = '0';
$s_hopso = '0';
$s_chongoi = '0';
$s_namsanxuat = '0';
$s_xuatxu = '0';
$s_mausac = '0';
$s_giaban = '0';
$hangxes= select("SELECT * FROM hangxe WHERE trangthai = 1 ORDER BY ngaytao DESC ");
$dongxes= select("SELECT * FROM dongxe WHERE trangthai = 1 ORDER BY ngaytao DESC ");
$nhienlieus= select("SELECT * FROM nhienlieu WHERE trangthai = 1 ORDER BY ngaytao DESC ");
$hopsos= select("SELECT * FROM hopso WHERE trangthai = 1 ORDER BY ngaytao DESC ");
$chongois= select("SELECT * FROM chongoi WHERE trangthai = 1 ORDER BY ngaytao DESC ");
$xuatxus= select("SELECT * FROM xuatxu WHERE trangthai = 1 ORDER BY ngaytao DESC ");
$mausacs= select("SELECT * FROM mausac WHERE trangthai = 1 ORDER BY ngaytao DESC ");
$namsanxuats= select("SELECT * FROM namsanxuat WHERE trangthai = 1 ORDER BY ngaytao DESC ");
$chudautus= select("SELECT * FROM chudautu WHERE trangthai = 1 ORDER BY ngaytao DESC ");
$xe = get_select_nested("
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
                            hax.images AS duongdan
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
                            LEFT JOIN (
                                SELECT
                                    MIN(id) AS id,
                                    idxe,
                                    images
                                FROM
                                    hinhanhxe
                                GROUP BY
                                    idxe
                            ) AS hax ON x.id = hax.idxe
                            WHERE
                                x.trangthai = 1
                            ORDER BY
                                x.ngaytao DESC
                         ");
require('srm/pages/xe/index.php');
?>