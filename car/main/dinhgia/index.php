<?php require('car/main/include/head.php'); ?>
<?php require('car/main/dinhgia/script.php'); ?>
<?php require('car/main/include/menu.php'); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="text-center">
                        <form id="contact-form" role="form" action="" method="post">
                            <div class="section-title">
                                <h2>Định giá xe <small>Nhân viên chúng tôi sẽ kiểm tra thông tin và liên hệ với
                                        bạn qua số điện thoại.</small></h2>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <input type="text" class="form-control" placeholder="Nhập đầy đủ họ tên" id="hoten"
                                       required>

                                <input type="text" class="form-control" placeholder="Nhập số điện thoại"
                                       id="dienthoai" required>

                                <input type="text" class="form-control" placeholder="Nhập địa chỉ" id="diachi"
                                       required>

                                <input type="text" class="form-control" placeholder="Nhập hãng xe" id="hangxe">

                                <input type="text" class="form-control" placeholder="Nhập dòng xe" id="dongxe">

                                <input type="text" class="form-control" placeholder="Giá bán mong muốn"
                                       id="giabanmongmuon"
                                       data-type="currency">

                                <textarea class="form-control" rows="6"
                                          placeholder="Hãy cho chúng tôi biết tình trạng xe bạn hiện tại như thế nào. Một số thông tin cần cụ thể để dễ dàng định giá hơn. Cảm ơn bạn"
                                          id="thongtinxe"></textarea>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <input type="button" class="section-btn btn btn-primary" id="tieptuc"
                                       value="Tiếp tục và thêm hình ảnh giấy đăng kiểm">
                                <input type="button" class="section-btn btn btn-primary" id="hoantat"
                                       value="Hoàn tất thông tin và nhờ tư vấn">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require('car/main/include/featured.php'); ?>
</main>
<script type="text/javascript" src="car/themes/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="car/themes/js/jquery.alerts.js"></script>
<script type="text/javascript" src="car/themes/js/selfjs.js"></script>
<link href="car/themes/css/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen"/>
<script>
    $(document).ready(function () {
        $('#tieptuc').click(function (e) {
            if (checkIf($("#hoten").val())) {
                jAlert("Chưa nhập họ tên", "Thông báo", function (e) {
                    $("#hoten").focus();
                });
            } else if (checkIf($("#dienthoai").val())) {
                jAlert("Chưa nhập số điện thoại", "Thông báo", function (e) {
                    $("#dienthoai").focus();
                });
            }
            else {
                $.ajax({
                    url: "car.php?controller=dinhgia&action=dinhgiaC",
                    type: "POST",
                    data: {
                        hoten: $("#hoten").val(),
                        dienthoai: $("#dienthoai").val(),
                        diachi: $("#diachi").val(),
                        hangxe: $("#hangxe").val(),
                        dongxe: $("#dongxe").val(),
                        giabanmongmuon: $("#giabanmongmuon").val(),
                        thongtinxe: $("#thongtinxe").val()
                    },
                    success: function (response) {
                        if (response > 0) {
                            jAlert("Gửi thông tin thành công", "Thông báo", function (e) {
                                location.href = "car.php?controller=dinhgia&action=giaydangkiem&idguiban=" + response;
                            });
                        } else {
                            jAlert("Gửi thông tin không thành công. Vui lòng liên hệ qua số điện thoại", "Thông báo", function (e) {
                            });
                        }
                    }
                });
            }
        });

        $('#hoantat').click(function (e) {
            if (checkIf($("#hoten").val())) {
                jAlert("Chưa nhập họ tên", "Thông báo", function (e) {
                    $("#hoten").focus();
                });
            } else if (checkIf($("#dienthoai").val())) {
                jAlert("Chưa nhập số điện thoại", "Thông báo", function (e) {
                    $("#dienthoai").focus();
                });
            }
            else {
                $.ajax({
                    url: "car.php?controller=dinhgia&action=dinhgiaC",
                    type: "POST",
                    data: {
                        hoten: $("#hoten").val(),
                        dienthoai: $("#dienthoai").val(),
                        diachi: $("#diachi").val(),
                        hangxe: $("#hangxe").val(),
                        dongxe: $("#dongxe").val(),
                        giabanmongmuon: $("#giabanmongmuon").val(),
                        thongtinxe: $("#thongtinxe").val()
                    },
                    success: function (response) {
                        if (response > 0) {
                            $.ajax({
                                url: "car.php?controller=dinhgia&action=hoantathosoC",
                                type: "POST",
                                data: {
                                    idguiban: response
                                },
                                success: function (rs) {
                                    if (rs > 0) {
                                        jAlert("Gửi thông tin thành công", "Thông báo", function (e) {
                                            location.href = "car.php?controller=dinhgia&action=hosoguibanxeC&idguiban=" + response;
                                        });
                                    } else {
                                        jAlert("Gửi thông tin không thành công.", "Thông báo", function (e) {
                                        });
                                    }
                                }
                            });
                        } else {
                            jAlert("Gửi thông tin không thành công.", "Thông báo", function (e) {
                            });
                        }
                    }
                });
            }
        });

        $("input[data-type='currency']").on({
            keyup: function () {
                formatCurrency($(this));
            },
            blur: function () {
                formatCurrency($(this), "blur");
            }
        });
    });
</script>
<?php require('car/main/include/contact.php'); ?>
<?php require('car/main/include/footer.php'); ?>
</html>