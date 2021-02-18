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

<!-- HOME -->
<section id="home">
    <div class="row">
        <div class="owl-carousel owl-theme home-slider">
            <?php foreach ($sliders as $slider) { ?>
                <!--                <div class="item" style="--><?php //echo $slider["image"]; ?><!--">-->
                <div class="item" style="background-image: url('<?php echo $slider["image"]; ?>')">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-6 col-sm-12">
                                <h1><?php echo $slider["title"]; ?></h1>
                                <h3><?php echo $slider["content"]; ?></h3>
                                <a href="<?php echo $slider["link"]; ?>" class="section-btn btn btn-default">Truy
                                    cập</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="text-center">
                        <h2>Giới thiệu</h2>

                        <br>

                        <p class="lead"><?php echo $gioithieu["tieude"]; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">

                    </div>
                    <div class="col-sm-4">
                        <a href="car-details.html" class="section-btn btn btn-primary btn-block">Xem thêm</a>
                    </div>
                </div>
            </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                        <h2>Các xe nỗi bật <small>Hãy liên hệ chúng tôi để được tư vấn và hỗ trợ</small></h2>
                    </div>
                </div>

                <?php
                foreach ($xe as $xes) {
                    ?>
                    <div class="col-md-4 col-sm-4">
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
                                    <span title="Views"><i class="fa fa-cog"></i> <?php echo $xes["tenhopso"]; ?></span>
                                </div>
                            </div>

                            <div class="courses-detail"  style="height: 177px;">
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
                ?>
            </div>
        </div>
    </section>
</main>

<!-- CONTACT -->
<section id="contact">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-12">
                <form id="contact-form" role="form" action="" method="post">
                    <div class="section-title">
                        <h2>Thông tin liên lạc <small>We love conversations. Let us talk!</small></h2>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <input type="text" class="form-control" placeholder="Nhập họ tên" id="hoten" required>

                        <input type="text" class="form-control" placeholder="Nhập số điện thoại" id="dienthoai"
                               required>

                        <input type="email" class="form-control" placeholder="Nhập địa chỉ email" id="email"
                               required>

                        <textarea class="form-control" rows="6" placeholder="Hãy cho chúng tôi biết về tin nhắn của bạn"
                                  id="message"
                                  required></textarea>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <input type="button" class="section-btn btn btn-default" id="sendcontact" value="Send Message">
                    </div>
                </form>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="contact-image">
                    <img src="srm/themes/images/contact-1-600x400.jpg" class="img-responsive" alt="Smiling Two Girls">
                </div>
            </div>

        </div>
    </div>
</section>

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
        $('#sendcontact').click(function (e) {
            if (checkIf($("#dienthoai").val())) {
                jAlert("Chưa nhập số điện thoại", "Thông báo", function (e) {
                    $("#dienthoai").focus();
                });
            } else {
                $.ajax({
                    url: "srm.php?controller=home&action=contact",
                    type: "POST",
                    data: {
                        hoten: $("#hoten").val(),
                        dienthoai: $("#dienthoai").val(),
                        email: $("#email").val(),
                        message: $("#message").val()
                    },
                    success: function (response) {
                        if (response > 0) {
                            jAlert("Gửi thông tin thành công. Chúng tôi sẽ sớm liên hệ với bạn", "Thông báo", function (e) {
                                $("#hoten").prop("disabled", true);
                                $("#dienthoai").prop("disabled", true);
                                $("#email").prop("disabled", true);
                                $("#message").prop("disabled", true);
                                $("#sendcontact").prop("disabled", true);
                            });
                        } else {
                            jAlert("Gửi thông tin không thành công.", "Thông báo", function (e) {
                            });
                        }
                    }
                });
            }
        });
    });
</script>
</body>
</html>