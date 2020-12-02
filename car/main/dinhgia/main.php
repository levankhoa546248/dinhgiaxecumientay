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
                                       name="sodienthoai" required>

                                <input type="text" class="form-control" placeholder="Nhập địa chỉ" id="diachi"
                                       required>

                                <input type="text" class="form-control" placeholder="Nhập hãng xe" id="hangxe">

                                <input type="text" class="form-control" placeholder="Nhập dòng xe" id="dongxe">

                                <textarea class="form-control" rows="6"
                                          placeholder="Hãy cho chúng tôi biết tình trạng xe bạn hiện tại như thế nào. Một số thông tin cần cụ thể để dễ dàng định giá hơn. Cảm ơn bạn"
                                          name="thongtin"></textarea>
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
    <?php require('car/main/include/blog.php'); ?>
    <?php require('car/main/include/testimonial.php'); ?>
</main>
<script type="text/javascript" src="car/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="car/js/jquery.alerts.js"></script>
<link href="car/css/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen" />
<script>
    $(document).ready(function () {
        $('#tieptuc').click(function (e) {
            $.ajax({
                url: "car.php?controller=dinhgia&action=hinhanhgiaydangkiem",
                type: "POST",
                data: {
                    hoten: 1,
                },
                success: function (response) {
                    if (response > 0) {
                        jAlert("Gửi thông tin thành công", "Thông báo", function (e) {
                            // $("#hoten").prop("disabled", "disabled");
                            // $("#dienthoai").prop("disabled", "disabled");
                            // $("#diachi").prop("disabled", "disabled");
                            // $("#thongtinxe").prop("disabled", "disabled");
                            // $("#giamuamongmuon").prop("disabled", "disabled");
                            // $("#guithongtin").hide();
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