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
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
<!-- Toastr -->
<link rel="stylesheet" href="manager/plugins/toastr/toastr.min.css">
<!-- jAlert -->
<link href="themes/css/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen"/>

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
                            <li class="breadcrumb-item"><a href="manager.php?controller=home&action=index">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Tìm xe</li>
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
                            <h3 class="card-title">Danh sách tìm xe</h3>
                            <a id="lammoi" href="#" class="float-right"><i class="fas fa-sync-alt"></i></a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-striped table-bordered table-hover" id="danhsach"
                                   style="width:100%">
                                <thead class="bg-success">
                                <tr>
                                    <th class="text-center">Id</th>
                                    <th></th>
                                    <th></th>
                                    <th>Họ tên</th>
                                    <th>Điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th>Giá mong muốn</th>
                                    <th>Hãng xe</th>
                                    <th>Dòng xe</th>
                                    <th>Thông tin xe</th>
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
    <div class="modal fade" id="modalupdate">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title">Cập nhật thông tin tìm xe</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form form-vertical" action="/site/avatar-upload/1" method="post"
                          enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6 text-center">
                                <div class="kv-avatar">
                                    <div class="file-loading">
                                        <input id="avatar-1" name="avatar-1" type="file" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group mb-3">
                                    <input hidden type="text" class="form-control" id="id">
                                    <input type="text" class="form-control" id="hoten" placeholder="Họ tên">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fa fa-id-badge"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="email" placeholder="Email">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="diachi" placeholder="Địa chỉ">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-location-arrow"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="sodienthoai"
                                           placeholder="Số điện thoại">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-phone"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <select class="form-control custom-select" id="chucvu">
                                        <option value="-1" selected>Chọn chức vụ</option>
                                        <?php foreach ($chucvu as $chucvus) {
                                            $selected = '';
                                            echo '<option value="' . $chucvus['id'] . '" ' . $selected . '>' . $chucvus['ten'] . '</option>';
                                        } ?>
                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fas fa-address-card"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="facebook" placeholder="Facebook">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fab fa-facebook-square"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="zalo" placeholder="Zalo">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fa fa-zalo">Z</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="suatimxe">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

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
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<!-- my design js -->
<script src="themes/js/selfjs.js"></script>
<!-- Toastr -->
<script src="manager/plugins/toastr/toastr.min.js"></script>
<!-- jAlert -->
<script src="themes/js/jquery.alerts.js" type="text/javascript"></script>
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
                    url: "manager.php?controller=timxe&action=danhsach",
                    dataSrc: ''
                },
                columns: [
                    {data: "id", className: "text-center", width: '20%', visible: false},
                    {
                        data: 'trangthai', className: "text-center", width: '5%', render: function (data) {
                            return data == 1 ? '<button placeholder="Chưa xem" class="btn btn-warning btn-sm daxem"><i class="fas fa-eye"></i></button>'
                                : '<button placeholder="Đã xem" class="btn btn-warning btn-sm chuaxem"><i class="fas fa-eye-slash"></i></button>';
                        }
                    },
                    {
                        data: '', className: "text-center", width: '5%', render: function () {
                            return '<button class="btn btn-danger btn-sm xoa"><i class="fas fa-trash"></i></button>';
                        }
                    },
                    {data: "hoten", width: '15%'},
                    {data: "dienthoai", width: '15%'},
                    {data: "diachi", width: '20%'},
                    {data: "giamuamongmuon", width: '15%'},
                    {data: "hangxe", width: '10%'},
                    {data: "dongxe", width: '10%'},
                    {data: "thongtinxe", width: '10%'}
                ]
                // dom: 'B<"clear">lfrtip',
                // buttons: {
                //     dom: {
                //         button: {
                //             tag: 'button',
                //             className: ''
                //         }
                //     },
                //     buttons: [{
                //         className: 'btn btn-primary',
                //         titleAttr: 'Làm mới danh sách',
                //         text: 'Làm mới',
                //         action: function () {
                //             danhsach();
                //         }
                //     }]
                // }
            });
        }

        $("#lammoi").click(function () {
            danhsach();
        });

        $('#danhsach').on('click', 'button.chuaxem', function (e) {
            var $row = $(this).closest('tr');
            var data = $('#danhsach').DataTable().row($row).data();
            var id = data.id;
            capnhattrangthai(id, 1);
        });

        $('#danhsach').on('click', 'button.daxem', function (e) {
            var $row = $(this).closest('tr');
            var data = $('#danhsach').DataTable().row($row).data();
            var id = data.id;
            capnhattrangthai(id, 0);
        });

        function capnhattrangthai(id, trangthai) {
            $.ajax({
                url: "manager.php?controller=timxe&action=capnhattrangthai",
                type: "POST",
                data: {
                    id: id,
                    trangthai: trangthai
                },
                success: function (response) {
                    if (response > 0) {
                        if (trangthai == 1) {
                            toastr.success('Đã xem');
                        } else {
                            toastr.success('Chưa xem');
                        }
                        danhsach();
                    }
                }
            });
        }

        $('#danhsach').on('click', 'button.xoa', function (e) {
            var $row = $(this).closest('tr');
            var data = $('#danhsach').DataTable().row($row).data();
            jConfirm('Bạn chắc chắn muốn xóa dòng này?', 'Thông báo', function (e) {
                if (e) {
                    $.ajax({
                        url: "manager.php?controller=timxe&action=xoa",
                        type: "POST",
                        data: {
                            id: data["id"]
                        },
                        success: function (response) {
                            if (response > 0) {
                                toastr.success('Đã xóa thành công');
                                danhsach();
                            } else {
                                toastr.warning('Xóa không thành công');
                            }
                        }
                    });
                }
            });
        });

    })

</script>
</body>
</html>
