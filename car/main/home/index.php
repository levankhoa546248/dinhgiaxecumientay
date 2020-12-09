<?php require('car/main/include/head.php'); ?>
<?php require('car/main/include/menu.php'); ?>
<!-- HOME -->
<section id="home">
    <?php $intro = select_1_record("select * from intro where IsActive = 1") ?>
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
<!-- introduce -->
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
<?php require('car/main/include/featured.php'); ?>
<?php require('car/main/include/blog.php'); ?>
<?php require('car/main/include/testimonial.php'); ?>
<?php require('car/main/include/contact.php'); ?>
<?php require('car/main/include/footer.php'); ?>
</body>
</html>