<?php require('car/main/include/head.php'); ?>
<?php require('car/main/include/menu.php'); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="file-loading">
                        <input id="input-21" type="file" accept="image/*" multiple>
                    </div>
                </div>

                <div class="col-md-6 col-xs-12">
                    <form action="#" method="post" class="form">
                        <h2><?php echo $chitietxe["tenxe"] ?></h2>

                        <p class="lead"><?php echo $chitietxe["mota"] ?></p>

                        <p class="lead"><small>
                                <del> <?php echo $chitietxe["giamgia"] == 0 ? "" : number_format($chitietxe["giamgia"], 0, '.', ',') ?></del>
                            </small> <strong
                                    class="text-primary"><?php echo number_format($chitietxe["giaban"], 0, '.', ',') ?>
                                VND</strong></p>

                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <p>
                                    <span>Nhiên liệu</span>

                                    <br>

                                    <strong><?php echo $chitietxe["tennhienlieu"] ?></strong>
                                </p>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <p>
                                    <span>Số chỗ ngồi</span>

                                    <br>

                                    <strong><?php echo $chitietxe["tenchongoi"] ?></strong>
                                </p>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <p>
                                    <span>Hộp số</span>

                                    <br>

                                    <strong><?php echo $chitietxe["tenhopso"] ?></strong>
                                </p>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <p>
                                    <span>Hãng sản xuất</span>

                                    <br>

                                    <strong><?php echo $chitietxe["tenhangxe"] ?></strong>
                                </p>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <p>
                                    <span>Dòng xe</span>

                                    <br>

                                    <strong><?php echo $chitietxe["tendongxe"] ?></strong>
                                </p>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <p>
                                    <span>Màu sắc</span>

                                    <br>

                                    <strong><?php echo $chitietxe["tenmausac"] ?></strong>
                                </p>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <p>
                                    <span>Năm sản xuất</span>

                                    <br>

                                    <strong><?php echo $chitietxe["tennamsanxuat"] ?></strong>
                                </p>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <p>
                                    <span>Xuất xứ</span>

                                    <br>

                                    <strong><?php echo $chitietxe["tenxuatxu"] ?></strong>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Chi tiết xe</h4>
                        </div>

                        <div class="panel-body">
                            <p>
                                <?php echo $chitietxe["chitiet"] ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Thông tin liên hệ</h4>
                        </div>

                        <div class="panel-body">
                            <p>
                                <span>Họ tên</span>

                                <br>

                                <strong><?php echo $chitietxe["tennhanvien"] ?></strong>
                            </p>

                            <p>
                                <span>Điện thoại</span>

                                <br>

                                <strong><a target="_blank"
                                           href="tel:<?php echo $chitietxe["dienthoai"] ?>"><?php echo $chitietxe["dienthoai"] ?></a></strong>
                            </p>


                            <p>
                                <span>Zalo</span>

                                <br>

                                <strong><a target="_blank"
                                           href="<?php echo $chitietxe["zalo"] ?>"><?php echo $chitietxe["zaloview"] ?></a></strong>
                            </p>

                            <p>
                                <span>Facebook</span>

                                <br>

                                <strong><a target="_blank"
                                           href="<?php echo $chitietxe["facebook"] ?>"><?php echo $chitietxe["facebookview"] ?></a></strong>
                            </p>
                            <p>
                                <span>Email</span>

                                <br>

                                <strong><a target="_blank"
                                           href="mailto:<?php echo $chitietxe["email"] ?>"><?php echo $chitietxe["email"] ?></a></strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require('car/main/include/featured.php'); ?>
</main>

<?php require('car/main/include/contact.php'); ?>
<?php require('car/main/include/footer.php'); ?>

<script>
    $(document).ready(function () {
        $("#input-21").fileinput({
            theme: 'fas',
            showRemove: false,
            showUploadedThumbs: false,
            showClose: false,
            showIcon: false,
            showZoom: true,
            showDrag: false,
            showCaption: false,
            showBrowse: false,
            dropZoneEnabled: <?php echo $chitietxe["soluonghinh"] == "0" ? "false" : "true";?>,
            dropZoneTitle: "",
            browseOnZoneClick: false,
            overwriteInitial: true,
            initialPreviewAsData: true,
            initialPreview: [<?php if (isset($preview)) echo $preview; else null;?>],
            initialPreviewConfig:<?php if (isset($previewconfig)) echo $previewconfig; else echo '[]';?>
        });
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
