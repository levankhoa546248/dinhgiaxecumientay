<?php
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
?>
<main>
    <section>
        <div class="container">
            <div class="text-center">
                <h1>Danh sách xe đăng bán</h1>

                <br>

                <p class="lead">Bán các loại xe cũ mới</p>
            </div>
        </div>
    </section>

    <section class="section-background">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-xs-12">
                    <div class="form">
                        <div class="form-group">
                            <label>Hãng xe:</label>
                            <select name="hangxe" class="form-control" id="hangxe"
                                    onChange="getDongXe(this.value);">
                                <option disabled selected>Chọn hãng xe</option>
                                <?php foreach ($subcategories as $subcategory) {
                                    $selected = '';
                                    echo '<option value="' . $subcategory['Id'] . '" ' . $selected . '>' . $subcategory['Name'] . '</option>';
                                } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Dòng xe:</label>
                            <select name="dongxe" class="form-control" id="dongxe">
                                <option disabled selected>Chọn dòng xe</option>
                                <?php foreach ($dongxes as $dongxe) {
                                    $selected = '';
                                    echo '<option value="' . $dongxe['id'] . '" ' . $selected . '>' . $dongxe['dongxe'] . '</option>';
                                } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Năm sản xuất:</label>
                            <select name="namsanxuat" class="form-control" id="namsanxuat">
                                <option disabled selected>Chọn năm sản xuất</option>
                                <?php foreach ($namsanxuats as $namsanxuat) {
                                    $selected = '';
                                    echo '<option value="' . $namsanxuat['id'] . '" ' . $selected . '>' . $namsanxuat['name'] . '</option>';
                                } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Nhiên liệu:</label>
                            <select name="nhienlieu" class="form-control" id="nhienlieu">
                                <option disabled selected>Chọn nhiên liệu</option>
                                <?php foreach ($nhienlieus as $nhienlieu) {
                                    $selected = '';
                                    echo '<option value="' . $nhienlieu['id'] . '" ' . $selected . '>' . $nhienlieu['name'] . '</option>';
                                } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Hộp số:</label>
                            <select name="hopso" class="form-control" id="hopso">
                                <option disabled selected>Chọn hộp số</option>
                                <?php foreach ($hopsos as $hopso) {
                                    $selected = '';
                                    echo '<option value="' . $hopso['id'] . '" ' . $selected . '>' . $hopso['name'] . '</option>';
                                } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Số chỗ ngồi:</label>
                            <select name="chongoi" class="form-control" id="chongoi">
                                <option disabled selected>Chọn chỗ ngồi</option>
                                <?php foreach ($chongois as $chongoi) {
                                    $selected = '';
                                    echo '<option value="' . $chongoi['id'] . '" ' . $selected . '>' . $chongoi['name'] . '</option>';
                                } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Xuất xứ:</label>
                            <select name="xuatxu" class="form-control" id="xuatxu">
                                <option disabled selected>Chọn xuất xứ</option>
                                <?php foreach ($xuatxus as $xuatxu) {
                                    $selected = '';
                                    echo '<option value="' . $xuatxu['id'] . '" ' . $selected . '>' . $xuatxu['name'] . '</option>';
                                } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Màu sắc:</label>
                            <select name="mausac" class="form-control" id="mausac">
                                <option disabled selected>Chọn màu sắc</option>
                                <?php foreach ($mausacs as $mausac) {
                                    $selected = '';
                                    echo '<option value="' . $mausac['id'] . '" ' . $selected . '>' . $mausac['name'] . '</option>';
                                } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Giá bán:</label>
                            <select name="giaban" class="form-control" id="giaban">
                                <option disabled selected>Chọn giá bán</option>
                                <option value="1">Dưới 300</option>
                                <option value="2">Từ 300 - 500</option>
                                <option value="3">Từ 500 - 700</option>
                                <option value="4">Từ 700 - 900</option>
                                <option value="5">Trên 900</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="button" id="search" class="section-btn btn btn-primary btn-block"
                                   value="Search"/>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 col-xs-12">
                    <div class="row">
                        <?php
                        foreach ($xe as $xes) {
                            ?>
                            <div class="col-lg-6 col-md-4 col-sm-6">
                                <div class="courses-thumb courses-thumb-secondary" style="height: 493px; width: 360px">
                                    <div class="courses-top">
                                        <div class="courses-image" style="width:360px; height:257px">
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
                                        <a href="car-details.html" class="section-btn btn btn-primary btn-block">View
                                            More</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require('car/main/include/blog.php'); ?>
    <?php require('car/main/include/testimonial.php'); ?>
</main>
<script type="text/javascript" src="car/themes/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="car/themes/js/jquery.alerts.js"></script>
<script type="text/javascript" src="car/themes/js/selfjs.js"></script>
<link href="car/themes/css/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen"/>
<script>
    $(document).ready(function () {
        $('#search').click(function (e) {
            jAlert(1);
        });
    });
</script>