<!-- CONTACT -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <form id="contact-form" role="form" action="" method="post">
                    <div class="section-title">
                        <h2>Thông tin liên lạc <small>We love conversations. Let us talk!</small></h2>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <input type="text" class="form-control" placeholder="Nhập họ tên" id="hoten" required>

                        <input type="text" class="form-control" placeholder="Nhập số điện thoại" id="dienthoai"
                               required>

                        <input type="email" class="form-control" placeholder="Nhập địa chỉ email" id="email"
                               required>

                        <textarea class="form-control" rows="6" placeholder="Hãy cho chúng tôi biết về tin nhắn của bạn" id="message"
                                  required></textarea>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <input type="button" class="section-btn btn btn-default" id="sendmessage" value="Send Message"></div>

                </form>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="contact-image">
                    <img src="car/images/contact-1-600x400.jpg" class="img-responsive" alt="Smiling Two Girls">
                </div>
            </div>

        </div>
    </div>
</section>
<!-- SCRIPTS -->
<script src="car/themes/js/jquery.js" type="text/javascript"></script>
<script src="car/themes/js/bootstrap.min.js" type="text/javascript"></script>
<script src="car/themes/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="car/themes/js/smoothscroll.js" type="text/javascript"></script>
<script src="car/themes/js/custom.js" type="text/javascript"></script>
<script src="car/themes/js/jquery-3.4.1.js" type="text/javascript"></script>
<script src="car/themes/js/jquery.alerts.js" type="text/javascript"></script>
<script type="text/javascript" src="car/themes/js/selfjs.js"></script>
<script>
    $(document).ready(function () {
        $('#sendmessage').click(function (e) {
            if (checkIf($("#dienthoai").val())) {
                jAlert("Chưa nhập số điện thoại", "Thông báo", function (e) {
                    $("#dienthoai").focus();
                });
            } else {
                $.ajax({
                    url: "car.php?controller=lienlac&action=lienlacC",
                    type: "POST",
                    data: {
                        hoten: $("#hoten").val(),
                        dienthoai: $("#dienthoai").val(),
                        email: $("#email").val(),
                        message: $("#message").val()
                    },
                    success: function (response) {
                        if (response > 0) {
                            jAlert("Gửi thông tin thành công. Chúng tôi sẽ sớm liên hệ với bạn", "Thông báo", function (e) {
                                $("#hoten").prop("disabled", true);
                                $("#dienthoai").prop("disabled", true);
                                $("#email").prop("disabled", true);
                                $("#message").prop("disabled", true);
                                $("#hoantat").prop("disabled", true);
                            });
                        } else {
                            jAlert("Gửi thông tin không thành công.", "Thông báo", function (e) {
                            });
                        }
                    }
                });
            }
        });
    });
</script>