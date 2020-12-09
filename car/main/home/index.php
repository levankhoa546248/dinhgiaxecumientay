<?php require('car/main/include/head.php'); ?>
<?php require('car/main/include/menu.php'); ?>
<?php $intro = select_1_record("select * from intro where IsActive = 1") ?>
<!-- HOME -->
<section id="home">
    <div class="row">
        <div class="owl-carousel owl-theme home-slider">
            <div class="item item-first">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-6 col-sm-12">
                            <h1><?php echo $intro["Title1"]; ?></h1>
                            <h3><?php echo $intro["Content1"]; ?></h3>
                            <a href="<?php echo $intro["Link1"]; ?>" class="section-btn btn btn-default">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item item-second">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-6 col-sm-12">
                            <h1><?php echo $intro["Title2"]; ?></h1>
                            <h3><?php echo $intro["Content2"]; ?></h3>
                            <a href="<?php echo $intro["Link2"]; ?>" class="section-btn btn btn-default">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item item-third">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-6 col-sm-12">
                            <h1><?php echo $intro["Title3"]; ?></h1>
                            <h3><?php echo $intro["Content3"]; ?></h3>
                            <a href="<?php echo $intro["Link3"]; ?>" class="section-btn btn btn-default">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row text-center">
            <?php $gioithieu = select_1_record("select * from gioithieuwebsite where trangthai = 1") ?>
            <h2>Giới thiệu</h2>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="text-center">
                    <h3><strong class="text-primary"><?php echo $gioithieu["tieude1"]; ?></strong></h3>

                    <br>

                    <p class="lead"><?php echo $gioithieu["chitiet1"]; ?></p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="text-center">
                    <h3><strong class="text-primary"><?php echo $gioithieu["tieude2"]; ?></strong></h3>

                    <br>

                    <p class="lead"><?php echo $gioithieu["chitiet2"]; ?></p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="text-center">
                    <h3><strong class="text-primary"><?php echo $gioithieu["tieude3"]; ?></strong></h3>

                    <br>

                    <p class="lead"><?php echo $gioithieu["chitiet3"]; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
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
<!-- Blog posts -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title text-center">
                    <h2>Tin tức <small>Liên tục cập nhật thông tin mới nhất về ô tô</small></h2>
                </div>
                <div class="owl-carousel owl-theme owl-client">
                    <?php $blog = select("select * from blog where trangthai = 1");
                    foreach ($blog as $blogs) {
                        ?>
                        <div class="col-md-4 col-sm-4">
                            <div class="courses-thumb courses-thumb-secondary" style="height: 455px; width: 360px">
                                <div class="courses-top">
                                    <div class="courses-image" style="width:360px; height:240px">
                                        <img src="<?php echo $blogs["hinhanh"]; ?>" class="img-responsive"
                                             alt="">
                                    </div>
                                    <div class="courses-date">
                                        <span title="Author"><i
                                                    class="fa fa-user"></i> <?php echo $blogs["nguoidang"]; ?></span>
                                        <span title="Date"><i
                                                    class="fa fa-calendar"></i> <?php echo $blogs["ngaytao"]; ?></span>
                                        <span title="Views"><i
                                                    class="fa fa-eye"></i> <?php echo $blogs["luotxem"]; ?></span>
                                    </div>
                                </div>

                                <div class="courses-detail" style="width:360px; height:132px">
                                    <h3><a href="blog-post-details.html"><?php echo $blogs["tieude"]; ?></a></h3>
                                </div>

                                <div class="courses-info">
                                    <a href="blog-post-details.html" class="section-btn btn btn-primary btn-block">Xem
                                        thêm</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonial -->
<section id="testimonial">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <div class="section-title text-center">
                    <h2>Hãng xe <small>Tin tức mới nhất của các hãng xe</small></h2>
                </div>

                <div class="owl-carousel owl-theme owl-client">

                    <?php $blog = select("select * from blog where trangthai = 1");
                    foreach ($blog as $blogs) {
                        ?>
                        <div class="col-md-4 col-sm-4">
                            <div class="courses-thumb courses-thumb-secondary" style="height: 455px; width: 360px">
                                <div class="courses-top">
                                    <div class="courses-image" style="width:360px; height:240px">
                                        <img src="<?php echo $blogs["hinhanh"]; ?>" class="img-responsive"
                                             alt="">
                                    </div>
                                    <div class="courses-date">
                                        <span title="Author"><i
                                                    class="fa fa-user"></i> <?php echo $blogs["nguoidang"]; ?></span>
                                        <span title="Date"><i
                                                    class="fa fa-calendar"></i> <?php echo $blogs["ngaytao"]; ?></span>
                                        <span title="Views"><i
                                                    class="fa fa-eye"></i> <?php echo $blogs["luotxem"]; ?></span>
                                    </div>
                                </div>

                                <div class="courses-detail" style="width:360px; height:132px">
                                    <h3><a href="blog-post-details.html"><?php echo $blogs["tieude"]; ?></a></h3>
                                </div>

                                <div class="courses-info">
                                    <a href="blog-post-details.html" class="section-btn btn btn-primary btn-block">Xem
                                        thêm</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
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
                        <input type="button" class="section-btn btn btn-default" id="sendmessage" value="Send Message">
                    </div>

                </form>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="contact-image">
                    <img src="car/images/contact-1-600x400.jpg" class="img-responsive" alt="Smiling Two Girls">
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    $(document).ready(function () {
        $('#sendmessage').click(function (e) {
            if (checkIf($("#dienthoai").val())) {
                jAlert("Chưa nhập số điện thoại", "Thông báo", function (e) {
                    $("#dienthoai").focus();
                });
            } else {
                $.ajax({
                    url: "car.php?controller=lienlac&action=lienlacC",
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
                                $("#hoantat").prop("disabled", true);
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
<!-- SCRIPTS -->
<script src="car/themes/js/jquery.js" type="text/javascript"></script>
<script src="car/themes/js/bootstrap.min.js" type="text/javascript"></script>
<script src="car/themes/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="car/themes/js/smoothscroll.js" type="text/javascript"></script>
<script src="car/themes/js/custom.js" type="text/javascript"></script>
<script src="car/themes/js/jquery-3.4.1.js" type="text/javascript"></script>
<script src="car/themes/js/jquery.alerts.js" type="text/javascript"></script>
<script type="text/javascript" src="car/themes/js/selfjs.js"></script>
<?php require('car/main/include/footer.php'); ?>
</html>