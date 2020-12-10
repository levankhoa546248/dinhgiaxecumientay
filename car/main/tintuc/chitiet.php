<?php require('car/main/include/head.php'); ?>
<?php require('car/main/include/menu.php'); ?>
<main>
    <section>
        <div class="container">
            <?php
            $blogdetail = select_1_record("select * from blog where id = " . $_GET["id"]);
            $userdetail = select_1_record("select * from user where Id = " . $blogdetail["nguoidang"])
            ?>
            <h2><?php echo $blogdetail["tieude"]; ?></h2>

            <p class="lead">
                <i class="fa fa-user"></i><?php echo $blogdetail["nguoidang"]; ?> &nbsp;&nbsp;&nbsp;
                <i class="fa fa-calendar"></i><?php echo $blogdetail["ngaytao"]; ?> &nbsp;&nbsp;&nbsp;
                <i class="fa fa-eye"></i><?php echo $blogdetail["luotxem"]; ?> &nbsp;&nbsp;&nbsp;
            </p>

            <img src="<?php echo $blogdetail["hinhanh"]; ?>" class="img-responsive" alt="" width="1140" height="200">

            <br>
            <?php echo $blogdetail["chitiet"]; ?>
            <!-- Homepage Leaderboard -->

            <div class="row">
                <div class="col-md-4 col-xs-12 pull-right">
                    <h4>Social share</h4>

                    <p>
                        <a href="<?php echo $userdetail["Facebook"]; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                        &nbsp;&nbsp;&nbsp;

                        <a href="<?php echo $userdetail["Twitter"]; ?>" target="_blank"><i
                                    class="fa fa-twitter"></i></a> &nbsp;&nbsp;&nbsp;

                        <a href="<?php echo $userdetail["Instagram"]; ?>" target="_blank"><i
                                    class="fa fa-instagram"></i></a>
                    </p>

                    <br>


                    <h4>Tin liên quan</h4>
                    <ul class="list">
                        <?php $blog = select("select * from blog where trangthai = 1 and id != " . $_GET["id"]. " order by ngaytao desc limit 3");
                        foreach ($blog as $blogs) {
                            ?>
                            <li>
                                <a href="car.php?controller=tintuc&action=chitiet&id=<?php echo $blogs["id"]; ?>"><?php echo $blogs["tieude"]; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>

                <div class="col-md-8 col-xs-12">
                    <div class="fb-comments" data-href="https://www.dinhgiaxecumientay.com/" data-numposts="5"
                         data-width="100%"></div>
                </div>
            </div>
        </div>
    </section>

    <?php require('car/main/include/blog.php'); ?>
    <?php require('car/main/include/testimonial.php'); ?>
    <?php require('car/main/include/featured.php'); ?>
</main>
<?php require('car/main/include/contact.php'); ?>
<?php require('car/main/include/footer.php'); ?>
<script type="text/javascript" src="car/themes/js/selfjs.js"></script>
<link href="car/themes/css/selfcss.css" rel="stylesheet" type="text/css" media="screen"/>
<script>
    $(document).ready(function () {

    });
</script>
</body>
</html>