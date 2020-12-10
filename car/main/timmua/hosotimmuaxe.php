<?php require('car/main/include/head.php'); ?>
<?php require('car/main/include/menu.php'); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 text-center">
                    <form action="#" method="post" class="form">
                        <h2>Hồ sơ tìm mua xe</h2>
                        <p class="lead"><strong><?php echo $data["hoten"]; ?></strong></p>

                        <p class="lead"><strong class="text-primary"><?php echo $data["dienthoai"]; ?> </strong>
                        </p>

                        <div class="row">
                            <div class="col-sm-12">
                                <p>
                                    <span> Giá mong muốn</span>

                                    <br>

                                    <strong><?php echo $data["giamuamongmuon"]; ?> VND</strong>
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

    <?php require('car/main/include/featured.php'); ?>
    <?php require('car/main/include/blog.php'); ?>
    <?php require('car/main/include/testimonial.php'); ?>
</main>
<?php require('car/main/include/contact.php'); ?>
<?php require('car/main/include/footer.php'); ?>

<script>
    $(document).ready(function () {

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
</body>
</html>