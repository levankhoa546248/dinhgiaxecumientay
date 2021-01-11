<?php require('manager/pages/include/head.php'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome -->
<link rel="stylesheet" href="manager/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="manager/dist/css/adminlte.min.css">
<!-- summernote -->
<link rel="stylesheet" href="manager/plugins/summernote/summernote-bs4.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <?php require('manager/pages/include/navbar.php'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php require('manager/pages/include/sidebar.php'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><?php echo $header; ?></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="manager.php?controller=home&action=index">Website</a>
                            </li>
                            <li class="breadcrumb-item active">Giới thiệu</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo $content; ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <input type="text" id="id" class="form-control"
                                   value="<?php if (!empty($gioithieu['id'])) {
                                       echo $gioithieu['id'];
                                   } ?>" hidden>
                            <div class="form-group">
                                <label for="">Phần tiêu đề</label>
                                <textarea id="title" placeholder="Place some text here" rows="3"
                                          style="width: 100%; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php if (!empty($gioithieu['tieude'])) {
                                        echo $gioithieu['tieude'];
                                    } ?></textarea>

                            </div>
                            <div class="form-group">
                                <label for="">Phần nội dung</label>
                                <div class="mb-3">
                                    <textarea id="content" placeholder="Place some text here"
                                              style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php if (!empty($gioithieu['noidung'])) {
                                            echo $gioithieu['noidung'];
                                        } ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-primary float-right m-1" id="capnhat">Cập nhật
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php require('manager/pages/include/footer.php'); ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="manager/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="manager/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="manager/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="manager/dist/js/demo.js"></script>
<!-- Summernote -->
<script src="manager/plugins/summernote/summernote-bs4.min.js"></script>
<!-- Toastr -->
<script src="manager/plugins/toastr/toastr.min.js"></script>
<script>
    $(function () {
        // Summernote
        $('#content').summernote();
        $("#capnhat").click(function (e) {
            $.ajax({
                url: "manager.php?controller=website&action=gioithieu",
                type: "POST",
                data: {
                    id: $("#id").val(),
                    tieude: $("#title").val(),
                    noidung: $("#content").summernote("code")
                },
                success: function (response) {
                    if (response > 0) {
                        toastr.success('Thêm thành công');
                        location.href = "manager.php?controller=website&action=gioithieu&menu=website";
                    }
                }
            });
        });
    })
</script>
</body>
</html>
