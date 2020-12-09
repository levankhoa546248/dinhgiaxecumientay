<!-- Blog posts -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title text-center">
                    <h2>Tin tức <small>Liên tục cập nhật thông tin mới nhất về ô tô</small></h2>
                </div>
                <div class="owl-carousel owl-theme owl-client">
                    <?php $blog = select("select * from blog where trangthai = 1 and loai = 0");
                    foreach ($blog as $blogs) {
                        ?>
                        <div class="col-md-4 col-sm-4">
                            <div class="courses-thumb courses-thumb-secondary" style="height: 455px; width: 360px">
                                <div class="courses-top">
                                    <div class="courses-image" style="width:360px; height:240px">
                                        <img src="<?php echo $blogs["hinhanh"]; ?>" class="img-responsive"
                                             style="height: inherit;" alt="">
                                    </div>
                                    <div class="courses-date">
                                        <span title="Date"><i
                                                    class="fa fa-calendar"></i> <?php echo $blogs["ngaytao"]; ?></span>
                                    </div>
                                </div>

                                <div class="courses-detail" style="width:360px; height:132px">
                                    <h4>
                                        <a href="car.php?controller=tintuc&action=chitiet&id=<?php echo $blogs["id"]; ?>"><?php echo $blogs["tieude"]; ?></a>
                                    </h4>
                                </div>

                                <div class="courses-info">
                                    <a href="car.php?controller=tintuc&action=chitiet&id=<?php echo $blogs["id"]; ?>"
                                       class="section-btn btn btn-primary btn-block">Xem
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