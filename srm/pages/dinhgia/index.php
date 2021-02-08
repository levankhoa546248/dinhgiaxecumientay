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
                <div class="text-center">
                    <form id="contact-form" role="form" action="" method="post">
                        <div class="section-title">
                            <h2>Định giá xe <small>Nhân viên chúng tôi sẽ kiểm tra thông tin và liên hệ với
                                    bạn qua số điện thoại.</small></h2>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" placeholder="Nhập đầy đủ họ tên" id="hoten"
                                   required>

                            <input type="text" class="form-control" placeholder="Nhập số điện thoại"
                                   id="dienthoai" required>

                            <input type="text" class="form-control" placeholder="Nhập địa chỉ" id="diachi"
                                   required>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" placeholder="Nhập hãng xe" id="hangxe">

                            <input type="text" class="form-control" placeholder="Nhập dòng xe" id="dongxe">

                            <input type="text" class="form-control" placeholder="Giá bán mong muốn"
                                   id="giabanmongmuon" data-type="currency">
                        </div>
                        <div class="col-sm-12">
                            <textarea class="form-control" rows="3"
                                      placeholder="Hãy cho chúng tôi biết tình trạng xe bạn hiện tại như thế nào. Một số thông tin cần cụ thể để dễ dàng định giá hơn. Cảm ơn bạn"
                                      id="thongtinxe"></textarea>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label>Hình ảnh giấy đăng kiểm</label>
                            <div class="kv-avatar justify-content-center">
                                <div class="file-loading">
                                    <input id="hinhdangkiems" name="hinhdangkiems[]" type="file" multiple>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label>Hình ảnh xe</label>
                            <div class="kv-avatar justify-content-center">
                                <div class="file-loading">
                                    <input id="hinhdinhgias" name="hinhdinhgias[]" type="file" multiple>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <input type="button" class="section-btn btn btn-primary" id="guidinhgia"
                           value="Hoàn tất thông tin và nhờ tư vấn">
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