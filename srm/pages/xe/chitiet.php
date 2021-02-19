<?php require('srm/pages/include/head.php'); ?>
<link rel="stylesheet" href="srm/themes/css/bootstrap.min.css">
<link rel="stylesheet" href="srm/themes/css/font-awesome.min.css">
<!--<link rel="stylesheet" href="srm/themes/css/owl.carousel.css">-->
<!--<link rel="stylesheet" href="srm/themes/css/owl.theme.default.min.css">-->
<link rel="stylesheet" type="text/css" href="themes/css/jquery.alerts.css">
<!-- MAIN CSS -->
<link rel="stylesheet" href="srm/themes/css/style.css">
<link rel="stylesheet" href="srm/themes/css/style-view-image.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
<!-- File input -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/css/fileinput.min.css" media="all"
      rel="stylesheet" type="text/css"/>
<link href="themes/fileinput/css/fileinput.min.css" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" rel="stylesheet">
<link href="themes/fileinput/themes/explorer-fas/theme.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" rel="stylesheet">
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
                    <div class="img-view-main">
                        <img id="image-main-hax" src="<?php echo $dataims[0]["images"]; ?>" alt=""
                             class="img-responsive wc-image" data-toggle="modal" data-target="#exampleModalPreview">
                    </div>
                    <div class="row text-center">
                        <div class="carousel-wrap">
                            <div class="owl-carousel" id="owl-main">
                                <?php foreach ($dataims as $dataim) { ?>
                                    <button class="btn btn-default btn-block" style="border: 0px">
                                        <img class="hinhanhxe" src="<?php echo $dataim["images"]; ?>"
                                             style="height: 100px">
                                    </button>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <form action="#" method="post" class="form">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>Thông tin xe</h4>
                            </div>
                            <div class="panel-body">
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

                                <strong><?php echo $ctnhanvien["hoten"] ?></strong>
                            </p>

                            <p>
                                <span>Điện thoại</span>

                                <br>

                                <strong><a target="_blank"
                                           href="tel:<?php echo $ctnhanvien["sodienthoai"] ?>"><?php echo $ctnhanvien["sodienthoai"] ?></a></strong>
                            </p>


                            <p>
                                <span>Zalo</span>

                                <br>

                                <strong><a target="_blank"
                                           href="<?php echo $ctnhanvien["zalo"] ?>">Zalo</a></strong>
                            </p>

                            <p>
                                <span>Facebook</span>

                                <br>

                                <strong><a target="_blank"
                                           href="<?php echo $ctnhanvien["facebook"] ?>">Facebook</a></strong>
                            </p>
                            <p>
                                <span>Email</span>

                                <br>

                                <strong><a target="_blank"
                                           href="mailto:<?php echo $ctnhanvien["email"] ?>"><?php echo $ctnhanvien["email"] ?></a></strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Xem anh-->
        <!-- /.content-wrapper -->
        <div class="modal fade right" id="exampleModalPreview" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalPreviewLabel" aria-hidden="true">
            <div class="modal-dialog-full-width modal-dialog modal-lg">
                <div class="modal-content-full-width modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title">Xem hình ảnh</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12 col-xs-12">
                            <div class="row">
                                <div class="owl-carousel owl-theme" id="owl-dialog">
                                    <?php foreach ($dataims as $dataim) { ?>
                                        <img class="img-responsive-dialog img-list-dialog" src="<?php echo $dataim["images"]; ?>">
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
<link href="themes/fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
<link href="themes/fileinput/themes/explorer-fas/theme.css" media="all" rel="stylesheet" type="text/css"/>
<script src="themes/fileinput/js/plugins/piexif.js" type="text/javascript"></script>
<script src="themes/fileinput/js/plugins/sortable.js" type="text/javascript"></script>
<script src="themes/fileinput/js/fileinput.js" type="text/javascript"></script>
<script src="themes/fileinput/js/locales/fr.js" type="text/javascript"></script>
<script src="themes/fileinput/js/locales/es.js" type="text/javascript"></script>
<script src="themes/fileinput/themes/fas/theme.js" type="text/javascript"></script>
<script src="themes/fileinput/themes/explorer-fas/theme.js" type="text/javascript"></script>
<!-- blockUI -->
<script type="text/javascript" src="themes/jquery/blockUI/jquery.blockUI.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        hinhanhxe(<?php echo $_GET["idxe"]; ?>);

        function hinhanhxe(idxe) {
            $.ajax({
                url: "srm.php?controller=xe&action=hinhanhxe",
                type: "POST",
                data: {
                    id: idxe
                },
                success: function (data) {
                    var ha = JSON.parse(data);
                    var length = ha.length;
                    if (length > 0) {
                        var pre = [];
                        for (var i = 0; i < length; i++) {
                            pre.push("<img class='kv-preview-data file-preview-image' src='" + ha[i].images + "'>");
                        }
                        $("#hinhxes").fileinput({
                            showBrowse: false,
                            showCaption: false,
                            showRemove: true,
                            showUpload: false,
                            showPreview: true,
                            theme: 'fas',
                            initialPreview: pre
                        });
                    }
                }
            });
        }

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

        $('#owl-main').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            navText: [
                "<i class='fa fa-caret-left'></i>",
                "<i class='fa fa-caret-right'></i>"
            ],
            autoplay: false,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 3
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 5
                }
            }
        });

        $('#owl-dialog').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            navText: [
                "<i class='fa fa-caret-left'></i>",
                "<i class='fa fa-caret-right'></i>"
            ],
            autoplay: false,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });

        $('.hinhanhxe').on('click', function (event) {
            var $this = $(this);
            $('#image-main-hax').attr('src', $this.attr('src'));
        });

        $('#image-main-hax').on('click', function (event) {
            $('#modalxemanh').modal('show');
        });

        $('.img-list-dialog').click(function (event) {
            var $this = $(this);
            $('#image-dialog-hax').attr('src', $this.attr('src'));
        });
    });
</script>
</body>
</html>