<?php require('car/main/include/head.php'); ?>
<?php require('car/main/dinhgia/script.php'); ?>
<?php require('car/main/include/menu.php'); ?>
<main>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="row">
                        <span>Hình ảnh xe</span>
                        <br>
                        <div class="file-loading">
                            <input id="hinhgiaydangkiem" type="file" accept="image/*" multiple>
                        </div>
                    </div>
                    <div class="row">
                        <hr>
                        <span>Hình ảnh giấy đăng kiểm</span>

                        <br>
                        <div class="file-loading">
                            <input id="hinhanhxe" type="file" accept="image/*" multiple>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xs-12">
                    <form action="#" method="post" class="form">
                        <h2>Hồ sơ định giá xe</h2>
                        <p class="lead"><strong><?php echo $data["hoten"]; ?></strong></p>

                        <p class="lead"><strong class="text-primary"><?php echo $data["dienthoai"]; ?> </strong>
                        </p>

                        <div class="row">
                            <div class="col-sm-12">
                                <p>
                                    <span> Giá mong muốn</span>

                                    <br>

                                    <strong><?php echo $data["giabanmongmuon"]; ?> VND</strong>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <p>
                                    <span> Địa chỉ</span>

                                    <br>

                                    <strong><?php echo $data["diachi"]; ?></strong>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <p>
                                    <span>Hãng xe</span>

                                    <br>

                                    <strong><?php echo $data["hangxe"]; ?></strong>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <p>
                                    <span>Dòng xe</span>

                                    <br>

                                    <strong><?php echo $data["dongxe"]; ?></strong>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <p>
                                    <span>Thông tin xe</span>

                                    <br>

                                    <strong><?php echo $data["thongtinxe"]; ?></strong>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                        <h2>Featured Cars <small>Lorem ipsum dolor sit amet.</small></h2>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img src="car/images/product-1-720x480.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="courses-date">
                                <span title="Author"><i class="fa fa-dashboard"></i> 130 000km</span>
                                <span title="Author"><i class="fa fa-cube"></i> 1800cc</span>
                                <span title="Views"><i class="fa fa-cog"></i> Manual</span>
                            </div>
                        </div>

                        <div class="courses-detail">
                            <h3><a href="car-details.html">Lorem ipsum dolor sit amet</a></h3>

                            <p class="lead"><small>
                                    <del> $11199.00</del>
                                </small> <strong>$11179.00</strong></p>

                            <p>190 hp &nbsp;&nbsp;/&nbsp;&nbsp; Petrol &nbsp;&nbsp;/&nbsp;&nbsp; 2008 &nbsp;&nbsp;/&nbsp;&nbsp;
                                Used vehicle</p>
                        </div>

                        <div class="courses-info">
                            <a href="car-details.html" class="section-btn btn btn-primary btn-block">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img src="car/images/product-2-720x480.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="courses-date">
                                <span title="Author"><i class="fa fa-dashboard"></i> 130 000km</span>
                                <span title="Author"><i class="fa fa-cube"></i> 1800cc</span>
                                <span title="Views"><i class="fa fa-cog"></i> Manual</span>
                            </div>
                        </div>

                        <div class="courses-detail">
                            <h3><a href="car-details.html">Lorem ipsum dolor sit amet</a></h3>

                            <p class="lead"><small>
                                    <del> $11199.00</del>
                                </small> <strong>$11179.00</strong></p>

                            <p>190 hp &nbsp;&nbsp;/&nbsp;&nbsp; Petrol &nbsp;&nbsp;/&nbsp;&nbsp; 2008 &nbsp;&nbsp;/&nbsp;&nbsp;
                                New vehicle</p>
                        </div>

                        <div class="courses-info">
                            <a href="car-details.html" class="section-btn btn btn-primary btn-block">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img src="car/images/product-3-720x480.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="courses-date">
                                <span title="Author"><i class="fa fa-dashboard"></i> 130 000km</span>
                                <span title="Author"><i class="fa fa-cube"></i> 1800cc</span>
                                <span title="Views"><i class="fa fa-cog"></i> Manual</span>
                            </div>
                        </div>

                        <div class="courses-detail">
                            <h3><a href="car-details.html">Lorem ipsum dolor sit amet</a></h3>

                            <p class="lead"><small>
                                    <del> $11199.00</del>
                                </small> <strong>$11179.00</strong></p>

                            <p>190 hp &nbsp;&nbsp;/&nbsp;&nbsp; Petrol &nbsp;&nbsp;/&nbsp;&nbsp; 2008 &nbsp;&nbsp;/&nbsp;&nbsp;
                                Used vehicle</p>
                        </div>

                        <div class="courses-info">
                            <a href="car-details.html" class="section-btn btn btn-primary btn-block">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img src="car/images/product-4-720x480.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="courses-date">
                                <span title="Author"><i class="fa fa-dashboard"></i> 130 000km</span>
                                <span title="Author"><i class="fa fa-cube"></i> 1800cc</span>
                                <span title="Views"><i class="fa fa-cog"></i> Manual</span>
                            </div>
                        </div>

                        <div class="courses-detail">
                            <h3><a href="car-details.html">Lorem ipsum dolor sit amet</a></h3>

                            <p class="lead"><small>
                                    <del> $11199.00</del>
                                </small> <strong>$11179.00</strong></p>

                            <p>190 hp &nbsp;&nbsp;/&nbsp;&nbsp; Petrol &nbsp;&nbsp;/&nbsp;&nbsp; 2008 &nbsp;&nbsp;/&nbsp;&nbsp;
                                Used vehicle</p>
                        </div>

                        <div class="courses-info">
                            <a href="car-details.html" class="section-btn btn btn-primary btn-block">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img src="car/images/product-5-720x480.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="courses-date">
                                <span title="Author"><i class="fa fa-dashboard"></i> 130 000km</span>
                                <span title="Author"><i class="fa fa-cube"></i> 1800cc</span>
                                <span title="Views"><i class="fa fa-cog"></i> Manual</span>
                            </div>
                        </div>

                        <div class="courses-detail">
                            <h3><a href="car-details.html">Lorem ipsum dolor sit amet</a></h3>

                            <p class="lead"><small>
                                    <del> $11199.00</del>
                                </small> <strong>$11179.00</strong></p>

                            <p>190 hp &nbsp;&nbsp;/&nbsp;&nbsp; Petrol &nbsp;&nbsp;/&nbsp;&nbsp; 2008 &nbsp;&nbsp;/&nbsp;&nbsp;
                                New vehicle</p>
                        </div>

                        <div class="courses-info">
                            <a href="car-details.html" class="section-btn btn btn-primary btn-block">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img src="car/images/product-6-720x480.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="courses-date">
                                <span title="Author"><i class="fa fa-dashboard"></i> 130 000km</span>
                                <span title="Author"><i class="fa fa-cube"></i> 1800cc</span>
                                <span title="Views"><i class="fa fa-cog"></i> Manual</span>
                            </div>
                        </div>

                        <div class="courses-detail">
                            <h3><a href="car-details.html">Lorem ipsum dolor sit amet</a></h3>

                            <p class="lead"><small>
                                    <del> $11199.00</del>
                                </small> <strong>$11179.00</strong></p>

                            <p>190 hp &nbsp;&nbsp;/&nbsp;&nbsp; Petrol &nbsp;&nbsp;/&nbsp;&nbsp; 2008 &nbsp;&nbsp;/&nbsp;&nbsp;
                                New vehicle</p>
                        </div>

                        <div class="courses-info">
                            <a href="car-details.html" class="section-btn btn btn-primary btn-block">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                        <h2>Latest Blog posts <small>Lorem ipsum dolor sit amet.</small></h2>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img src="car/images/blog-1-720x480.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="courses-date">
                                <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                <span title="Views"><i class="fa fa-eye"></i> 114</span>
                            </div>
                        </div>

                        <div class="courses-detail">
                            <h3><a href="blog-post-details.html">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit.</a></h3>
                        </div>

                        <div class="courses-info">
                            <a href="blog-post-details.html" class="section-btn btn btn-primary btn-block">Read
                                More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img src="car/images/blog-2-720x480.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="courses-date">
                                <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                <span title="Views"><i class="fa fa-eye"></i> 114</span>
                            </div>
                        </div>

                        <div class="courses-detail">
                            <h3><a href="blog-post-details.html">Tempora molestiae, iste, consequatur unde sint
                                    praesentium!</a></h3>
                        </div>

                        <div class="courses-info">
                            <a href="blog-post-details.html" class="section-btn btn btn-primary btn-block">Read
                                More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img src="car/images/blog-3-720x480.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="courses-date">
                                <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                <span title="Views"><i class="fa fa-eye"></i> 114</span>
                            </div>
                        </div>

                        <div class="courses-detail">
                            <h3><a href="blog-post-details.html">A voluptas ratione, error provident distinctio,
                                    eaque
                                    id officia?</a></h3>
                        </div>

                        <div class="courses-info">
                            <a href="blog-post-details.html" class="section-btn btn btn-primary btn-block">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonial">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                        <h2>Testimonials <small>from around the world</small></h2>
                    </div>

                    <div class="owl-carousel owl-theme owl-client">
                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="tst-image">
                                    <img src="car/images/tst-image-1-200x216.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="tst-author">
                                    <h4>Jackson</h4>
                                    <span>Shopify Developer</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas, facilis
                                    adipisci dolorem exercitationem nemo aut error impedit repudiandae iusto.</p>
                                <div class="tst-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="tst-image">
                                    <img src="car/images/tst-image-2-200x216.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="tst-author">
                                    <h4>Camila</h4>
                                    <span>Marketing Manager</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente error, unde
                                    eos
                                    laborum consequatur officiis perferendis vel debitis, dolore, ipsum quibusdam
                                    culpa
                                    quisquam, reiciendis aspernatur.</p>
                                <div class="tst-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="tst-image">
                                    <img src="car/images/tst-image-3-200x216.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="tst-author">
                                    <h4>Barbie</h4>
                                    <span>Art Director</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit laborum minima
                                    autem,
                                    reprehenderit mollitia amet id, beatae quo sequi culpa assumenda neque a
                                    quisquam,
                                    magni.</p>
                                <div class="tst-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="tst-image">
                                    <img src="car/images/tst-image-4-200x216.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="tst-author">
                                    <h4>Andrio</h4>
                                    <span>Web Developer</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore natus culpa
                                    laudantium sit dolores quidem at nulla, iure atque laborum! Odit tempora, enim
                                    aliquid at modi illum ducimus explicabo soluta.</p>
                                <div class="tst-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<script>
    $(document).ready(function () {
        $("#hinhgiaydangkiem").fileinput({
            showClose: false,
            showBrowse: false,
            theme: 'fas',
            showRemove: false,
            showDrag: false,
            showCaption: false,
            dropZoneEnabled: true,
            dropZoneTitle: "",
            overwriteInitial: true,
            initialPreviewAsData: true,
            initialPreview: [<?php if (isset($prehinhxeguiban)) echo $prehinhxeguiban; else null;?>],
            initialPreviewConfig:<?php if (isset($preconfxeguiban)) echo $preconfxeguiban; else echo '[]';?>
        });

        $("#hinhanhxe").fileinput({
            showClose: false,
            showBrowse: false,
            theme: 'fas',
            showRemove: false,
            showDrag: false,
            showCaption: false,
            dropZoneEnabled: true,
            dropZoneTitle: "",
            overwriteInitial: true,
            initialPreviewAsData: true,
            initialPreview: [<?php if (isset($pregiaydangkiem)) echo $pregiaydangkiem; else null;?>],
            initialPreviewConfig:<?php if (isset($precofgiaydangkiem)) echo $precofgiaydangkiem; else echo '[]';?>
        });

        $('#hoantat').click(function (e) {
            $.ajax({
                url: "car.php?controller=dinhgia&action=hoantathosoC",
                type: "POST",
                data: {
                    idguiban: $("#idguiban").val()
                },
                success: function (response) {
                    if (response > 0) {
                        jAlert("Gửi thông tin thành công", "Thông báo", function (e) {
                            location.href = "car.php?controller=dinhgia&action=hosoguibanxeC&idguiban=" + $("#idguiban").val();
                        });
                    } else {
                        jAlert("Gửi thông tin không thành công. Vui lòng liên hệ qua số điện thoại", "Thông báo", function (e) {
                        });
                    }
                }
            });
        });
    });
</script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
<link href="car/themes/fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
<link href="car/themes/fileinput/themes/explorer-fas/theme.css" media="all" rel="stylesheet" type="text/css"/>
<script src="car/themes/js/bootstrap.min.js"></script>
<script src="car/themes/fileinput/js/plugins/piexif.js" type="text/javascript"></script>
<script src="car/themes/fileinput/js/plugins/sortable.js" type="text/javascript"></script>
<script src="car/themes/fileinput/js/fileinput.js" type="text/javascript"></script>
<script src="car/themes/fileinput/js/locales/fr.js" type="text/javascript"></script>
<script src="car/themes/fileinput/js/locales/es.js" type="text/javascript"></script>
<script src="car/themes/fileinput/themes/fas/theme.js" type="text/javascript"></script>
<script src="car/themes/fileinput/themes/explorer-fas/theme.js" type="text/javascript"></script>

<?php require('car/main/include/contact.php'); ?>
<?php require('car/main/include/footer.php'); ?>
</html>