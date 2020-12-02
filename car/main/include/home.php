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
                            <a href="<?php echo $intro["Link1"]; ?>" class="section-btn btn btn-default">Browse Cars</a>
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
                            <a href="<?php echo $intro["Link2"]; ?>" class="section-btn btn btn-default">Browse Cars</a>
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
                            <a href="<?php echo $intro["Link3"]; ?>" class="section-btn btn btn-default">Browse Cars</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
