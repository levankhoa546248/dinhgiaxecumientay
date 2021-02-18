<?php require('srm/pages/include/head.php'); ?>
<link rel="stylesheet" href="srm/themes/css/bootstrap.min.css">
<link rel="stylesheet" href="srm/themes/css/font-awesome.min.css">
<link rel="stylesheet" href="srm/themes/css/owl.carousel.css">
<link rel="stylesheet" href="srm/themes/css/owl.theme.default.min.css">
<link rel="stylesheet" type="text/css" href="themes/css/jquery.alerts.css">
<!-- MAIN CSS -->
<link rel="stylesheet" href="srm/themes/css/style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- PRE LOADER -->
<section class="preloader">
    <div class="spinner">
        <span class="spinner-rotate"></span>
    </div>
</section>

<!-- MENU -->
<?php require('srm/pages/include/menu.php'); ?>

<main>

    <section>
        <div class="container">
            <div class="text-center">
                <h1>Giới thiệu</h1>
                <br>
                <p class="lead">Giới thiệu đôi nét về chúng tôi</p>
            </div>
        </div>
    </section>
    <section class="section-background">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div>
                        <h3><?php echo $gioithieu["tieude"];?></h3>
                        <br>
                        <p class="lead"><?php echo $gioithieu["noidung"];?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- FOOTER -->
<?php require('srm/pages/include/footer.php'); ?>

<!-- SCRIPTS -->
<script src="srm/themes/js/jquery.js"></script>
<script src="srm/themes/js/bootstrap.min.js"></script>
<script src="srm/themes/js/owl.carousel.min.js"></script>
<script src="srm/themes/js/smoothscroll.js"></script>
<script src="srm/themes/js/custom.js"></script>
<script src="themes/js/jquery.alerts.js" type="text/javascript"></script>
<script type="text/javascript" src="themes/js/selfjs.js"></script>
<script>
    $(document).ready(function () {

    });
</script>
</body>
</html>