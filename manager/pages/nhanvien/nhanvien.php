<?php require('manager/pages/include/head.php'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome -->
<link rel="stylesheet" href="manager/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="manager/dist/css/adminlte.min.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<!-- DataTables -->
<link rel="stylesheet" href="manager/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="manager/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<!-- Toastr -->
<link rel="stylesheet" href="manager/plugins/toastr/toastr.min.css">
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
                            <li class="breadcrumb-item"><a href="manager.php?controller=home&action=index">Danh mục</a>
                            </li>
                            <li class="breadcrumb-item active">Năm sản xuất</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Danh sách nhân viên</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-striped table-bordered table-hover" id="danhsach"
                                   style="width:100%">
                                <thead class="bg-success">
                                <tr>
                                    <th class="text-center">Id</th>
                                    <th class="text-center">Avatar</th>
                                    <th>Username</th>
                                    <th>Họ tên</th>
                                    <th>Email</th>
                                    <th><i class="fa fa-cogs"></i></th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
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
<!-- DataTables -->
<script src="manager/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="manager/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="manager/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="manager/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- my design js -->
<script src="themes/js/selfjs.js"></script>
<!-- Toastr -->
<script src="manager/plugins/toastr/toastr.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        //Load danh sach
        danhsach();

        //Get danh sach
        function danhsach() {
            $('#danhsach').DataTable().destroy();
            $('#danhsach').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                order: [[0, 'desc']],
                ajax: {
                    type: 'POST',
                    url: "manager.php?controller=nhanvien&action=danhsach",
                    dataSrc: ''
                },
                columns: [
                    {data: "id", className: "text-center", width: '20%', visible: false},
                    {
                        data: 'avatar', className: "text-center", width: '20%', render: function (data) {
                            return data ?
                                '<img height="50px" width="50px" class="img-circle img-fluid" src="data:image/png;base64,' + data + '" />' :
                                '<img height="50px" width="50px" class="img-circle img-fluid" src="manager/dist/img/boxed-bg.jpg" />';
                        }
                    },
                    {data: "username", width: '20%'},
                    {data: "hoten"},
                    {data: "email"},
                    {
                        data: '', className: "text-center", width: '20%', render: function () {
                            return '<button class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></button>' +
                                ' <button class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash"></i></a>';
                        }
                    }
                ]
            });
        }

        //Empty input
        function emptyinput() {
            $("#id").val("");
            $("#ten").val("");
        }

        //Insert
        $("#them").click(function (e) {
            var ten = $("#ten").val();
            if (checkIf(ten)) {
                toastr.error('Chưa nhập tên năm sản xuất')
            } else {
                $.ajax({
                    url: "manager.php?controller=nhanvien&action=them",
                    type: "POST",
                    data: {
                        ten: ten
                    },
                    success: function (response) {
                        if (response > 0) {
                            toastr.success('Thêm thành công');
                            emptyinput();
                            danhsach();
                        }
                    }
                });
            }
        });
        //Click row table
        $('#danhsach tbody').on('click', 'tr', function () {
            var rowData = $('#danhsach').DataTable().row(this).data();
            var id = rowData.id;
            var ten = rowData.ten;
            $("#id").val(id);
            $("#ten").val(ten);
        });
        //Update
        $("#sua").click(function (e) {
            var id = $("#id").val();
            var ten = $("#ten").val();
            if (checkIf(id)) {
                toastr.error('Hãy chọn một dòng của danh sách');
            } else {
                $.ajax({
                    url: "manager.php?controller=nhanvien&action=sua",
                    type: "POST",
                    data: {
                        id: id,
                        ten: ten
                    },
                    success: function (response) {
                        if (response > 0) {
                            emptyinput();
                            toastr.success('Sửa thành công');
                            danhsach();
                        }
                    }
                });
            }
        });
        //Delete
        $("#xoa").click(function (e) {
            var id = $("#id").val();
            if (checkIf(id)) {
                toastr.error('Hãy chọn một dòng của danh sách');
            } else {
                $.ajax({
                    url: "manager.php?controller=nhanvien&action=xoa",
                    type: "POST",
                    data: {
                        id: id
                    },
                    success: function (response) {
                        if (response > 0) {
                            emptyinput();
                            toastr.success('Xóa thành công');
                            danhsach();
                        }
                    }
                });
            }
        });
        //Cancel
        $("#huy").click(function (e) {
            emptyinput();
        });
    })

</script>
</body>
</html>
