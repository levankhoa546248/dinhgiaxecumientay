<?php
if (isset($_GET["search"])) {
    $arrsearch = preg_split("/\,/", $_GET["search"]);
    $s_hangxe = intval($arrsearch[0]);
    $s_dongxe = intval($arrsearch[1]);
    $s_nhienlieu = intval($arrsearch[2]);
    $s_hopso = intval($arrsearch[3]);
    $s_chongoi = intval($arrsearch[4]);
    $s_namsanxuat = intval($arrsearch[5]);
    $s_xuatxu = intval($arrsearch[6]);
    $s_mausac = intval($arrsearch[7]);
    $s_giaban = intval($arrsearch[8]);
    $andgiaban = "";
    if ($s_giaban == 0) {
        $andgiaban;
    } elseif ($s_giaban == 1) {
        $andgiaban = " AND x.giaban <= 300000000 ";
    } elseif ($s_giaban == 2) {
        $andgiaban = " AND 300000000 < x.giaban AND x.giaban <= 500000000 ";
    } elseif ($s_giaban == 3) {
        $andgiaban = " AND 500000000 < x.giaban AND x.giaban <= 700000000 ";
    } elseif ($s_giaban == 4) {
        $andgiaban = " AND 700000000 < x.giaban AND x.giaban <= 900000000 ";
    } elseif ($s_giaban == 5) {
        $andgiaban = " AND 900000000 < x.giaban ";
    }
    $sql = "
        SELECT                            
            hax.id AS idhax,
            IFNULL(
                hax.duongdan,
                'car/images/blog-1-720x480.jpg'
            ) AS duongdan,
            cn.`name` AS tenchongoi,
            hs.`name` AS tenhopso,
            nl.`name` AS tennhienlieu,
            hx.`Name` AS tenhangxe,
            dx.dongxe AS tendongxe,
            xx.`name` AS tenxuatxu,
            nsx.`name` AS tennamsanxuat,
            ms.`name` AS tenmausac,
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
            x.ngaynhap,
            x.trangthai,
            x.nhanvien,
            x.ngayban,
            x.ngaytao,
            x.dongxe,
            x.nhienlieu,
            x.hopso,
            x.chongoi,
            x.namsanxuat,
            x.xuatxu
            FROM
            `xe` AS x
            LEFT JOIN (SELECT MIN(id) as id, idxe, duongdan FROM hinhanhxe
            GROUP BY idxe) AS hax ON x.id = hax.idxe
            LEFT JOIN subcategory AS hx ON hx.Id = x.hangxe AND x.hangxe = hx.Id
            LEFT JOIN dongxe dx ON dx.id = x.dongxe
            LEFT JOIN nhienlieu nl ON nl.id = x.nhienlieu
            LEFT JOIN hopso hs ON hs.id = x.hopso
            LEFT JOIN chongoi cn ON cn.id = x.chongoi
            LEFT JOIN xuatxu xx ON xx.id = x.xuatxu
            LEFT JOIN mausac ms ON ms.id = x.mausac
            LEFT JOIN namsanxuat nsx ON nsx.id = x.namsanxuat
            WHERE x.trangthai = 0
            AND ($s_hangxe = 0 OR ($s_hangxe != 0 AND x.hangxe = $s_hangxe))
            AND ($s_dongxe = 0 OR ($s_dongxe != 0 AND x.dongxe = $s_dongxe))
            AND ($s_nhienlieu = 0 OR ($s_nhienlieu != 0 AND x.nhienlieu = $s_nhienlieu))
            AND ($s_hopso = 0 OR ($s_hopso != 0 AND x.hopso = $s_hopso))
            AND ($s_chongoi = 0 OR ($s_chongoi != 0 AND x.chongoi = $s_chongoi))
            AND ($s_namsanxuat = 0 OR ($s_namsanxuat != 0 AND x.namsanxuat = $s_namsanxuat))
            AND ($s_xuatxu = 0 OR ($s_xuatxu != 0 AND x.xuatxu = $s_xuatxu))
            AND ($s_mausac = 0 OR ($s_mausac != 0 AND x.mausac = $s_mausac)) $andgiaban
        ";
    $xe = get_select_nested($sql);

    $subcategories = get_all('subcategory', array(
        'select' => 'Id,Name',
        'order_by' => 'Name'
    ));
    $dongxes = get_select_nested('SELECT dx.id, dx.dongxe, dx.idhangxe, sub.`Name` as tenhangxe FROM dongxe dx
LEFT JOIN subcategory sub ON dx.idhangxe = sub.Id where dx.trangthai = 1 and dx.idhangxe = ' . $s_hangxe);
    $nhienlieus = get_select_nested('SELECT id, name FROM nhienlieu where trangthai = 1');
    $hopsos = get_select_nested('SELECT id, name FROM hopso where trangthai = 1');
    $chongois = get_select_nested('SELECT id, name FROM chongoi where trangthai = 1');
    $xuatxus = get_select_nested('SELECT id, name FROM xuatxu where trangthai = 1');
    $mausacs = get_select_nested('SELECT id, name FROM mausac where trangthai = 1');
    $namsanxuats = get_select_nested('SELECT id, name FROM namsanxuat where trangthai = 1');
    require('car/main/xe/index.php');
} else {
    $s_hangxe = '0';
    $s_dongxe = '0';
    $s_nhienlieu = '0';
    $s_hopso = '0';
    $s_chongoi = '0';
    $s_namsanxuat = '0';
    $s_xuatxu = '0';
    $s_mausac = '0';
    $s_giaban = '0';
    $subcategories = get_all('subcategory', array(
        'select' => 'Id,Name',
        'order_by' => 'Name'
    ));
    $dongxes = get_select_nested('SELECT dx.id, dx.dongxe, dx.idhangxe, sub.`Name` as tenhangxe FROM dongxe dx
LEFT JOIN subcategory sub ON dx.idhangxe = sub.Id where dx.trangthai = 1');
    $nhienlieus = get_select_nested('SELECT id, name FROM nhienlieu where trangthai = 1');
    $hopsos = get_select_nested('SELECT id, name FROM hopso where trangthai = 1');
    $chongois = get_select_nested('SELECT id, name FROM chongoi where trangthai = 1');
    $xuatxus = get_select_nested('SELECT id, name FROM xuatxu where trangthai = 1');
    $mausacs = get_select_nested('SELECT id, name FROM mausac where trangthai = 1');
    $namsanxuats = get_select_nested('SELECT id, name FROM namsanxuat where trangthai = 1');
    $xe = get_select_nested("
                            SELECT
                                hax.id AS idhax,
                                IFNULL(
                                    hax.duongdan,
                                    'car/images/blog-1-720x480.jpg'
                                ) AS duongdan,
                                x.*, cn.`name` AS tenchongoi,
                                hs.`name` AS tenhopso,
                                nl.`name` AS tennhienlieu,
                                sub.`Name` AS tenhangxe,
                                dx.dongxe AS tendongxe,
                                xx.`name` AS tenxuatxu,
                                nsx.`name` AS tennamsanxuat,
                                ms.`name` AS tenmausac
                            FROM
                                xe x
                            LEFT JOIN (
                                SELECT
                                    MIN(id) AS id,
                                    idxe,
                                    duongdan
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
                            WHERE
                                x.trangthai = 0
                            ");
    require('car/main/xe/index.php');
}