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
                                    <label for="">Số lượng</label>
                                    <input type="number" id="soluong" class="form-control" value="1">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Ngày bán</label>
                                    <div class="input-group date" id="ngayban" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                               data-target="#ngayban" data-toggle="datetimepicker"/>
                                        <div class="input-group-append" data-target="#ngayban"
                                             data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <div class="row">
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
                                                </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-warning m-1" id="banxe">Bán xe</button>
                                    </div>
                                </div>
                            </div>
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
        $('#ngayban').datetimepicker({
            defaultDate: new Date(),
            format: 'YYYY-MM-DD'
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
                    $("#giaban").val(formatNumber(xe.giaban));
                    $("#soluong").val(xe.soluong);
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
                    }
                ]
            });
        }

        //bán xe
        $("#banxe").click(function (e) {
            var dataform = new FormData();
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
            var giaban = $("#giaban").val();
            dataform.append("giaban", StringToNumber(giaban));
            var soluong = $("#soluong").val();
            dataform.append("soluong", soluong);
            var ngayban = $("#ngayban").data().date;
            dataform.append("ngayban", ngayban);
            jConfirm('Bạn chắc chắn bán xe này?', 'Thông báo', function (e) {
                if (e == true) {
                    $.blockUI({
                        message: '<h4>Đang load dữ liệu</h4>',
                    });
                    $.ajax({
                        url: "manager.php?controller=xe&action=capnhatban",
                        type: "POST",
                        data: dataform,
                        contentType: false,
                        processData: false,
                        success: function (response) {
                            if (response > 0) {
                                toastr.success('Bán xe thành công');
                                disabledinput(true);
                            } else if (response = -1) {
                                toastr.warning('Bán xe không thành công');
                            }
                            $.unblockUI();
                        }
                    });
                }
            });
        });

        loadthongtinxe();
        function loadthongtinxe() {
            var id = <?php echo $idxe; ?>;
            $("#id").val(id);
            thongtinxe(id);
            thongtinvon(id);
        }

        function disabledinput(bool) {
            $("#tenxe").prop('disabled', bool);
            $("#chiphimua").prop('disabled', bool);
            $("#chiphiban").prop('disabled', bool);
            $("#giavon").prop('disabled', bool);
            $("#giaban").prop('disabled', bool);
            $("#soluong").prop('disabled', bool);
            bool ? $('#ngayban').data("datetimepicker").disable() : $('#ngayban').data("datetimepicker").enable();
            $("#banxe").prop('disabled', bool);
        }
    });

</script>
</body>
</html>
