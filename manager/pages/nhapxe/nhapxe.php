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
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="manager/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- daterange picker -->
<link rel="stylesheet" href="manager/plugins/daterangepicker/daterangepicker.css">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="manager/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="manager/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="manager/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- Select2 -->
<link rel="stylesheet" href="manager/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="manager/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<!-- Bootstrap4 Duallistbox -->
<link rel="stylesheet" href="manager/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
<!-- File input -->
<link href="themes/fileinput/css/fileinput.min.css" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" rel="stylesheet">
<link href="themes/fileinput/themes/explorer-fas/theme.css" rel="stylesheet">
<!-- Self css -->
<link rel="stylesheet" href="manager/plugins/select2/css/select2.min.css">
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
                            <li class="breadcrumb-item"><a href="manager.php?controller=home&action=index">Home</a></li>
                            <li class="breadcrumb-item active">Màu sắc</li>
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
                            <h3 class="card-title"><?php echo $content; ?></h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <input type="text" id="id" class="form-control" value="" hidden>
                                <div class="form-group col-sm-3">
                                    <label for="">Tên xe</label>
                                    <input type="text" id="tenxe" class="form-control" value="">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="">Chi phí mua</label>
                                    <input type="text" id="chiphimua" class="form-control" value=""
                                           data-type="currency">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="">Chi phí bán</label>
                                    <input type="text" id="chiphiban" class="form-control" value=""
                                           data-type="currency">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="">Giá vốn</label>
                                    <input type="text" id="giavon" class="form-control" value=""
                                           data-type="currency">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="">Giá hiển thị</label>
                                    <input type="text" id="giahienthi" class="form-control" value=""
                                           data-type="currency">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="">Giá bán</label>
                                    <input type="text" id="Giá bán" class="form-control" value=""
                                           data-type="currency">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="">Số lượng</label>
                                    <input type="text" id="soluong" class="form-control" value="1">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Ngày nhập</label>
                                    <div class="input-group date" id="ngaynhap" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                               data-target="#ngaynhap"/>
                                        <div class="input-group-append" data-target="#ngaynhap"
                                             data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="">Hãng xe</label>
                                    <select class="form-control" id="hangxe" style="width: 100%;">
                                        <option selected="selected" value="0">---Chọn---</option>
                                        <?php foreach ($hangxes as $hangxe) {
                                            echo '<option value="' . $hangxe['id'] . '">' . $hangxe['tenhang'] . '</option>';
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="">Dòng xe</label>
                                    <select class="form-control" id="dongxe" style="width: 100%;">
                                        <option selected="selected" value="0">---Chọn---</option>
                                        <?php foreach ($dongxes as $dongxe) {
                                            echo '<option value="' . $dongxe['id'] . '">' . $dongxe['tendongxe'] . '</option>';
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="">Nhiên liệu</label>
                                    <select class="form-control" id="nhienlieu" style="width: 100%;">
                                        <option selected="selected" value="0">---Chọn---</option>
                                        <?php foreach ($nhienlieus as $nhienlieu) {
                                            echo '<option value="' . $nhienlieu['id'] . '">' . $nhienlieu['tennhienlieu'] . '</option>';
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="">Hộp số</label>
                                    <select class="form-control" id="hopso" style="width: 100%;">
                                        <option selected="selected" value="0">---Chọn---</option>
                                        <?php foreach ($hopsos as $hopso) {
                                            echo '<option value="' . $hopso['id'] . '">' . $hopso['tenhopso'] . '</option>';
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="">Chỗ ngồi</label>
                                    <select class="form-control" id="chongoi" style="width: 100%;">
                                        <option selected="selected" value="0">---Chọn---</option>
                                        <?php foreach ($chongois as $chongoi) {
                                            echo '<option value="' . $chongoi['id'] . '">' . $chongoi['tenchongoi'] . '</option>';
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="">Xuất xứ</label>
                                    <select class="form-control" id="xuatxu" style="width: 100%;">
                                        <option selected="selected" value="0">---Chọn---</option>
                                        <?php foreach ($xuatxus as $xuatxu) {
                                            echo '<option value="' . $xuatxu['id'] . '">' . $xuatxu['ten'] . '</option>';
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="">Màu sắc</label>
                                    <select class="form-control" id="mausac" style="width: 100%;">
                                        <option selected="selected" value="0">---Chọn---</option>
                                        <?php foreach ($mausacs as $mausac) {
                                            echo '<option value="' . $mausac['id'] . '">' . $mausac['ten'] . '</option>';
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="">Năm sản xuất</label>
                                    <select class="form-control" id="namsanxuat" style="width: 100%;">
                                        <option selected="selected" value="0">---Chọn---</option>
                                        <?php foreach ($namsanxuats as $namsanxuat) {
                                            echo '<option value="' . $namsanxuat['id'] . '">' . $namsanxuat['ten'] . '</option>';
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label for="">Chủ đầu tư</label>
                                            <select class="form-control" id="chudautu" style="width: 100%;">
                                                <option selected="selected" value="0">---Chọn---</option>
                                                <?php foreach ($chudautus as $chudautu) {
                                                    echo '<option value="' . $chudautu['id'] . '">' . $chudautu['hoten'] . '</option>';
                                                } ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="">Tiền đầu tư</label>
                                            <input type="text" id="tiendautu" class="form-control" value=""
                                                   data-type="currency">
                                        </div>
                                        <div class="form-group col-sm-6 text-center">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="taidautu" class="form-control">
                                                <label for="taidautu">Tái đầu tư</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <button id="themdautu" type="button" class="btn btn-block btn-outline-primary">Đầu tư</button>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <table class="table table-striped table-bordered table-hover" id="dsdautu"
                                                   style="width:100%">
                                                <thead class="bg-success">
                                                <tr>
                                                    <th class="text-center">Id</th>
                                                    <th>Họ tên</th>
                                                    <th>Vốn</th>
                                                    <th>Tái đầu tư</th>
                                                </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6 text-center">
                                    <div class="kv-avatar justify-content-center">
                                        <div class="file-loading">
                                            <input id="hinhxe" name="hinhxe[]" type="file" multiple>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary float-right m-1" id="them">Thêm
                                        </button>
                                        <button type="button" class="btn btn-warning float-right m-1" id="sua">Sửa
                                        </button>
                                        <button type="button" class="btn btn-danger float-right m-1" id="xoa">Xóa
                                        </button>
                                        <button type="button" class="btn btn-dark float-left m-1" id="huy">Hủy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Danh sách nhập xe</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-striped table-bordered table-hover" id="danhsach"
                                   style="width:100%">
                                <thead class="bg-success">
                                <tr>
                                    <th class="text-center">Id</th>
                                    <th>Tên nhập xe</th>
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

    <div class="modal fade" id="modalchudautu">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title">Danh sách chủ đầu tư</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form form-vertical" method="post"
                          enctype="multipart/form-data">
                        <div class="row">
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
                    <button type="button" class="btn btn-primary" id="suanhanvien">Save changes</button>
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
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>

<!-- my design js -->
<script src="themes/js/selfjs.js"></script>
<!-- Toastr -->
<script src="manager/plugins/toastr/toastr.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
<!-- Select2 -->
<script src="manager/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="manager/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="manager/plugins/moment/moment.min.js"></script>
<script src="manager/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="manager/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="manager/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="manager/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="manager/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- File input -->
<script src="themes/fileinput/js/fileinput.js"></script>
<script src="themes/fileinput/themes/explorer-fas/theme.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("input[data-type='currency']").on({
            keyup: function () {
                formatCurrency($(this));
            },
            blur: function () {
                formatCurrency($(this), "blur");
            }
        });
        //Date range picker
        $('#ngaynhap').datetimepicker({
            defaultDate: new Date(),
            format: 'DD-MM-YYYY'
        });

        $('#hangxe').on('change', function () {
            var id = $(this).val();
            if (id && id != "0") {
                $.ajax({
                    type: 'POST',
                    url: 'manager.php?controller=nhapxe&action=getdongxe',
                    data: {
                        id: id
                    },
                    success: function (html) {
                        $('#dongxe').html(html);
                    }
                });
            } else {
                $('#dongxe').html('<option selected="selected" value="0">---Chọn---</option>');
            }
        });

        dsdautu();

        //Get danh sach dau tu
        function dsdautu() {
            $('#dsdautu').DataTable().destroy();
            $('#dsdautu').DataTable({
                "paging": false,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                order: [[0, 'desc']],
                ajax: {
                    type: 'POST',
                    url: "manager.php?controller=nhapxe&action=dsdautu",
                    data: {
                        idxe: $("#id").val()
                    },
                    dataSrc: ''
                },
                columns: [
                    {data: "id", className: "text-center", width: '20%', visible: false},
                    {data: "hoten", className: "text-center", width: '20%'},
                    {data: "tiendautu", className: "text-center", width: '20%'},
                    {data: "taidautu", className: "text-center", width: '15%'}
                ]
            });
        }

        $("#hinhxe").fileinput({
            showCaption: false,
            showRemove: true,
            showUpload: false,
            showPreview: true,
            theme: 'explorer-fas'
        });
    });

</script>
</body>
</html>
