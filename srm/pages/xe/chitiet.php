<?php require('srm/pages/include/head.php'); ?>
<link rel="stylesheet" href="srm/themes/css/bootstrap.min.css">
<link rel="stylesheet" href="srm/themes/css/font-awesome.min.css">
<link rel="stylesheet" href="srm/themes/css/owl.carousel.css">
<link rel="stylesheet" href="srm/themes/css/owl.theme.default.min.css">
<link rel="stylesheet" type="text/css" href="themes/css/jquery.alerts.css">
<!-- MAIN CSS -->
<link rel="stylesheet" href="srm/themes/css/style.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
<!-- File input -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/css/fileinput.min.css" media="all"
      rel="stylesheet" type="text/css"/>
<link href="themes/fileinput/css/fileinput.min.css" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" rel="stylesheet">
<link href="themes/fileinput/themes/explorer-fas/theme.css" rel="stylesheet">
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
    <section class="section-background">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="file-loading">
                        <input id="input-21" type="file" accept="image/*" multiple>
                    </div>
                </div>

                <div class="col-md-6 col-xs-12">
                    <form action="#" method="post" class="form">
                        <h2><?php echo $chitietxe["tenxe"] ?></h2>

                        <p class="lead"><small>
                                <del> <?php echo $chitietxe["giahienthi"] == 0 ? "" : number_format($chitietxe["giahienthi"], 0, '.', ',') ?></del>
                            </small> <strong
                                    class="text-primary"><?php echo number_format($chitietxe["giaban"], 0, '.', ',') ?>
                                VND</strong></p>
                        <p class="lead"><?php echo $chitietxe["mota"] ?></p>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <p>
                                    <span>Nhiên liệu</span>

                                    <br>

                                    <strong><?php echo $chitietxe["tennhienlieu"] ?></strong>
                                </p>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <p>
                                    <span>Số chỗ ngồi</span>

                                    <br>

                                    <strong><?php echo $chitietxe["tenchongoi"] ?></strong>
                                </p>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <p>
                                    <span>Hộp số</span>

                                    <br>

                                    <strong><?php echo $chitietxe["tenhopso"] ?></strong>
                                </p>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <p>
                                    <span>Hãng sản xuất</span>

                                    <br>

                                    <strong><?php echo $chitietxe["tenhangxe"] ?></strong>
                                </p>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <p>
                                    <span>Dòng xe</span>

                                    <br>

                                    <strong><?php echo $chitietxe["tendongxe"] ?></strong>
                                </p>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <p>
                                    <span>Màu sắc</span>

                                    <br>

                                    <strong><?php echo $chitietxe["tenmausac"] ?></strong>
                                </p>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <p>
                                    <span>Năm sản xuất</span>

                                    <br>

                                    <strong><?php echo $chitietxe["tennamsanxuat"] ?></strong>
                                </p>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <p>
                                    <span>Xuất xứ</span>

                                    <br>

                                    <strong><?php echo $chitietxe["tenxuatxu"] ?></strong>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Chi tiết xe</h4>
                        </div>

                        <div class="panel-body">
                            <p>
                                <?php echo $chitietxe["chitiet"] ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Thông tin liên hệ</h4>
                        </div>

                        <div class="panel-body">
                            <p>
                                <span>Họ tên</span>

                                <br>

                                <strong><?php echo $chitietxe["tennhanvien"] ?></strong>
                            </p>

                            <p>
                                <span>Điện thoại</span>

                                <br>

                                <strong><a target="_blank"
                                           href="tel:<?php echo $chitietxe["dienthoai"] ?>"><?php echo $chitietxe["dienthoai"] ?></a></strong>
                            </p>


                            <p>
                                <span>Zalo</span>

                                <br>

                                <strong><a target="_blank"
                                           href="<?php echo $chitietxe["zalo"] ?>"><?php echo $chitietxe["zaloview"] ?></a></strong>
                            </p>

                            <p>
                                <span>Facebook</span>

                                <br>

                                <strong><a target="_blank"
                                           href="<?php echo $chitietxe["facebook"] ?>"><?php echo $chitietxe["facebookview"] ?></a></strong>
                            </p>
                            <p>
                                <span>Email</span>

                                <br>

                                <strong><a target="_blank"
                                           href="mailto:<?php echo $chitietxe["email"] ?>"><?php echo $chitietxe["email"] ?></a></strong>
                            </p>
                        </div>
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
<!-- File input -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/fileinput.min.js"></script>
<script src="themes/fileinput/js/fileinput.js"></script>
<script src="themes/fileinput/themes/explorer-fas/theme.js"></script>
<script src="manager/plugins/summernote/summernote-bs4.min.js"></script>
<!-- blockUI -->
<script type="text/javascript" src="themes/jquery/blockUI/jquery.blockUI.js"></script>
<script>
    $(document).ready(function () {
        $("#hinhdinhgias").fileinput({
            showCaption: false,
            showRemove: true,
            showUpload: false,
            showPreview: true,
            theme: 'explorer-fas',
            dropZoneTitle: 'Thêm hình ảnh xe'
        });

        $("#hinhdangkiems").fileinput({
            showCaption: false,
            showRemove: true,
            showUpload: false,
            showPreview: true,
            theme: 'explorer-fas',
            dropZoneTitle: 'Thêm hình ảnh giấy đăng kiểm'
        });

        $("#guidinhgia").click(function (e) {
            var dataform = new FormData();
            var lhinhdangkiems = document.getElementById('hinhdangkiems').files.length;
            for (var index = 0; index < lhinhdangkiems; index++) {
                dataform.append("hinhdangkiems[]", document.getElementById('hinhdangkiems').files[index]);
            }
            var lengthimages = document.getElementById('hinhdinhgias').files.length;
            for (var index = 0; index < lengthimages; index++) {
                dataform.append("hinhdinhgias[]", document.getElementById('hinhdinhgias').files[index]);
            }

            var hoten = $("#hoten").val();
            dataform.append("hoten", hoten);
            var dienthoai = $("#dienthoai").val();
            dataform.append("dienthoai", dienthoai);
            var diachi = $("#diachi").val();
            dataform.append("diachi", diachi);
            var hangxe = $("#hangxe").val();
            dataform.append("hangxe", hangxe);
            var dongxe = $("#dongxe").val();
            dataform.append("dongxe", dongxe);
            var giabanmongmuon = $("#giabanmongmuon").val();
            dataform.append("giabanmongmuon", giabanmongmuon);
            var thongtinxe = $("#thongtinxe").val();
            dataform.append("thongtinxe", thongtinxe);
            $.blockUI({
                message: '<h4>Đang load dữ liệu</h4>',
            });
            $.ajax({
                url: "srm.php?controller=dinhgia&action=guidinhgia",
                type: "POST",
                data: dataform,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response > 0) {
                        disableinput(true);
                        jAlert("Gửi thông tin thành công. Chúng tôi sẽ liên hệ cho bạn thời gian sớm nhất", "Thông báo");
                    } else if (response = -1) {
                        jAlert("Gửi thông tin không thành công", "Thông báo");
                    }
                    $.unblockUI();
                }
            });
        });

        function disableinput(bool) {
            $("#hoten").prop("disabled", bool);
            $("#dienthoai").prop("disabled", bool);
            $("#diachi").prop("disabled", bool);
            $("#hangxe").prop("disabled", bool);
            $("#dongxe").prop("disabled", bool);
            $("#giabanmongmuon").prop("disabled", bool);
            $("#thongtinxe").prop("disabled", bool);
            $('#hinhdangkiems').fileinput(bool ? 'disable' : 'enable');
            $('#hinhdinhgias').fileinput(bool ? 'disable' : 'enable');
            $("#guidinhgia").prop("disabled", bool);
        }
    });
</script>
</body>
</html>