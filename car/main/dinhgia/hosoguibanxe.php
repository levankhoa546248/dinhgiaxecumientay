<?php require('car/main/include/head.php'); ?>
<?php require('car/main/include/menu.php'); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="row">
                        <span>Hình ảnh xe</span>
                        <br>
                        <div class="file-loading">
                            <input id="hinhgiaydangkiem" type="file" accept="image/*" multiple>
                        </div>
                    </div>
                    <div class="row">
                        <hr>
                        <span>Hình ảnh giấy đăng kiểm</span>

                        <br>
                        <div class="file-loading">
                            <input id="hinhanhxe" type="file" accept="image/*" multiple>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xs-12">
                    <form action="#" method="post" class="form">
                        <h2>Hồ sơ định giá xe</h2>
                        <p class="lead"><strong><?php echo $data["hoten"]; ?></strong></p>

                        <p class="lead"><strong class="text-primary"><?php echo $data["dienthoai"]; ?> </strong>
                        </p>

                        <div class="row">
                            <div class="col-sm-12">
                                <p>
                                    <span> Giá mong muốn</span>

                                    <br>

                                    <strong><?php echo $data["giabanmongmuon"]; ?> VND</strong>
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
        $("#hinhgiaydangkiem").fileinput({
            showClose: false,
            showBrowse: false,
            theme: 'fas',
            showRemove: false,
            showDrag: false,
            showCaption: false,
            dropZoneEnabled: true,
            dropZoneTitle: "",
            overwriteInitial: true,
            initialPreviewAsData: true,
            initialPreview: [<?php if (isset($prehinhxeguiban)) echo $prehinhxeguiban; else null;?>],
            initialPreviewConfig:<?php if (isset($preconfxeguiban)) echo $preconfxeguiban; else echo '[]';?>
        });

        $("#hinhanhxe").fileinput({
            showClose: false,
            showBrowse: false,
            theme: 'fas',
            showRemove: false,
            showDrag: false,
            showCaption: false,
            dropZoneEnabled: true,
            dropZoneTitle: "",
            overwriteInitial: true,
            initialPreviewAsData: true,
            initialPreview: [<?php if (isset($pregiaydangkiem)) echo $pregiaydangkiem; else null;?>],
            initialPreviewConfig:<?php if (isset($precofgiaydangkiem)) echo $precofgiaydangkiem; else echo '[]';?>
        });

        $('#hoantat').click(function (e) {
            $.ajax({
                url: "car.php?controller=dinhgia&action=hoantathosoC",
                type: "POST",
                data: {
                    idguiban: $("#idguiban").val()
                },
                success: function (response) {
                    if (response > 0) {
                        jAlert("Gửi thông tin thành công", "Thông báo", function (e) {
                            location.href = "car.php?controller=dinhgia&action=hosoguibanxeC&idguiban=" + $("#idguiban").val();
                        });
                    } else {
                        jAlert("Gửi thông tin không thành công. Vui lòng liên hệ qua số điện thoại", "Thông báo", function (e) {
                        });
                    }
                }
            });
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