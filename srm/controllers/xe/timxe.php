<?php
if (!empty($_POST)) {
    $hangxe = $_POST["hangxe"];
    $dongxe = $_POST["dongxe"];
    $namsanxuat = $_POST["namsanxuat"];
    $nhienlieu = $_POST["nhienlieu"];
    $hopso = $_POST["hopso"];
    $chongoi = $_POST["chongoi"];
    $xuatxu = $_POST["xuatxu"];
    $mausac = $_POST["mausac"];
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
                            LEFT JOIN namsanxuat AS nsx ON nsx.id = x.namsanxuat
                            LEFT JOIN nhienlieu AS nl ON nl.id = x.nhienlieu
                            LEFT JOIN mausac AS ms ON ms.id = x.mausac
                            LEFT JOIN dongxe AS dx ON dx.id = x.dongxe
                            LEFT JOIN hangxe AS hx ON hx.id = x.hangxe
                            LEFT JOIN hopso AS hs ON hs.id = x.hopso
                            LEFT JOIN chongoi AS cn ON cn.id = x.chongoi
                            LEFT JOIN xuatxu AS xx ON xx.id = x.xuatxu
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
                            WHERE x.trangthai = 1
                            AND x.hangxe = $hangxe
                            AND ($hangxe = 0 OR ($hangxe != 0 AND x.hangxe = $hangxe))
                            AND ($dongxe = 0 OR ($dongxe != 0 AND x.dongxe = $dongxe))
                            AND ($nhienlieu = 0 OR ($nhienlieu != 0 AND x.nhienlieu = $nhienlieu))
                            AND ($hopso = 0 OR ($hopso != 0 AND x.hopso = $hopso))
                            AND ($chongoi = 0 OR ($chongoi != 0 AND x.chongoi = $chongoi))
                            AND ($namsanxuat = 0 OR ($namsanxuat != 0 AND x.namsanxuat = $namsanxuat))
                            AND ($xuatxu = 0 OR ($xuatxu != 0 AND x.xuatxu = $xuatxu))
                            AND ($mausac = 0 OR ($mausac != 0 AND x.mausac = $mausac))
                            ORDER BY
                                x.ngaytao DESC
                         ");
    if (count($xe) == 0) {
        ?>
        <div class="text-center">
            <p class="lead">Không tìm thấy</p>
        </div>
        <?php
    } else {
        foreach ($xe as $xes) {
            ?>
            <div class="col-lg-6 col-md-4 col-sm-6">
                <div class="courses-thumb courses-thumb-secondary">
                    <div class="courses-top">
                        <div class="courses-image">
                            <img src="<?php echo $xes["duongdan"]; ?>" class="img-responsive" alt=""
                                 style="height: inherit;width: inherit;">
                        </div>
                        <div class="courses-date">
                                <span title="Author"><i
                                            class="fa fa-tint"></i> <?php echo $xes["tennhienlieu"]; ?></span>
                            <span title="Author"><i
                                        class="fa fa-cube"></i> <?php echo $xes["tenchongoi"]; ?></span>
                            <span title="Views"><i
                                        class="fa fa-cog"></i> <?php echo $xes["tenhopso"]; ?></span>
                        </div>
                    </div>

                    <div class="courses-detail">
                        <h3><a href="car-details.html"><?php echo $xes["tenxe"]; ?></a></h3>

                        <p class="lead"><small>
                                <del> <?php echo number_format($xes["giaban"] + 10000000, 0, '.', ','); ?> </del>
                            </small> <strong><?php echo number_format($xes["giaban"], 0, '.', ','); ?>
                                VND </strong>
                        </p>

                        <p>
                            &nbsp;<?php echo $xes["tenhangxe"] . " / " . $xes["tendongxe"] . " / " . $xes["tenmausac"] . " / " . $xes["tennamsanxuat"] . " / " . $xes["tenxuatxu"]; ?></p>
                    </div>

                    <div class="courses-info">
                        <a href="srm.php?controller=xe&action=chitiet&idxe=<?php echo $xes["id"]; ?>"
                           class="section-btn btn btn-primary btn-block">Xem thêm</a>
                    </div>
                </div>
            </div>
            <?php
        }
    }
}
?>