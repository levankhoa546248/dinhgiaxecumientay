<!-- Featured Car -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title text-center">
                    <h2>Các xe nỗi bật <small>Hãy liên hệ chúng tôi để được tư vấn và hỗ trợ</small></h2>
                </div>
            </div>

            <?php
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
            foreach ($xe as $xes) {
                ?>
                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary" style="height: 493px; width: 360px">
                        <div class="courses-top">
                            <div class="courses-image" style="width:360px; height:257px">
                                <img src="<?php echo $xes["duongdan"]; ?>" class="img-responsive" alt=""
                                     style="height: inherit;width: inherit;">
                            </div>
                            <div class="courses-date">
                                <span title="Author"><i
                                            class="fa fa-tint"></i> <?php echo $xes["tennhienlieu"]; ?></span>
                                <span title="Author"><i class="fa fa-cube"></i> <?php echo $xes["tenchongoi"]; ?></span>
                                <span title="Views"><i class="fa fa-cog"></i> <?php echo $xes["tenhopso"]; ?></span>
                            </div>
                        </div>

                        <div class="courses-detail">
                            <h3><a href="car-details.html"><?php echo $xes["tenxe"]; ?></a></h3>

                            <p class="lead"><small>
                                    <del> <?php echo number_format($xes["giaban"] + 10000000, 0, '.', ','); ?> </del>
                                </small> <strong><?php echo number_format($xes["giaban"], 0, '.', ','); ?> VND </strong>
                            </p>

                            <p>
                                &nbsp;<?php echo $xes["tenhangxe"] . " / " . $xes["tendongxe"] . " / " . $xes["tenmausac"] . " / " . $xes["tennamsanxuat"] . " / " . $xes["tenxuatxu"]; ?></p>
                        </div>

                        <div class="courses-info">
                            <a href="car.php?controller=xe&action=chitietC&idxe=<?php echo $xes["id"]; ?>"
                               class="section-btn btn btn-primary btn-block">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>