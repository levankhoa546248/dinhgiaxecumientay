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
<!-- File input -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/css/fileinput.min.css" media="all"
      rel="stylesheet" type="text/css"/>
<!-- Self css -->
<link href="themes/css/selfcss.css" rel="stylesheet" type="text/css" media="screen"/>
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="manager/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

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
                            <li class="breadcrumb-item active">Chủ đầu tư</li>
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
                            <input type="text" class="form-control" id="id" hidden>
                            <input type="text" class="form-control" id="idnhanvien" hidden>
                            <div class="input-group mb-3" style="text-align: center; flex-flow: column-reverse;">
                                <div class="file-loading">
                                    <input id="avatar" name="avatar" type="file" required>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="icheck-primary d-inline">
                                    <input type="checkbox" id="cothongtin">
                                    <label for="cothongtin"> Đã có thông tin
                                    </label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="hoten" placeholder="Họ tên">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fa fa-user"></span>
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
                                <input type="text" class="form-control" id="sodienthoai" placeholder="Số điện thoại">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-phone"></span>
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
                                        <span class="fas fa-zalo">Z</span>
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
                            <h3 class="card-title">Danh sách chủ đầu tư</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-striped table-bordered table-hover" id="danhsach"
                                   style="width:100%">
                                <thead class="bg-success">
                                <tr>
                                    <th class="text-center">Id</th>
                                    <th></th>
                                    <th class="text-center">Avatar</th>
                                    <th>Họ tên</th>
                                    <th>Email</th>
                                    <th>Điện thoại</th>
                                    <th>Facebook</th>
                                    <th>Zalo</th>
                                    <th>Địa chỉ</th>
                                    <th>Số dư</th>
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

    <div class="modal fade" id="modallist">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title">Danh sách nhân viên</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-bordered table-hover" id="dsnhanvien"
                           style="width:100%">
                        <thead class="bg-success">
                        <tr>
                            <th class="text-center">Id</th>
                            <th></th>
                            <th></th>
                            <th class="text-center">Avatar</th>
                            <th>Username</th>
                            <th>Họ tên</th>
                            <th>Email</th>
                            <th>Điện thoại</th>
                            <th>Facebook</th>
                            <th>Zalo</th>
                            <th>Địa chỉ</th>
                            <th>Id chức vụ</th>
                            <th>Chức vụ</th>
                        </tr>
                        </thead>
                    </table>
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
<script src="manager/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- my design js -->
<script src="themes/js/selfjs.js"></script>
<!-- Toastr -->
<script src="manager/plugins/toastr/toastr.min.js"></script>
<!-- File input -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/fileinput.min.js"></script>

<script type="text/javascript">

    $(document).ready(function () {
        $("#avatar").fileinput({
            showCaption: false,
            showRemove: false,
            showUpload: false
        });

        dsnhanvien();

        $('#cothongtin').change(function () {
            if (this.checked) {
                $('#modallist').modal('show');
                dsnhanvien();
                disableinput(true);
                $("#avatar").fileinput("disable");
            } else {
                disableinput(false);
                $("#avatar").fileinput("enable");
            }
        });

        function dsnhanvien() {
            $('#dsnhanvien').DataTable().destroy();
            $('#dsnhanvien').DataTable({
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
                        data: '', className: "text-center", width: '5%', render: function () {
                            return '';
                        }
                    },
                    {
                        data: '', className: "text-center", width: '5%', render: function () {
                            return '<button class="btn btn-primary btn-sm chonnhanvien"><i class="fas fa-check-circle"></i></button>';
                        }
                    },
                    {
                        data: 'avatar', className: "text-center", width: '10%', render: function (data) {
                            return data ?
                                '<img height="50px" width="50px" class="img-circle img-fluid" src="' + data + '" />' :
                                '<img height="50px" width="50px" class="img-circle img-fluid" src="manager/dist/img/boxed-bg.jpg" />';
                        }
                    },
                    {data: "username", width: '15%'},
                    {data: "hoten", width: '15%'},
                    {data: "email", width: '5%'},
                    {data: "sodienthoai", width: '5%'},
                    {
                        data: "facebook", width: '5%', render: function (data) {
                            return data ?
                                '<a target="_blank" href=' + data + ' class="text-center">Facebook</a>' :
                                'Chưa có thông tin';
                        }
                    },
                    {
                        data: "zalo", width: '5%', render: function (data) {
                            return data ?
                                '<a target="_blank" href=' + data + ' class="text-center">Zalo</a>' :
                                'Chưa có thông tin';
                        }
                    },
                    {data: "diachi", width: '20%'},
                    {data: "idchucvu", width: '5%', visible: false},
                    {data: "tenchucvu", width: '5%'}
                ]
            });
        }

        function disableinput(bool) {
            $("#hoten").prop('disabled', bool);
            $("#email").prop('disabled', bool);
            $("#sodienthoai").prop('disabled', bool);
            $("#facebook").prop('disabled', bool);
            $("#zalo").prop('disabled', bool);
            $("#diachi").prop('disabled', bool);
        }

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
                    url: "manager.php?controller=chudautu&action=danhsach",
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
                        data: 'avatar', className: "text-center", width: '20%', render: function (data) {
                            return data ?
                                '<img height="50px" width="50px" class="img-circle" src="' + data + '" />' :
                                '<img height="50px" width="50px" class="img-circle" src="manager/dist/img/boxed-bg.jpg" />';
                        }
                    },
                    {data: "hoten", width: '20%'},
                    {data: "email"},
                    {data: "sodienthoai"},
                    {data: "facebook"},
                    {data: "zalo"},
                    {data: "diachi"},
                    {data: "sodu"}
                ]
            });
        }

        //Empty input
        function emptyinput() {
            $("#avatar").fileinput('clear');
            $("#avatar").fileinput('destroy');
            $("#avatar").fileinput("enable");
            $("#avatar").fileinput({
                showCaption: false,
                showRemove: false,
                showUpload: false
            });
            $("#id").val("");
            $("#idnhanvien").val("");
            $("#hoten").val("");
            $("#email").val("");
            $("#sodienthoai").val("");
            $("#facebook").val("");
            $("#zalo").val("");
            $("#diachi").val("");
            $("#cothongtin").prop("checked", false);
        }

        //Insert
        $("#them").click(function (e) {
            var hoten = $("#hoten").val();
            var email = $("#email").val();
            var sodienthoai = $("#sodienthoai").val();
            var facebook = $("#facebook").val();
            var zalo = $("#zalo").val();
            var idnhanvien = $("#idnhanvien").val();
            var diachi = $("#diachi").val();
            if (checkIf(hoten)) {
                toastr.error('Chưa nhập tên chủ đầu tư')
            } else {
                var dataform = new FormData();
                dataform.append("images", $('#avatar').prop('files')[0]);
                dataform.append("idnhanvien", idnhanvien);
                dataform.append("hoten", hoten);
                dataform.append("email", email);
                dataform.append("diachi", diachi);
                dataform.append("sodienthoai", sodienthoai);
                dataform.append("facebook", facebook);
                dataform.append("zalo", zalo);
                $.ajax({
                    url: "manager.php?controller=chudautu&action=them",
                    type: "POST",
                    data: dataform,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        if (response > 0) {
                            toastr.success('Success');
                            danhsach();
                            emptyinput();
                        } else {
                            toastr.error('Fail');
                        }
                    }
                });
            }
        });
        //Click row table
        $('#danhsach tbody').on('click', 'tr', function () {
            var data = $('#danhsach').DataTable().row(this).data();
            $("#id").val(data.id);
            $("#hoten").val(data.hoten);
            $("#email").val(data.email);
            $("#diachi").val(data.diachi);
            $("#sodienthoai").val(data.sodienthoai);
            $("#facebook").val(data.facebook);
            $("#zalo").val(data.zalo);
            $("#avatar").fileinput('clear');
            $("#avatar").fileinput('destroy');
            $("#avatar").fileinput({
                showCaption: false,
                showRemove: false,
                showUpload: false,
                defaultPreviewContent: [
                    '<img src="' + data.avatar + '">'
                ]
            });
        });
        //Update
        $("#sua").click(function (e) {
            var id = $("#id").val();
            var hoten = $("#hoten").val();
            var email = $("#email").val();
            var sodienthoai = $("#sodienthoai").val();
            var facebook = $("#facebook").val();
            var zalo = $("#zalo").val();
            var idnhanvien = $("#idnhanvien").val();
            var diachi = $("#diachi").val();
            if (checkIf(hoten)) {
                toastr.error('Chưa nhập tên chủ đầu tư')
            } else {
                var dataform = new FormData();
                dataform.append("images", $('#avatar').prop('files')[0]);
                dataform.append("id", id);
                dataform.append("idnhanvien", idnhanvien);
                dataform.append("hoten", hoten);
                dataform.append("email", email);
                dataform.append("diachi", diachi);
                dataform.append("sodienthoai", sodienthoai);
                dataform.append("facebook", facebook);
                dataform.append("zalo", zalo);
                $.ajax({
                    url: "manager.php?controller=chudautu&action=sua",
                    type: "POST",
                    data: dataform,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        if (response > 0) {
                            toastr.success('Success');
                            danhsach();
                            emptyinput();
                        } else {
                            toastr.error('Fail');
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
                    url: "manager.php?controller=chudautu&action=xoa",
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
            disableinput(false);
        });

        //Click row table
        $('#dsnhanvien tbody').on('click', 'button.chonnhanvien', function (e) {
            var $row = $(this).closest('tr');
            var data = $('#dsnhanvien').DataTable().row($row).data();
            $("#idnhanvien").val(data.id);
            $("#hoten").val(data.hoten);
            $("#email").val(data.email);
            $("#diachi").val(data.diachi);
            $("#sodienthoai").val(data.sodienthoai);
            $("#facebook").val(data.facebook);
            $("#zalo").val(data.zalo);
            $("#avatar").fileinput('clear');
            $("#avatar").fileinput('destroy');
            $("#avatar").fileinput({
                showCaption: false,
                showRemove: false,
                showUpload: false,
                defaultPreviewContent: [
                    '<img src="' + data.avatar + '">'
                ]
            });
            $('#modallist').modal('hide');
        });
    })

</script>
</body>
</html>
