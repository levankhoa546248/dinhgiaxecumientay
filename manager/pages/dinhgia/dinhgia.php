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
<!-- File input -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/css/fileinput.min.css" media="all"
      rel="stylesheet" type="text/css"/>
<link href="themes/fileinput/css/fileinput.min.css" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" rel="stylesheet">
<link href="themes/fileinput/themes/explorer-fas/theme.css" rel="stylesheet">
<!-- Self css -->
<link href="themes/css/selfcss.css" rel="stylesheet" type="text/css" media="screen"/>
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
                            <li class="breadcrumb-item active">Định giá</li>
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
                            <h3 class="card-title">Danh sách định giá</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>Chi tiết xe</label>
                                    <textarea class="form-control" rows="3" disabled
                                              id="thongtinxe"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Hình ảnh giấy đăng kiểm</label>
                                    <div class="file-loading">
                                        <input id="hinhdangkiems" name="hinhdangkiems[]" type="file" multiple>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label>Hình ảnh xe</label>
                                    <div class="file-loading">
                                        <input id="hinhdinhgias" name="hinhdinhgias[]" type="file" multiple>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <table class="table table-striped table-bordered table-hover" id="danhsach"
                                   style="width:100%">
                                <thead class="bg-success">
                                <tr>
                                    <th class="text-center">Id</th>
                                    <th></th>
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
                        <hr>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
    </div>
    </section>
    <!-- /.content -->
</div>
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
<!-- jAlert -->
<script src="themes/js/jquery.alerts.js" type="text/javascript"></script>
<!-- File input -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/fileinput.min.js"></script>
<script src="themes/fileinput/js/fileinput.js"></script>
<script src="themes/fileinput/themes/explorer-fas/theme.js"></script>
<script src="manager/plugins/summernote/summernote-bs4.min.js"></script>
<!-- DataTables -->
<script src="manager/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="manager/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="manager/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
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
                searching: false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                order: [[0, 'desc']],
                ajax: {
                    type: 'POST',
                    url: "manager.php?controller=dinhgia&action=danhsach",
                    dataSrc: ''
                },
                columns: [
                    {data: "id", className: "text-center", width: '20%', visible: false},
                    {
                        data: '', className: "text-center", width: '5%', render: function () {
                            return '';
                        }
                    },
                    {
                        data: 'trangthai', className: "text-center", width: '5%', render: function (data) {
                            return data == 1 ? '<button class="btn btn-warning btn-sm chuaxem"><i class="fas fa-eye"></i></button>'
                                : '<button class="btn btn-warning btn-sm daxem"><i class="fas fa-eye-slash"></i></button>';
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
                    {data: "giabanmongmuon", width: '20%'},
                    {data: "hangxe", width: '20%'},
                    {data: "dongxe", width: '20%'},
                    {data: "thongtinxe", width: '30%', visible: false}
                ],
                dom: 'B<"clear">lfrtip',
                buttons: {
                    dom: {
                        button: {
                            tag: 'button',
                            className: ''
                        }
                    },
                    buttons: [{
                        className: 'btn btn-primary',
                        titleAttr: 'Refresh Table',
                        text: 'Làm mới',
                        action: function () {
                            danhsach();
                            emptyinput();
                        }
                    }]
                }
            });
        }

        $('#danhsach tbody').on('click', 'tr', function () {
            var row = $('#danhsach').DataTable().row(this).data();
            $("#thongtinxe").val(row.thongtinxe);
            var id = row.id;
            hinhdangkiem(id);
            hinhdinhgia(id);
        });

        $('#danhsach').on('click', 'button.xoa', function (e) {
            var $row = $(this).closest('tr');
            var data = $('#danhsach').DataTable().row($row).data();
            jConfirm('Bạn chắc chắn muốn xóa dòng này?', 'Thông báo', function (e) {
                if (e) {
                    $.ajax({
                        url: "manager.php?controller=dinhgia&action=xoa",
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

        $("#hinhdinhgias").fileinput({
            showBrowse: false,
            showCaption: false,
            showRemove: false,
            showUpload: false,
            showPreview: true,
            theme: 'explorer-fas',
            dropZoneTitle: 'Hình ảnh xe'
        });

        $("#hinhdangkiems").fileinput({
            showBrowse: false,
            showCaption: false,
            showRemove: true,
            showUpload: false,
            showPreview: true,
            theme: 'explorer-fas',
            dropZoneTitle: 'Hình ảnh giấy đăng kiểm'
        });

        function hinhdinhgia(id) {
            $.ajax({
                url: "manager.php?controller=dinhgia&action=hinhdinhgia",
                type: "POST",
                data: {
                    id: id
                },
                success: function (data) {
                    var ha = JSON.parse(data);
                    var length = ha.length;
                    if (length > 0) {
                        var pre = [];
                        for (var i = 0; i < length; i++) {
                            pre.push("<img class='kv-preview-data file-preview-image' src='" + ha[i].images + "'>");
                        }
                        $('#hinhdinhgias').fileinput('clear');
                        $('#hinhdinhgias').fileinput('destroy');
                        $("#hinhdinhgias").fileinput({
                            showBrowse: false,
                            showCaption: false,
                            showRemove: true,
                            showUpload: false,
                            showPreview: true,
                            theme: 'explorer-fas',
                            initialPreview: pre
                        });
                    }
                }
            });
        }

        function hinhdangkiem(id) {
            $.ajax({
                url: "manager.php?controller=dinhgia&action=hinhdangkiem",
                type: "POST",
                data: {
                    id: id
                },
                success: function (data) {
                    var ha = JSON.parse(data);
                    var length = ha.length;
                    if (length > 0) {
                        var pre = [];
                        for (var i = 0; i < length; i++) {
                            pre.push("<img class='kv-preview-data file-preview-image' src='" + ha[i].images + "'>");
                        }
                        $('#hinhdangkiems').fileinput('clear');
                        $('#hinhdangkiems').fileinput('destroy');
                        $("#hinhdangkiems").fileinput({
                            showBrowse: false,
                            showCaption: false,
                            showRemove: true,
                            showUpload: false,
                            showPreview: true,
                            theme: 'explorer-fas',
                            initialPreview: pre
                        });
                    }
                }
            });
        }

        function emptyinput() {
            $("#thongtinxe").val("");
            $('#hinhdangkiems').fileinput('clear');
            $('#hinhdinhgias').fileinput('clear');
        }

        $('#danhsach').on('click', 'button.chuaxem', function (e) {
            var $row = $(this).closest('tr');
            var data = $('#danhsach').DataTable().row($row).data();
            chuyentrangthai(data.id, 0);
        });
        $('#danhsach').on('click', 'button.daxem', function (e) {
            var $row = $(this).closest('tr');
            var data = $('#danhsach').DataTable().row($row).data();
            chuyentrangthai(data.id, 1);
        });

        function chuyentrangthai(id, trangthai) {
            $.ajax({
                url: "manager.php?controller=dinhgia&action=chuyentrangthai",
                type: "POST",
                data: {
                    id: id,
                    trangthai: trangthai
                },
                success: function (data) {
                    if (trangthai == 1) {
                        toastr.success('Đã xem');
                    } else {
                        toastr.success('Chưa xem');
                    }
                    danhsach();
                }
            });
        }
    })

</script>
</body>
</html>
