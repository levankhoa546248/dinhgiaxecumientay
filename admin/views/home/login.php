<!--<!DOCTYPE html>-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="admin/themes/images/favicon.png">
    <title><?php echo isset($title) ? $title : 'Đăng nhập'; ?></title>
    <link href="admin/themes/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="admin/themes/css/metisMenu.min.css" rel="stylesheet"/>
    <link href="admin/themes/css/timeline.css" rel="stylesheet"/>
    <link href="admin/themes/css/sb-admin-2.css" rel="stylesheet"/>
    <link href="admin/themes/css/morris.css" rel="stylesheet"/>
    <link href="admin/themes/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="admin/themes/css/dataTables.bootstrap.css" rel="stylesheet"/>
    <link href="admin/themes/css/dataTables.responsive.css" rel="stylesheet"/>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="admin/themes/js/jquery.min.js"></script>
</head>
<body>

<div id="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading text-center">
                        <h3 class="panel-title">ĐĂNG NHẬP</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="admin.php?controller=home&action=login" class="form-signin"
                              role="form">
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="username" type="text"
                                       autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password"
                                       value="">
                            </div>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng Nhập</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>