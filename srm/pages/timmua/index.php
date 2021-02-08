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
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="text-center">
                        <form id="contact-form" role="form" action="" method="post">
                            <div class="section-title">
                                <h2>Tìm mua xe <small>Nhân viên chúng tôi sẽ kiểm tra thông tin và liên hệ với
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
                                <input type="text" class="form-control" placeholder="Nhập hãng xe cần tìm" id="hangxe">
                                <input type="text" class="form-control" placeholder="Nhập dòng xe cần tìm" id="dongxe">
                                <input type="text" class="form-control" placeholder="Giá xe mong muốn" id="giamuamongmuon">
                            </div>
                            <div class="col-sm-12">
                                <textarea class="form-control" rows="6"
                                          placeholder="Một số thông tin chi tiết khác"
                                          id="thongtinxe"></textarea>
                            </div>

                            <div class="col-sm-12">
                                <input type="button" class="section-btn btn btn-primary" id="guitimmua"
                                       value="Hoàn tất thông tin và nhờ tư vấn">
                            </div>

                        </form>
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
        $("#guitimmua").click(function (e) {
            if (checkIf($("#hoten").val())) {
                jAlert("Chưa nhập họ tên", "Thông báo", function (e) {
                    $("#hoten").focus();
                });
            } else if (checkIf($("#dienthoai").val())) {
                jAlert("Chưa nhập số điện thoại", "Thông báo", function (e) {
                    $("#dienthoai").focus();
                });
            } else {
                $.ajax({
                    url: "srm.php?controller=timmua&action=guitimmua",
                    type: "POST",
                    data: {
                        hoten: $("#hoten").val(),
                        dienthoai: $("#dienthoai").val(),
                        diachi: $("#diachi").val(),
                        hangxe: $("#hangxe").val(),
                        dongxe: $("#dongxe").val(),
                        giamuamongmuon: $("#giamuamongmuon").val(),
                        thongtinxe: $("#thongtinxe").val()
                    },
                    success: function (response) {
                        if (response > 0) {
                            jAlert("Gửi thông tin thành công. Chúng tôi sẽ liên hệ với bạn sớm nhất", "Thông báo", function (e) {
                                disableinput(true);
                            });
                        } else {
                            jAlert("Gửi thông tin không thành công.", "Thông báo", function (e) {
                            });
                        }
                    }
                });
            }
        });

        function disableinput(bool) {
            $("#hoten").prop("disabled", bool);
            $("#dienthoai").prop("disabled", bool);
            $("#diachi").prop("disabled", bool);
            $("#hangxe").prop("disabled", bool);
            $("#dongxe").prop("disabled", bool);
            $("#giamuamongmuon").prop("disabled", bool);
            $("#thongtinxe").prop("disabled", bool);
            $("#guitimmua").prop("disabled", bool);
        }
    });
</script>
</body>
</html>