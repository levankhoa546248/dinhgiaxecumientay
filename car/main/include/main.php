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
