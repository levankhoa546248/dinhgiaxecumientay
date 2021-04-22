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
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="manager.php?controller=home&action=index">Home</a></li>
                            <li class="breadcrumb-item active">Danh sách</li>
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
                                    <th></th>
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
                    {
                        data: 'id', className: "text-center", width: '5%', render: function () {
                            return '<button class="btn btn-info btn-sm sua"><i class="far fa-edit"></i></button>';
                        }
                    },
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

        $('#dsxe').on('click', 'button.sua', function (e) {
            var $row = $(this).closest('tr');
            var data = $('#dsxe').DataTable().row($row).data();
            var id = data.id;
            location.href = "manager.php?controller=xe&action=banxe&idxe=" + id;
        });
    });

</script>
</body>
</html>
