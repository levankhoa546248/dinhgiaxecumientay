<?php require('manager/pages/include/head.php'); ?>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Font Awesome -->
<link rel="stylesheet" href="manager/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- icheck bootstrap -->
<link rel="stylesheet" href="manager/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="manager/dist/css/adminlte.min.css">
<!-- File input -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/css/fileinput.min.css" media="all"
      rel="stylesheet" type="text/css"/>
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="manager/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="manager/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Toastr -->
<link rel="stylesheet" href="manager/plugins/toastr/toastr.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="manager.php?controller=login&action=register"><b>Admin</b></a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Đăng ký tài khoản</p>
            <form>
                <div class="input-group mb-3">
                    <div class="file-loading">
                        <input id="avatar-1" name="avatar-1" type="file" required>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control hoten" placeholder="Full name">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fa fa-id-badge"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control email" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control username" placeholder="Username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control retypepassword" placeholder="Retype password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <a href="manager.php?controller=login&action=login" class="text-center">Đã có tài khoản</a>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="button" class="btn btn-primary btn-block register">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <!--            <div class="social-auth-links text-center">-->
            <!--                <p>- OR -</p>-->
            <!--                <a href="#" class="btn btn-block btn-primary">-->
            <!--                    <i class="fab fa-facebook mr-2"></i>-->
            <!--                    Sign up using Facebook-->
            <!--                </a>-->
            <!--                <a href="#" class="btn btn-block btn-danger">-->
            <!--                    <i class="fab fa-google-plus mr-2"></i>-->
            <!--                    Sign up using Google+-->
            <!--                </a>-->
            <!--            </div>-->

        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="manager/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="manager/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- File input -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/fileinput.min.js"></script>
<!-- AdminLTE App -->
<script src="manager/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="manager/dist/js/demo.js"></script>
<!-- Toastr -->
<script src="manager/plugins/toastr/toastr.min.js"></script>
<script>
    $("#avatar-1").fileinput({
        showCaption: false,
        showRemove: true,
        showUpload: false,
        showPreview: true
    });
    $(document).ready(function () {
        $('.register').click(function (e) {
            if ($(".hoten").val() == "") {
                toastr.warning('Chưa nhập Họ tên');
            } else if ($(".email").val() == "") {
                toastr.warning('Chưa nhập Email');
            } else if ($(".username").val() == "") {
                toastr.warning('Chưa nhập Username');
            } else if ($(".password").val() == "") {
                toastr.warning('Chưa nhập Password');
            } else if ($(".password").val() != $(".retypepassword").val()) {
                toastr.warning('Mật khẩu không khớp');
            } else {
                var dataform = new FormData();
                dataform.append("images", $('#avatar-1').prop('files')[0]);
                dataform.append("hoten", $(".hoten").val());
                dataform.append("email", $(".email").val());
                dataform.append("username", $(".username").val());
                dataform.append("password", $(".password").val());
                $.ajax({
                    url: "manager.php?controller=login&action=register",
                    type: "POST",
                    data: dataform,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        if (response > 0) {
                            toastr.success('Tạo tài khoản thành công');
                            location.href = "manager.php?controller=login&action=login";
                        } else if (response = -1) {
                            toastr.warning('Username đã tồn tại');
                        }
                    }
                });
            }
        });
    });
</script>
<!-- Tempusdominus Bootstrap 4 -->

</body>
</html>
