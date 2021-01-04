<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" href="<?php echo $shortcuticon; ?>">
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
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Toastr -->
    <link rel="stylesheet" href="manager/plugins/toastr/toastr.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="manager/index2.html"><b>Admin</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

            <form action="recover-password.html" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control username" placeholder="Username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control email" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="button" class="btn btn-primary btn-block requestpassword">Request new password
                        </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <p class="mt-3 mb-1">
                <a href="manager.php?controller=login&action=logout">Đăng nhập</a>
            </p>
            <p class="mb-0">
                <a href="register.html" class="text-center">Đăng ký mới</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="manager/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="manager/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="manager/dist/js/adminlte.min.js"></script>
<!-- Toastr -->
<script src="manager/plugins/toastr/toastr.min.js"></script>
<script>
    $(document).ready(function () {
        $('.requestpassword').click(function (e) {
            var username = $('.username').val();
            var email = $('.email').val();
            if (username == "") {
                toastr.warning('Chưa nhập Username');
            } else if (email == "") {
                toastr.warning('Chưa nhập Email');
            } else {
                $.ajax({
                    type: "POST",
                    url: "manager.php?controller=login&action=request-password",
                    data: {
                        username: username,
                        email: email
                    },
                    success: function (response) {
                        if (response > 0) {
                            location.href = "manager.php?controller=login&action=recover-password&username=" + username;
                        } else {
                            toastr.error('Không tìm thấy username và email');
                        }
                    }
                });
            }
        });
    });
</script>
</body>
</html>
