<?php
if (isset($_GET["search"])) {
    $arrsearch = preg_split("/\,/", $_GET["search"]);
    $hangxe = intval($arrsearch[0]);
    $dongxe = intval($arrsearch[1]);
    $nhienlieu = intval($arrsearch[2]);
    $hopso = intval($arrsearch[3]);
    $chongoi = intval($arrsearch[4]);
    $namsanxuat = intval($arrsearch[5]);
    $xuatxu = intval($arrsearch[6]);
    $mausac = intval($arrsearch[7]);
    $giaban = intval($arrsearch[8]);
    $andgiaban = "";
    if ($giaban = 0) {
        $andgiaban;
    } elseif ($giaban = 1) {
        $andgiaban = " AND x.giaban <= 300000000 ";
    } elseif ($giaban = 2) {
        $andgiaban = " AND 300000000 < x.giaban AND x.giaban <= 500000000 ";
    } elseif ($giaban = 3) {
        $andgiaban = " AND 500000000 < x.giaban AND x.giaban <= 700000000 ";
    } elseif ($giaban = 4) {
        $andgiaban = " AND 700000000 < x.giaban AND x.giaban <= 900000000 ";
    } elseif ($giaban = 5) {
        $andgiaban = " AND 900000000 < x.giaban ";
    }

    $banner_left = get_a_record('banner', 'Visible = 1');
    $banner_right = get_a_record('banner', 'Visible = 2');
    $banner_ads = get_a_record('banner', 'Visible = 3');
    $slideshow = get_a_record('slideshow', 'Id = 1');
    $logo = get_a_record('logo', 'LogoId = 1 and IsActive = 1');
    $order_products = get_select_nested("
        SELECT
        hax.id AS idhax,
        hax.duongdan AS duongdan,
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
        AND ($hangxe = 0 OR ($hangxe != 0 AND x.hangxe = $hangxe))
        AND ($dongxe = 0 OR ($dongxe != 0 AND x.dongxe = $dongxe))
        AND ($nhienlieu = 0 OR ($nhienlieu != 0 AND x.nhienlieu = $nhienlieu))
        AND ($hopso = 0 OR ($hopso != 0 AND x.hopso = $hopso))
        AND ($chongoi = 0 OR ($chongoi != 0 AND x.chongoi = $chongoi))
        AND ($namsanxuat = 0 OR ($namsanxuat != 0 AND x.namsanxuat = $namsanxuat))
        AND ($xuatxu = 0 OR ($xuatxu != 0 AND x.xuatxu = $xuatxu))
        AND ($mausac = 0 OR ($mausac != 0 AND x.mausac = $mausac))
    ");
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

    $title = 'Trang chủ';
    require('website/views/search/index.php');
}