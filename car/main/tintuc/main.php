<main>
    <!-- Blog posts -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                        <h2>Tin tức <small>Liên tục cập nhật thông tin mới nhất về ô tô</small></h2>
                    </div>
                        <?php $blog = select("select * from blog where trangthai = 1 where loai = 0");
                        foreach ($blog as $blogs) {
                            ?>
                            <div class="col-md-3 col-sm-3">
                                <div class="courses-thumb courses-thumb-secondary h-courses-thumb" >
                                    <div class="courses-top">
                                        <div class="courses-image">
                                            <img src="<?php echo $blogs["hinhanh"]; ?>" class="img-responsive"
                                                 alt="">
                                        </div>
                                        <div class="courses-date">
                                            <span title="Date"><i
                                                        class="fa fa-calendar"></i> <?php echo $blogs["ngaytao"]; ?></span>
                                        </div>
                                    </div>

                                    <div class="courses-detail h-courses-detail">
                                        <h4><a href="car.php?controller=tintuc&action=chitiet&id="<?php echo $blogs["id"];?>><?php echo $blogs["tieude"]; ?></a></h4>
                                    </div>

                                    <div class="courses-info">
                                        <a href="car.php?controller=tintuc&action=chitiet&id="<?php echo $blogs["id"];?> class="section-btn btn btn-primary btn-block">Xem
                                            thêm</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <!--Testimonial -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                        <h2>Hãng xe <small>Tin tức mới nhất của các hãng xe</small></h2>
                    </div>

                    <?php $blog = select("select * from blog where trangthai = 1 and loai = 1");
                    foreach ($blog as $blogs) {
                        ?>
                        <div class="col-md-3 col-sm-3">
                            <div class="courses-thumb courses-thumb-secondary h-courses-thumb">
                                <div class="courses-top">
                                    <div class="courses-image">
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

                                <div class="courses-detail h-courses-detail">
                                    <h4><a href="blog-post-details.html"><?php echo $blogs["tieude"]; ?></a></h4>
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
    </section>
</main>
<script type="text/javascript" src="car/themes/js/selfjs.js"></script>
<link href="car/themes/css/selfcss.css" rel="stylesheet" type="text/css" media="screen"/>
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
</script>