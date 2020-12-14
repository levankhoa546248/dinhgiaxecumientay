<?php require('car/main/include/head.php'); ?>
<?php require('car/main/include/menu.php'); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="text-center">
                        <form id="contact-form" role="form" action="" method="post">
                            <div class="section-title">
                                <h2>Tìm mua xe <small>Nhân viên chúng tôi sẽ kiểm tra thông tin và liên hệ với
                                        bạn qua số điện thoại.</small></h2>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <input type="text" class="form-control" placeholder="Nhập đầy đủ họ tên" id="hoten"
                                       required>

                                <input type="text" class="form-control" placeholder="Nhập số điện thoại"
                                       id="dienthoai" required>

                                <input type="text" class="form-control" placeholder="Nhập địa chỉ" id="diachi"
                                       required>

                                <input type="text" class="form-control" placeholder="Nhập hãng xe cần tìm" id="hangxe">

                                <input type="text" class="form-control" placeholder="Nhập dòng xe cần tìm" id="dongxe">

                                <input type="text" class="form-control" placeholder="Giá xe mong muốn"
                                       id="giamuamongmuon" data-type="currency">

                                <textarea class="form-control" rows="6"
                                          placeholder="Một số thông tin chi tiết khác"
                                          id="thongtinxe"></textarea>
                            </div>

                            <div class="col-md-12 col-sm-12">
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
    <?php require('car/main/include/blog.php'); ?>
<!--    --><?php //require('car/main/include/testimonial.php'); ?>
</main>
<?php require('car/main/include/contact.php'); ?>
<?php require('car/main/include/footer.php'); ?>

<script type="text/javascript" src="car/themes/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="car/themes/js/jquery.alerts.js"></script>
<script type="text/javascript" src="car/themes/js/selfjs.js"></script>
<link href="car/themes/css/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen"/>
<script>
    $(document).ready(function () {
        $('#hoantat').click(function (e) {
            if (checkIf($("#hoten").val())) {
                jAlert("Chưa nhập họ tên", "Thông báo", function (e) {
                    $("#hoten").focus();
                });
            } else if (checkIf($("#dienthoai").val())) {
                jAlert("Chưa nhập số điện thoại", "Thông báo", function (e) {
                    $("#dienthoai").focus();
                });
            } else {
                $.ajax({
                    url: "car.php?controller=timmua&action=timmuaC",
                    type: "POST",
                    data: {
                        hoten: $("#hoten").val(),
                        dienthoai: $("#dienthoai").val(),
                        diachi: $("#diachi").val(),
                        hangxe: $("#hangxe").val(),
                        dongxe: $("#dongxe").val(),
                        giamuamongmuon: $("#giamuamongmuon").val(),
                        thongtinxe: $("#thongtinxe").val()
                    },
                    success: function (response) {
                        if (response > 0) {
                            jAlert("Gửi thông tin thành công", "Thông báo", function (e) {
                                location.href = "car.php?controller=timmua&action=hosotimmuaxeC&idtimmua=" + response;
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
</body>
</html>