<?php require('car/main/include/head.php'); ?>
<?php require('car/main/include/menu.php'); ?>
<?php //require('car/main/include/home.php'); ?>
<?php //require('car/main/xe/main.php'); ?>
<main>
    <section>
        <div class="container">
            <div class="text-center">
                <h1>Danh sách xe đăng bán</h1>

                <br>

                <p class="lead">Tìm mua và bán các loại xe ô tô.</p>
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
                                <option value="0" selected>Chọn hãng xe</option>
                                <?php foreach ($subcategories as $subcategory) {
                                    $selected = $s_hangxe == $subcategory['Id'] ? 'selected' : '';
                                    echo '<option value="' . $subcategory['Id'] . '" ' . $selected . '>' . $subcategory['Name'] . '</option>';
                                } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Dòng xe:</label>
                            <select name="dongxe" class="form-control" id="dongxe">
                                <option value="0" selected>Chọn dòng xe</option>
                                <?php foreach ($dongxes as $dongxe) {
                                    $selected = $s_dongxe == $dongxe['id'] ? 'selected' : '';
                                    echo '<option value="' . $dongxe['id'] . '" ' . $selected . '>' . $dongxe['dongxe'] . '</option>';
                                } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Năm sản xuất:</label>
                            <select name="namsanxuat" class="form-control" id="namsanxuat">
                                <option value="0" selected>Chọn năm sản xuất</option>
                                <?php foreach ($namsanxuats as $namsanxuat) {
                                    $selected = $s_namsanxuat == $namsanxuat['id'] ? 'selected' : '';
                                    echo '<option value="' . $namsanxuat['id'] . '" ' . $selected . '>' . $namsanxuat['name'] . '</option>';
                                } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Nhiên liệu:</label>
                            <select name="nhienlieu" class="form-control" id="nhienlieu">
                                <option value="0" selected>Chọn nhiên liệu</option>
                                <?php foreach ($nhienlieus as $nhienlieu) {
                                    $selected = $s_nhienlieu == $nhienlieu['id'] ? 'selected' : '';
                                    echo '<option value="' . $nhienlieu['id'] . '" ' . $selected . '>' . $nhienlieu['name'] . '</option>';
                                } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Hộp số:</label>
                            <select name="hopso" class="form-control" id="hopso">
                                <option value="0" selected>Chọn hộp số</option>
                                <?php foreach ($hopsos as $hopso) {
                                    $selected = $s_hopso == $hopso['id'] ? 'selected' : '';
                                    echo '<option value="' . $hopso['id'] . '" ' . $selected . '>' . $hopso['name'] . '</option>';
                                } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Số chỗ ngồi:</label>
                            <select name="chongoi" class="form-control" id="chongoi">
                                <option value="0" selected>Chọn chỗ ngồi</option>
                                <?php foreach ($chongois as $chongoi) {
                                    $selected = $s_chongoi == $chongoi['id'] ? 'selected' : '';
                                    echo '<option value="' . $chongoi['id'] . '" ' . $selected . '>' . $chongoi['name'] . '</option>';
                                } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Xuất xứ:</label>
                            <select name="xuatxu" class="form-control" id="xuatxu">
                                <option value="0" selected>Chọn xuất xứ</option>
                                <?php foreach ($xuatxus as $xuatxu) {
                                    $selected = $s_xuatxu == $xuatxu['id'] ? 'selected' : '';
                                    echo '<option value="' . $xuatxu['id'] . '" ' . $selected . '>' . $xuatxu['name'] . '</option>';
                                } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Màu sắc:</label>
                            <select name="mausac" class="form-control" id="mausac">
                                <option value="0" selected>Chọn màu sắc</option>
                                <?php foreach ($mausacs as $mausac) {
                                    $selected = $s_mausac == $mausac['id'] ? 'selected' : '';
                                    echo '<option value="' . $mausac['id'] . '" ' . $selected . '>' . $mausac['name'] . '</option>';
                                } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Giá bán:</label>
                            <select name="giaban" class="form-control" id="giaban">
                                <option value="0" <?php echo $s_giaban == '0' ? 'selected' : '' ?>>Chọn giá bán
                                </option>
                                <option value="1" <?php echo $s_giaban == '1' ? 'selected' : '' ?>>Dưới 300</option>
                                <option value="2" <?php echo $s_giaban == '2' ? 'selected' : '' ?>>Từ 300 - 500
                                </option>
                                <option value="3" <?php echo $s_giaban == '3' ? 'selected' : '' ?>>Từ 500 - 700
                                </option>
                                <option value="4" <?php echo $s_giaban == '4' ? 'selected' : '' ?>>Từ 700 - 900
                                </option>
                                <option value="5" <?php echo $s_giaban == '5' ? 'selected' : '' ?>>Trên 900</option>
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
                                <div class="courses-thumb courses-thumb-secondary"
                                     style="height: 493px; width: 360px">
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
                                        <h3>
                                            <a href="car.php?controller=xe&action=chitiet"><?php echo $xes["tenxe"]; ?></a>
                                        </h3>

                                        <p class="lead"><small>
                                                <del> <?php echo number_format($xes["giaban"] + 10000000, 0, '.', ','); ?> </del>
                                            </small>
                                            <strong><?php echo number_format($xes["giaban"], 0, '.', ','); ?>
                                                VND </strong>
                                        </p>
                                    </div>
                                    <div class="courses-info">
                                        <a href="car-details.html" class="section-btn btn btn-primary btn-block">Xem
                                            thêm</a>
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
<?php require('car/main/include/contact.php'); ?>
<?php require('car/main/include/footer.php'); ?>

<script type="text/javascript" src="car/themes/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="car/themes/js/jquery.alerts.js"></script>
<script type="text/javascript" src="car/themes/js/selfjs.js"></script>
<link href="car/themes/css/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen"/>
<script>
    $(document).ready(function () {
        $('#search').click(function (e) {

            var hangxe = $("#hangxe").val();
            var dongxe = $("#dongxe").val();
            var namsanxuat = $("#namsanxuat").val();
            var nhienlieu = $("#nhienlieu").val();
            var hopso = $("#hopso").val();
            var chongoi = $("#chongoi").val();
            var xuatxu = $("#xuatxu").val();
            var mausac = $("#mausac").val();
            var giaban = $("#giaban").val();
            var search = [hangxe, dongxe, nhienlieu, hopso, chongoi, namsanxuat, xuatxu, mausac, giaban];
            location.href = "car.php?controller=xe&action=xeC&search=" + search;
        });
    });

    function getDongXe(val) {
        $.ajax({
            type: "POST",
            url: "car.php?controller=xe&action=getdongxe",
            data: 'idhangxe=' + val,
            success: function (data) {
                $("#dongxe").html(data);
                // getCity();
            }
        });
    }
</script>
</body>
</html>