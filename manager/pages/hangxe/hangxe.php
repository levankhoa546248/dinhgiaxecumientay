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
                            <li class="breadcrumb-item"><a href="manager.php?controller=home&action=index">Danh mục</a></li>
                            <li class="breadcrumb-item active">Hãng xe</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo $content; ?></h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="hangxe">Tên hãng xe</label>
                                <input type="text" id="id" class="form-control" value="" hidden>
                                <input type="text" id="tenhangxe" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-primary float-right m-1" id="them">Thêm</button>
                                <button type="button" class="btn btn-warning float-right m-1" id="sua">Sửa</button>
                                <button type="button" class="btn btn-danger float-right m-1" id="xoa">Xóa</button>
                                <button type="button" class="btn btn-dark float-left m-1" id="huy">Hủy</button>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Danh sách dòng xe</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-striped table-bordered table-hover" id="dshangxe" style="width:100%">
                                <thead class="bg-success">
                                <tr>
                                    <th class="text-center">Id</th>
                                    <th>Tên hãng xe</th>
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
        dshangxe();
        //Get danh sach
        function dshangxe() {
            $('#dshangxe').DataTable().destroy();
            $('#dshangxe').DataTable({
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
                    url: "manager.php?controller=hangxe&action=dshangxe",
                    dataSrc: ''
                },
                columns: [
                    {data: "id", className: "text-center", width: '20%'},
                    {data: "tenhang"}
                ]
            });
        }
        //Empty input
        function emptyinput(){
            $("#id").val("");
            $("#tenhangxe").val("");
        }
        //Insert
        $("#them").click(function (e) {
            var tenhangxe = $("#tenhangxe").val();
            if (checkIf(tenhangxe)){
                toastr.error('Chưa nhập tên hãng xe')
            }else {
                $.ajax({
                    url: "manager.php?controller=hangxe&action=themhangxe",
                    type: "POST",
                    data: {
                        tenhangxe: tenhangxe
                    },
                    success: function (response) {
                        if (response > 0) {
                            dshangxe();
                        }
                    }
                });
            }
        });
        //Click row table
        $('#dshangxe tbody').on( 'click', 'tr', function () {
            var rowData = $('#dshangxe').DataTable().row( this ).data();
            var id = rowData.id;
            var tenhang = rowData.tenhang;
            $("#id").val(id);
            $("#tenhangxe").val(tenhang);
        } );
        //Update
        $("#sua").click(function (e) {
            var id = $("#id").val();
            var tenhangxe = $("#tenhangxe").val();
            if (checkIf(id)){
                toastr.error('Hãy chọn một dòng của danh sách');
            }else {
                $.ajax({
                    url: "manager.php?controller=hangxe&action=suahangxe",
                    type: "POST",
                    data: {
                        id: id,
                        tenhangxe: tenhangxe
                    },
                    success: function (response) {
                        if (response > 0) {
                            emptyinput();
                            toastr.success('Sửa thành công');
                            dshangxe();
                        }
                    }
                });
            }
        });
        //Delete
        $("#xoa").click(function (e) {
            var id = $("#id").val();
            if (checkIf(id)){
                toastr.error('Hãy chọn một dòng của danh sách');
            }else {
                $.ajax({
                    url: "manager.php?controller=hangxe&action=xoahangxe",
                    type: "POST",
                    data: {
                        id: id
                    },
                    success: function (response) {
                        if (response > 0) {
                            emptyinput();
                            toastr.success('Xóa thành công');
                            dshangxe();
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
