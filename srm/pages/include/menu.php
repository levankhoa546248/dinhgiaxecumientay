<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <!--            <img src="logo-auto-dung-lam-1.png" class="img-responsive">-->

            <img class="navbar-left" src="<?php echo $logows; ?>"/>
            <a href="#" class="navbar-brand" style="margin-left: 5px"><?php echo $namews; ?></a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-nav-first">
                <?php if (isset($_GET['controller'])){
                ?>
                <li <?php if ($_GET["controller"] == "home") echo "class=\"active\""; else echo ""; ?>><a
                            href="srm.php?controller=home&action=index"><i class="fa fa-home"></i></a></li>
                <li <?php if ($_GET["controller"] == "xe") echo "class=\"active\""; else echo ""; ?>><a
                            href="srm.php?controller=xe&action=index">Xe</a></li>
                <li <?php if ($_GET["controller"] == "dinhgia") echo "class=\"active\""; else echo ""; ?>><a
                            href="srm.php?controller=dinhgia&action=index">Định giá</a></li>
                <li <?php if ($_GET["controller"] == "timmua") echo "class=\"active\""; else echo ""; ?>><a
                            href="srm.php?controller=timmua&action=index">Tìm mua</a></li>
                <!--                <li class="dropdown">-->
                <!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"-->
                <!--                       aria-expanded="false">More <span class="caret"></span></a>-->
                <!---->
                <!--                    <ul class="dropdown-menu">-->
                <!--                        <li><a href="blog-posts.html">Blog</a></li>-->
                <!--                        <li><a href="team.html">Team</a></li>-->
                <!--                        <li><a href="testimonials.html">Testimonials</a></li>-->
                <!--                    </ul>-->
                <!--                </li>-->
                <!--                <li -->
                        <?php
                        } else {
                    ?>
                    <li class="active"><a
                                href="srm.php?controller=home&action=index"><i class="fa fa-home"></i></a></li>
                    <li><a
                                href="srm.php?controller=xe&action=index">Xe</a></li>
                    <li><a
                                href="srm.php?controller=dinhgia&action=index">Định giá</a></li>
                    <li><a
                                href="srm.php?controller=timmua&action=index">Tìm mua</a></li>
                <?php
                }?>

            </ul>
        </div>

    </div>
</section>