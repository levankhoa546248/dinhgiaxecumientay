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
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/css/fileinput.min.css" media="all"
      rel="stylesheet" type="text/css"/>
<link href="themes/fileinput/css/fileinput.min.css" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" rel="stylesheet">
<link href="themes/fileinput/themes/explorer-fas/theme.css" rel="stylesheet">
<!-- Self css -->
<link rel="stylesheet" href="manager/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="manager/plugins/summernote/summernote-bs4.css">
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
                            <li class="breadcrumb-item"><a href="manager.php?controller=home&action=index">Home</a></li>
                            <li class="breadcrumb-item active">Nhập xe</li>
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
                                    <input type="text" id="chiphimua" class="form-control text-right" value=""
                                           data-type="currency">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="">Chi phí bán</label>
                                    <input type="text" id="chiphiban" class="form-control text-right" value=""
                                           data-type="currency">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="">Giá vốn</label>
                                    <input type="text" id="giavon" class="form-control text-right" value=""
                                           data-type="currency">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="">Giá bán</label>
                                    <input type="text" id="giaban" class="form-control text-right" value=""
                                           data-type="currency">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="">Giá hiển thị</label>
                                    <input type="text" id="giahienthi" class="form-control text-right" value=""
                                           data-type="currency">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="">Số lượng</label>
                                    <input type="number" id="soluong" class="form-control" value="1">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Ngày nhập</label>
                                    <div class="input-group date" id="ngaynhap" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                               data-target="#ngaynhap" data-toggle="datetimepicker"/>
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
                                    <label>Tiêu đề</label>
                                    <textarea class="form-control" id="tieude" rows="3"
                                              placeholder="Nhập tiêu để bài đăng"></textarea>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Mô tả</label>
                                    <textarea class="form-control" id="mota" rows="3"
                                              placeholder="Mô tả tóm tắt nội dung bài đăng"></textarea>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label>Chi tiết</label>
                                    <textarea class="form-control" id="chitiet" placeholder="Nhập chi tiết bài đăng"
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
                                        <div class="form-group col-sm-6 d-inline"
                                             style="align-self: flex-end;text-align: center;">
                                            <label for="">&emsp;</label>
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="taidautu">
                                                <label for="taidautu">Tái đầu tư
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="">Tiền đầu tư</label>
                                            <input type="text" id="tiendautu" class="form-control" value=""
                                                   data-type="currency">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="">&emsp;</label>
                                            <button id="themdautu" type="button"
                                                    class="btn btn-block btn-outline-primary">Đầu tư
                                            </button>
                                        </div>

                                        <div class="form-group col-sm-12">
                                            <table class="table table-striped table-bordered table-hover"
                                                   id="dsvondautu"
                                                   style="width:100%">
                                                <thead class="bg-success">
                                                <tr>
                                                    <th class="text-center">Id</th>
                                                    <th class="text-center">Id chủ đầu tư</th>
                                                    <th>Họ tên</th>
                                                    <th>Vốn</th>
                                                    <th></th>
                                                    <th>Tái đầu tư</th>
                                                    <th class="text-center"></th>
                                                </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6 text-center">
                                    <div class="kv-avatar justify-content-center">
                                        <div class="file-loading">
                                            <input id="hinhxes" name="hinhxes[]" type="file" multiple>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary m-1" id="capnhat">Cập nhật</button>
                                        <button type="button" class="btn btn-warning m-1" id="banxe">Bán xe</button>
                                        <button type="button" class="btn btn-danger m-1" id="xoa">Xóa</button>
                                        <button type="button" class="btn btn-dark m-1" id="huy">Hủy</button>
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
                            <div class="row">
                                <div class="form-group col-sm-3">
                                    <div class="input-group date" id="tungay" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                               value="<?php echo date('Y-01-01'); ?>"
                                               data-target="#tungay" data-toggle="datetimepicker"/>
                                        <div class="input-group-append" data-target="#tungay"
                                             data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-3">
                                    <div class="input-group date" id="denngay" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                               value="<?php echo date('Y-m-d'); ?>"
                                               data-target="#denngay" data-toggle="datetimepicker"/>
                                        <div class="input-group-append" data-target="#denngay"
                                             data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-2">
                                    <select class="form-control" id="dshangxe" style="width: 100%;">
                                        <option selected="selected" value="0">Chọn hãng xe</option>
                                        <?php foreach ($hangxes as $hangxe) {
                                            echo '<option value="' . $hangxe['id'] . '">' . $hangxe['tenhang'] . '</option>';
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2">
                                    <select class="form-control" id="trangthai" style="width: 100%;">
                                        <option selected="selected" value="0">Chưa bán</option>
                                        <option value="1">Đã bán</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2">
                                    <button id="xemdanhsach" type="button"
                                            class="btn btn-block btn-outline-primary">Xem danh sách
                                    </button>
                                </div>
                            </div>
                            <table class="table table-striped table-bordered table-hover" id="dsxe"
                                   style="width:100%">
                                <thead class="bg-success">
                                <tr>
                                    <th class="text-center">Id</th>
                                    <th>Tên xe</th>
                                    <th>Giá bán</th>
                                    <th>Ngày nhập</th>
                                    <th>Ngày bán</th>
                                    <th>Trạng thái</th>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/fileinput.min.js"></script>
<script src="themes/fileinput/js/fileinput.js"></script>
<script src="themes/fileinput/themes/explorer-fas/theme.js"></script>
<script src="manager/plugins/summernote/summernote-bs4.min.js"></script>
<!-- jAlert -->
<script src="themes/js/jquery.alerts.js" type="text/javascript"></script>
<!-- blockUI -->
<script type="text/javascript" src="themes/jquery/blockUI/jquery.blockUI.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#reservation').daterangepicker();

        $('#chitiet').summernote();

        $("input[data-type='currency']").on({
            keyup: function () {
                formatCurrency($(this));
            },
            blur: function () {
                formatCurrency($(this), "blur");
            }
        });
        //Date range picker
        $('#tungay').datetimepicker({
            defaultDate: new Date(),
            format: 'YYYY-MM-DD'
        });
        //Date range picker
        $('#denngay').datetimepicker({
            defaultDate: new Date(),
            format: 'YYYY-MM-DD'
        });
        //Date range picker
        $('#ngaynhap').datetimepicker({
            defaultDate: new Date(),
            format: 'YYYY-MM-DD'
        });

        $('#hangxe').on('change', function () {
            var id = $(this).val();
            if (id && id != "0") {
                $.ajax({
                    type: 'POST',
                    url: 'manager.php?controller=xe&action=getdongxe',
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

        dsvondautu(0);

        //Get danh sach dau tu
        function dsvondautu(idxe) {
            $('#dsvondautu').DataTable().destroy();
            $('#dsvondautu').DataTable({
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
                    url: "manager.php?controller=xe&action=dsvondautu",
                    data: {
                        idxe: idxe
                    },
                    dataSrc: ''
                },
                columns: [
                    {data: "id", className: "text-center", width: '20%', visible: false},
                    {data: "idchudautu", className: "text-center", width: '20%', visible: false},
                    {data: "hoten", className: "text-left", width: '20%'},
                    {
                        data: "tiendautu", className: "text-right", width: '20%',
                        render: $.fn.dataTable.render.number(',', '.', 0)
                    },
                    {data: "taidautu", visible: false},
                    {
                        data: "taidautushow",
                        render: function (data) {
                            if (data === "1") {
                                return '<i class="far fa-check-square"></i>';
                            } else {
                                return '<i class="far fa-square"></i>';
                            }
                        },
                        className: "text-center",
                        width: '20%'
                    },
                    {
                        data: '', className: "text-center", width: '5%', render: function () {
                            return '<button class="btn btn-danger btn-sm xoadautu"><i class="fas fa-trash"></i></button>';
                        }
                    }
                ]
            });
        }

        function addrowdsvondautu(data) {
            $('#dsvondautu').DataTable().destroy();
            $('#dsvondautu').DataTable({
                "paging": false,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                order: [[0, 'desc']],
                columns: [
                    {data: "id", className: "text-center", width: '20%', visible: false},
                    {data: "idchudautu", className: "text-center", width: '20%', visible: false},
                    {data: "hoten", className: "text-left", width: '20%'},
                    {
                        data: "tiendautu", className: "text-right", width: '20%'
                    },
                    {data: "taidautu", visible: false},
                    {
                        data: "taidautushow",
                        className: "text-center",
                        width: '20%'
                    },
                    {
                        data: '', className: "text-center", width: '5%', render: function () {
                            return '<button class="btn btn-danger btn-sm xoadautu"><i class="fas fa-trash"></i></button>';
                        }
                    }
                ]
            }).rows.add(data).draw();
            // table.rows.add(data).draw();
        }

        $("#hinhxes").fileinput({
            showCaption: false,
            showRemove: true,
            showUpload: false,
            showPreview: true,
            theme: 'explorer-fas'
        });

        $("#themdautu").click(function (e) {
            var idchudautu = $("#chudautu").val();

            if (idchudautu == "0") {
                return toastr.warning('Chưa chọn người đầu tư');
            }
            var chudautu = $("#chudautu option:selected").text();
            var tiendautu = $('#tiendautu').val();
            if (checkIf(tiendautu)) {
                return toastr.warning('Chưa nhập tiền đầu tư');
            }
            var taidautu = $('#taidautu').is(":checked") ? "1" : "0";
            if (taidautu == "1") {
                $.ajax({
                    url: "manager.php?controller=xe&action=kiemtrasodu",
                    type: "POST",
                    data: {
                        idchudautu: idchudautu
                    },
                    success: function (sodu) {
                        if (StringToNumber(sodu) > StringToNumber(tiendautu)) {
                            var objnhadautu = [{
                                id: 0,
                                idchudautu: idchudautu,
                                hoten: chudautu,
                                tiendautu: tiendautu,
                                taidautu: taidautu,
                                taidautushow: '<i class="far fa-check-square"></i>'
                            }];
                            addrowdsvondautu(objnhadautu);
                            emptydautu();
                        } else {
                            return toastr.warning("Số dư không đủ để tái đầu tư");
                        }
                    }
                });
            } else {
                var objnhadautu = [{
                    id: 0,
                    idchudautu: idchudautu,
                    hoten: chudautu,
                    tiendautu: tiendautu,
                    taidautu: taidautu,
                    taidautushow: '<i class="far fa-square"></i>'
                }];
                addrowdsvondautu(objnhadautu);
                emptydautu();
            }
        });

        function emptydautu() {
            $("#chudautu").val("0");
            $('#tiendautu').val("");
            $('#taidautu').prop("checked", false);
        }

        $("#capnhat").click(function (e) {
            var dataform = new FormData();
            var lengthimages = document.getElementById('hinhxes').files.length;
            for (var index = 0; index < lengthimages; index++) {
                dataform.append("hinhxes[]", document.getElementById('hinhxes').files[index]);
            }

            var dsvondautu = $('#dsvondautu').DataTable().rows().data();
            var coutrows = dsvondautu.length;
            for (var row = 0; row < coutrows; row++) {
                var obj = {
                    id: dsvondautu[row]["id"],
                    idchudautu: dsvondautu[row]["idchudautu"],
                    tiendautu: StringToNumber(dsvondautu[row]["tiendautu"]),
                    taidautu: dsvondautu[row]["taidautu"]
                };
                dataform.append("vondautus[]", JSON.stringify(obj));
            }
            var id = $("#id").val();
            dataform.append("id", id);
            var tenxe = $("#tenxe").val();
            dataform.append("tenxe", tenxe);
            var chiphimua = $("#chiphimua").val();
            dataform.append("chiphimua", StringToNumber(chiphimua));
            var chiphiban = $("#chiphiban").val();
            dataform.append("chiphiban", StringToNumber(chiphiban));
            var giavon = $("#giavon").val();
            dataform.append("giavon", StringToNumber(giavon));
            var giahienthi = $("#giahienthi").val();
            dataform.append("giahienthi", StringToNumber(giahienthi));
            var giaban = $("#giaban").val();
            dataform.append("giaban", StringToNumber(giaban));
            var soluong = $("#soluong").val();
            dataform.append("soluong", soluong);
            var ngaynhap = $("#ngaynhap").data().date;
            dataform.append("ngaynhap", ngaynhap);
            var hangxe = $("#hangxe").val();
            dataform.append("hangxe", hangxe);
            var dongxe = $("#dongxe").val();
            dataform.append("dongxe", dongxe);
            var nhienlieu = $("#nhienlieu").val();
            dataform.append("nhienlieu", nhienlieu);
            var hopso = $("#hopso").val();
            dataform.append("hopso", hopso);
            var chongoi = $("#chongoi").val();
            dataform.append("chongoi", chongoi);
            var xuatxu = $("#xuatxu").val();
            dataform.append("xuatxu", xuatxu);
            var mausac = $("#mausac").val();
            dataform.append("mausac", mausac);
            var namsanxuat = $("#namsanxuat").val();
            dataform.append("namsanxuat", namsanxuat);
            var tieude = $("#tieude").val();
            dataform.append("tieude", tieude);
            var mota = $("#mota").val();
            dataform.append("mota", mota);
            var chitiet = $("#chitiet").summernote("code");
            dataform.append("chitiet", chitiet);
            $.blockUI({
                message: '<h4>Đang load dữ liệu</h4>',
            });
            $.ajax({
                url: "manager.php?controller=xe&action=capnhatxe",
                type: "POST",
                data: dataform,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response > 0) {
                        toastr.success('Cập nhật thành công');
                        dsxe($("#ngaynhap").data().date, $("#ngaynhap").data().date, $("#dshangxe").val());
                        disabledinput(true);
                    } else if (response = -1) {
                        toastr.warning('Cập nhật không thành công');
                    }
                    $.unblockUI();
                }
            });
        });

        $('#dsvondautu').on('click', 'button.xoadautu', function (e) {
            var $row = $(this).closest('tr');
            var data = $('#dsvondautu').DataTable().row($row).data();
            var id = data.id;
            if (id == 0) {
                $('#dsvondautu').DataTable()
                    .row($(this).parents('tr'))
                    .remove()
                    .draw();
            } else {
                var idxe = $("#id").val();
                jConfirm('Bạn chắc chắn xóa vốn đầu tư này?', 'Thông báo', function (e) {
                    if (e == true) {
                        $.ajax({
                            url: "manager.php?controller=xe&action=xoavondautu",
                            type: "POST",
                            data: {
                                id: id
                            },
                            success: function (response) {
                                if (response > 0) {
                                    toastr.success('Xóa thành công');
                                    thongtinvon(idxe);
                                } else if (response = -1) {
                                    toastr.warning('Xóa không thành công');
                                }
                            }
                        });
                    }
                });
            }

        });

        //Get danh sach dau tu
        function dsxe(tungay, denngay, hangxe, trangthai) {
            $('#dsxe').DataTable().destroy();
            $('#dsxe').DataTable({
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
                    url: "manager.php?controller=xe&action=laydanhsach",
                    data: {
                        tungay: tungay,
                        denngay: denngay,
                        hangxe: hangxe,
                        trangthai: trangthai
                    },
                    dataSrc: ''
                },
                columns: [
                    {data: "id", className: "text-center", width: '10%'},
                    {data: "tenxe", className: "text-left", width: '25%'},
                    {
                        data: "giaban", className: "text-right", width: '15%',
                        render: $.fn.dataTable.render.number(',', '.', 0)
                    },
                    {data: "ngaynhap", className: "text-right", width: '10%'},
                    {data: "ngayban", className: "text-right", width: '10%'},
                    {data: "trangthai", className: "text-center", width: '10%'}
                ]
            });
        }

        dsxe($("#tungay").data().date, $("#denngay").data().date, "0", "0");

        $("#xemdanhsach").click(function (e) {
            var tungay = $("#tungay").data().date;
            var denngay = $("#denngay").data().date;
            var hangxe = $("#dshangxe").val();
            var trangthai = $("#trangthai").val();
            dsxe(tungay, denngay, hangxe, trangthai);
        });

        $("#huy").click(function (e) {
            disabledinput(false);
            emptyinput();
        });

        function disabledinput(bool) {
            $("#tenxe").prop('disabled', bool);
            $("#chiphimua").prop('disabled', bool);
            $("#chiphiban").prop('disabled', bool);
            $("#giavon").prop('disabled', bool);
            $("#giahienthi").prop('disabled', bool);
            $("#giaban").prop('disabled', bool);
            $("#soluong").prop('disabled', bool);
            bool ? $('#ngaynhap').data("datetimepicker").disable() : $('#ngaynhap').data("datetimepicker").enable();
            $("#hangxe").prop('disabled', bool);
            $("#dongxe").prop('disabled', bool);
            $("#nhienlieu").prop('disabled', bool);
            $("#hopso").prop('disabled', bool);
            $("#chongoi").prop('disabled', bool);
            $("#xuatxu").prop('disabled', bool);
            $("#mausac").prop('disabled', bool);
            $("#namsanxuat").prop('disabled', bool);
            $("#tieude").prop('disabled', bool);
            $("#mota").prop('disabled', bool);
            $('#chitiet').summernote(bool ? 'disable' : 'enable');
            $("#chudautu").prop('disabled', bool);
            $("#taidautu").prop('disabled', bool);
            $("#tiendautu").prop('disabled', bool);
            $("#themdautu").prop('disabled', bool);
            // $('#hinhxes').fileinput(bool ? 'disable' : 'enable');
            $("#capnhat").prop('disabled', bool);
        }

        function emptyinput() {
            $("#tenxe").val("");
            $("#chiphimua").val("");
            $("#chiphiban").val("");
            $("#giavon").val("");
            $("#giahienthi").val("");
            $("#giaban").val("");
            $("#soluong").val("1");
            $('#ngaynhap').data("datetimepicker").date(new Date());
            $("#hangxe").val("0");
            $("#dongxe").val("0");
            $("#nhienlieu").val("0");
            $("#hopso").val("0");
            $("#chongoi").val("0");
            $("#xuatxu").val("0");
            $("#mausac").val("0");
            $("#namsanxuat").val("0");
            $("#tieude").val("");
            $("#mota").val("");
            $('#chitiet').summernote('reset');
            $("#chudautu").val("0");
            $("#taidautu").prop('checked', false);
            $("#tiendautu").val("");
            $('#hinhxes').fileinput('clear');
            thongtinvon("0");
        }

        $("#xoa").click(function (e) {
            var id = $("#id").val();
            jConfirm('Bạn chắc chắn xóa xe này?', 'Thông báo', function (e) {
                if (e == true) {
                    $.blockUI({
                        message: '<h4>Đang load dữ liệu</h4>',
                    });
                    $.ajax({
                        url: "manager.php?controller=xe&action=xoa",
                        type: "POST",
                        data: {
                            id: id
                        },
                        success: function (response) {
                            if (response > 0) {
                                toastr.success('Xóa thành công');
                                dsxe($("#tungay").data().date, $("#denngay").data().date, $("#dshangxe").val());
                                disabledinput(false);
                                emptyinput();
                            } else if (response = -1) {
                                toastr.warning('Xóa không thành công');
                            }
                            $.unblockUI();
                        }
                    });
                }
            });
        });
        //Click row table dsxe
        $('#dsxe tbody').on('click', 'tr', function () {
            var row = $('#dsxe').DataTable().row(this).data();
            var id = row.id;
            var tenxe = row.tenxe;
            var giaban = row.giaban;
            var ngaynhap = row.ngaynhap;
            $("#id").val(id);
            $("#tenxe").val(tenxe);
            $("#giaban").val(formatNumber(giaban));
            $('#ngaynhap').data("datetimepicker").date(ngaynhap);
            $.blockUI({
                message: '<h4>Đang load dữ liệu</h4>',
            });
            thongtinxe(id);
            thongtinvon(id);
            thongtinhinhxe(id);
        });

        function thongtinxe(idxe) {
            $.ajax({
                url: "manager.php?controller=xe&action=thongtinxe",
                type: "POST",
                data: {
                    id: idxe
                },
                success: function (data) {
                    var xe = JSON.parse(data);
                    $("#tenxe").val(xe.tenxe);
                    $("#chiphimua").val(formatNumber(xe.chiphimua));
                    $("#chiphiban").val(formatNumber(xe.chiphiban));
                    $("#giavon").val(formatNumber(xe.giavon));
                    $("#giahienthi").val(formatNumber(xe.giahienthi));
                    $("#giaban").val(formatNumber(xe.giaban));
                    $("#soluong").val(xe.soluong);
                    $('#ngaynhap').data("datetimepicker").date(xe.ngaynhap);
                    $("#hangxe").val(xe.hangxe);
                    $("#dongxe").val(xe.dongxe);
                    $("#nhienlieu").val(xe.nhienlieu);
                    $("#hopso").val(xe.hopso);
                    $("#chongoi").val(xe.chongoi);
                    $("#xuatxu").val(xe.xuatxu);
                    $("#mausac").val(xe.mausac);
                    $("#namsanxuat").val(xe.namsanxuat);
                    $("#tieude").val(xe.tieude);
                    $("#mota").val(xe.mota);
                    $("#chitiet").summernote('code', xe.chitiet);
                }
            });
        }

        function thongtinvon(idxe) {
            $('#dsvondautu').DataTable().destroy();
            $('#dsvondautu').DataTable({
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
                    url: "manager.php?controller=xe&action=thongtinvon",
                    data: {
                        id: idxe
                    },
                    dataSrc: ''
                },
                columns: [
                    {data: "id", className: "text-center", width: '20%', visible: false},
                    {data: "idchudautu", className: "text-center", width: '20%', visible: false},
                    {data: "hoten", className: "text-left", width: '20%'},
                    {
                        data: "tiendautu", className: "text-right", width: '20%',
                        render: $.fn.dataTable.render.number(',', '.', 0)
                    },
                    {data: "taidautu", visible: false},
                    {
                        data: "taidautushow",
                        render: function (data) {
                            if (data === "1") {
                                return '<i class="far fa-check-square"></i>';
                            } else {
                                return '<i class="far fa-square"></i>';
                            }
                        },
                        className: "text-center",
                        width: '20%'
                    },
                    {
                        data: '', className: "text-center", width: '5%', render: function () {
                            return '<button class="btn btn-danger btn-sm xoadautu"><i class="fas fa-trash"></i></button>';
                        }
                    }
                ]
            });
        }

        function thongtinhinhxe(idxe) {
            $.ajax({
                url: "manager.php?controller=xe&action=thongtinhinhxe",
                type: "POST",
                data: {
                    id: idxe
                },
                success: function (data) {
                    var ha = JSON.parse(data);
                    var length = ha.length;
                    if (length > 0) {
                        var pre = [];
                        for (var i = 0; i < length; i++) {
                            pre.push("<img class='kv-preview-data file-preview-image' src='" + ha[i].images + "'>");
                        }
                        $('#hinhxes').fileinput('clear');
                        $('#hinhxes').fileinput('destroy');
                        $("#hinhxes").fileinput({
                            showCaption: false,
                            showRemove: true,
                            showUpload: false,
                            showPreview: true,
                            theme: 'explorer-fas',
                            initialPreview: pre
                        });
                    }
                    $.unblockUI();
                }
            });
        }

        $("#giaban").keyup(function() {
            $("#giahienthi").val($("#giaban").val());
        });
    });

</script>
</body>
</html>
