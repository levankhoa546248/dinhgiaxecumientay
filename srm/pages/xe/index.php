<?php require('srm/pages/include/head.php'); ?>
<link rel="stylesheet" href="srm/themes/css/bootstrap.min.css">
<link rel="stylesheet" href="srm/themes/css/font-awesome.min.css">
<link rel="stylesheet" href="srm/themes/css/owl.carousel.css">
<link rel="stylesheet" href="srm/themes/css/owl.theme.default.min.css">
<link rel="stylesheet" type="text/css" href="themes/css/jquery.alerts.css">
<!-- MAIN CSS -->
<link rel="stylesheet" href="srm/themes/css/style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- PRE LOADER -->
<section class="preloader">
    <div class="spinner">
        <span class="spinner-rotate"></span>
    </div>
</section>

<!-- MENU -->
<?php require('srm/pages/include/menu.php'); ?>

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
                            <select name="hangxe" class="form-control" id="hangxe">
                                <option value="0" selected>---Chọn---</option>
                                <?php foreach ($hangxes as $hangxe) {
                                    $selected = $s_hangxe == $hangxe['id'] ? 'selected' : '';
                                    echo '<option value="' . $hangxe['id'] . '" ' . $selected . '>' . $hangxe['tenhang'] . '</option>';
                                } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Dòng xe:</label>
                            <select name="dongxe" class="form-control" id="dongxe">
                                <option value="0" selected>---Chọn---</option>
                                <?php foreach ($dongxes as $dongxe) {
                                    $selected = $s_dongxe == $dongxe['id'] ? 'selected' : '';
                                    echo '<option value="' . $dongxe['id'] . '" ' . $selected . '>' . $dongxe['tendongxe'] . '</option>';
                                } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Năm sản xuất:</label>
                            <select name="namsanxuat" class="form-control" id="namsanxuat">
                                <option value="0" selected>---Chọn---</option>
                                <?php foreach ($namsanxuats as $namsanxuat) {
                                    $selected = $s_namsanxuat == $namsanxuat['id'] ? 'selected' : '';
                                    echo '<option value="' . $namsanxuat['id'] . '" ' . $selected . '>' . $namsanxuat['ten'] . '</option>';
                                } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Nhiên liệu:</label>
                            <select name="nhienlieu" class="form-control" id="nhienlieu">
                                <option value="0" selected>---Chọn---</option>
                                <?php foreach ($nhienlieus as $nhienlieu) {
                                    $selected = $s_nhienlieu == $nhienlieu['id'] ? 'selected' : '';
                                    echo '<option value="' . $nhienlieu['id'] . '" ' . $selected . '>' . $nhienlieu['tennhienlieu'] . '</option>';
                                } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Hộp số:</label>
                            <select name="hopso" class="form-control" id="hopso">
                                <option value="0" selected>---Chọn---</option>
                                <?php foreach ($hopsos as $hopso) {
                                    $selected = $s_hopso == $hopso['id'] ? 'selected' : '';
                                    echo '<option value="' . $hopso['id'] . '" ' . $selected . '>' . $hopso['tenhopso'] . '</option>';
                                } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Số chỗ ngồi:</label>
                            <select name="chongoi" class="form-control" id="chongoi">
                                <option value="0" selected>---Chọn---</option>
                                <?php foreach ($chongois as $chongoi) {
                                    $selected = $s_chongoi == $chongoi['id'] ? 'selected' : '';
                                    echo '<option value="' . $chongoi['id'] . '" ' . $selected . '>' . $chongoi['tenchongoi'] . '</option>';
                                } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Xuất xứ:</label>
                            <select name="xuatxu" class="form-control" id="xuatxu">
                                <option value="0" selected>---Chọn---</option>
                                <?php foreach ($xuatxus as $xuatxu) {
                                    $selected = $s_xuatxu == $xuatxu['id'] ? 'selected' : '';
                                    echo '<option value="' . $xuatxu['id'] . '" ' . $selected . '>' . $xuatxu['ten'] . '</option>';
                                } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Màu sắc:</label>
                            <select name="mausac" class="form-control" id="mausac">
                                <option value="0" selected>---Chọn---</option>
                                <?php foreach ($mausacs as $mausac) {
                                    $selected = $s_mausac == $mausac['id'] ? 'selected' : '';
                                    echo '<option value="' . $mausac['id'] . '" ' . $selected . '>' . $mausac['ten'] . '</option>';
                                } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="button" id="search" class="section-btn btn btn-primary btn-block"
                                   value="Search"/>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 col-xs-12">
                    <div class="row" id="listxe">
                        <?php
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
            </div>
        </div>
    </section>

</main>

<!-- FOOTER -->
<?php require('srm/pages/include/footer.php'); ?>

<!-- SCRIPTS -->
<script src="srm/themes/js/jquery.js"></script>
<script src="srm/themes/js/bootstrap.min.js"></script>
<script src="srm/themes/js/owl.carousel.min.js"></script>
<script src="srm/themes/js/smoothscroll.js"></script>
<script src="srm/themes/js/custom.js"></script>
<script src="themes/js/jquery.alerts.js" type="text/javascript"></script>
<script type="text/javascript" src="themes/js/selfjs.js"></script>
<script>
    $(document).ready(function () {
        $('#hangxe').on('change', function () {
            var id = $(this).val();
            if (id && id != "0") {
                $.ajax({
                    type: 'POST',
                    url: 'manager.php?controller=nhapxe&action=getdongxe',
                    data: {
                        id: id
                    },
                    success: function (html) {
                        $('#dongxe').html(html);
                    }
                });
            } else {
                $('#dongxe').html('<option selected="selected" value="0">---Chọn---</option>');
            }
        });

        $('#search').click(function (e) {
            var hangxe = $("#hangxe").val();
            var dongxe = $("#dongxe").val();
            var namsanxuat = $("#namsanxuat").val();
            var nhienlieu = $("#nhienlieu").val();
            var hopso = $("#hopso").val();
            var chongoi = $("#chongoi").val();
            var xuatxu = $("#xuatxu").val();
            var mausac = $("#mausac").val();
            $.ajax({
                type: 'POST',
                url: 'srm.php?controller=xe&action=timxe',
                data: {
                    hangxe: hangxe,
                    dongxe: dongxe,
                    namsanxuat: namsanxuat,
                    nhienlieu: nhienlieu,
                    hopso: hopso,
                    chongoi: chongoi,
                    xuatxu: xuatxu,
                    mausac: mausac
                },
                success: function (html) {
                    $('#listxe').html(html);
                }
            });
        });
    });
</script>
</body>
</html>