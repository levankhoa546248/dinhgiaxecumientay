<?php require('car/include/head.php'); ?>
<?php require('car/dinhgia/script.php'); ?>
<?php require('car/include/menu.php'); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="text-center">
                        <form id="contact-form" role="form" action="" method="post">
                            <div class="section-title">
                                <h2>Định giá xe <small>Hình ảnh giấy đăng kiểm. Bạn vui lòng gửi kèm hình ảnh mặt
                                        trước và sau của giấy đăng kiểm</small></h2>
                            </div>
                            <div class="file-loading">
                                <input id="input-21" type="file" accept="image/*" multiple>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="text-center">
                        <input type="text" class="form-control" id="idguiban" hidden value="<?php echo $_GET["idguiban"]; ?>">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="text-center">
                        <input type="button" class="section-btn btn btn-primary" id="tieptuc"
                               value="Tiếp tục và thêm hình ảnh của xe">
                        <input type="button" class="section-btn btn btn-primary" id="hoantat"
                               value="Hoàn tất thông tin và nhờ tư vấn">
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
        $("#input-21").fileinput({
            showCaption: false,
            dropZoneEnabled: true,
            browseOnZoneClick: true,
            uploadUrl: "car.php?controller=dinhgia&action=uploadgiaydangkiem&idguiban=" + $("#idguiban").val()
        }).on('fileremoved', function (event, previewId, index, fileId, data) {
            location.href = "website.php?controller=guibanxe&action=xoahinhanhgiaydangkiem&idguiban=" + $("#idguiban").val() + "&id=" + fileId;
        }).on('filedeleted', function (event, id, index) {
            jAlert(3);
        }).on('filecleared', function (event, previewId, index, fileId, data) {
            location.href = "website.php?controller=guibanxe&action=xoahinhanhgiaydangkiem&idguiban=" + $("#idguiban").val() + "&id=" + fileId;
        });
    });
</script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/css/fileinput.min.css" media="all"
      rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/plugins/piexif.min.js"
        type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/plugins/sortable.min.js"
        type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/plugins/purify.min.js"
        type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/fileinput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-image-upload/1.2.0/jQuery-image-upload.js"
        integrity="sha512-Km8iFrCs4rxJ/rO+YqAo/Hz+0lVs8qydavMtQg3/nzK4G70LPuGSyoIYOgpbOZLlFdmNpkxDQLMzaMeMhViFrQ=="
        crossorigin="anonymous"></script>

<?php require('car/include/contact.php'); ?>
<?php require('car/include/footer.php'); ?>
</html>
