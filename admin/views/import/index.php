<?php require('admin/views/shared/header.php'); ?>
<link rel="stylesheet" type="text/css" media="screen"
      href="admin/themes/css/selfcss.css"/>
<link rel="stylesheet" type="text/css" media="screen"
      href="admin/themes/combogrid/css/smoothness/jquery-ui-1.10.1.custom.css"/>
<script type="text/javascript" src="admin/themes/combogrid/jquery/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="admin/themes/combogrid/jquery/jquery-ui-1.10.1.custom.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="admin/themes/combogrid/css/jquery-ui-redmond.1.9.1.css"/>
<link rel="stylesheet" type="text/css" media="screen"
      href="admin/themes/combogrid/css/smoothness/jquery.ui.combogrid.css"/>
<script type="text/javascript" src="admin/themes/combogrid/plugin/jquery.ui.combogrid-1.6.4.js"></script>
<script type="text/javascript" src="http://malsup.github.io/jquery.blockUI.js"></script>

<div class="pull-right col-sm-8" style="padding-right: 0px; margin-top: 5px; width: 60%">
    <table class="table table-striped table-bordered table-hover small" id="tblCoupon" style="width:100%">
        <caption class="bg-primary text-center">Danh sách phiếu nhập</caption>
        <thead class="bg-primary">
        <tr>
            <th class="text-center" width="15%">Id</th>
            <th class="text-left">Tên phiếu</th>
            <th class="text-left">Ngày nhập</th>
            <th class="text-left">Nhân viên id</th>
            <th class="text-left">Nhân viên</th>
            <th class="text-left">Is Import</th>
            <th class="text-left">Trạng thái</th>
            <th class="text-left"><i class="fa fa-gears"></i></th>
        </tr>
        </thead>
    </table>
</div>
<div class="pull-left col-sm-4" style="padding-left: 0px; margin-top: 5px; width: 40%">
    <div class="small form-horizontal">
        <div class="form-group">
            <div class="col-sm-3">
                Từ ngày
            </div>
            <div class="col-sm-4">
                <input name="toDate" type="date" value="<?php echo date('Y-m-d'); ?>" class="form-control input-sm"
                       id="toDate"/>
            </div>
            <label class="col-sm-3 control-label pull-right" style="padding-left: 0px"><input type="checkbox"
                                                                                              id="checkImport"/> Đã nhập</label>
        </div>
        <div class="form-group">
            <div class="col-sm-3">
                Đến ngày
            </div>
            <div class="col-sm-4">
                <input name="fromDate" type="date" value="<?php echo date('Y-m-d'); ?>" class="form-control input-sm"
                       id="fromDate"/>
            </div>
            <div class="col-sm-4 pull-right">
                <button class="btnself btn-success pull-right"
                        id="btnFreshCoupon"><i class="glyphicon glyphicon-refresh"></i> Làm mới
                </button>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <b class="small">Tạo phiếu nhập</b>
        </div>
        <div class="panel-body small form-horizontal" style="padding-bottom: inherit">
            <div>
                <input name="couponid" type="hidden" class="form-control" id="couponid"/>
                <input name="isimport" type="hidden" class="form-control" id="isimport"/>
            </div>
            <div class="form-group">
                <label for="couponname" class="col-sm-4 control-label">Tên phiếu</label>
                <div class="col-sm-8">
                    <input name="couponname" type="text" class="form-control input-sm"
                           id="couponname" placeholder="Tên phiếu gợi nhớ"/>
                </div>
            </div>
            <div class="form-group">
                <label for="coupondate" class="col-sm-4 control-label">Ngày nhập</label>
                <div class="col-sm-8">
                    <input name="coupondate" type="date" value="<?php echo date('Y-m-d'); ?>"
                           class="form-control input-sm"
                           id="coupondate" placeholder="Ngày nhập"/>
                </div>
            </div>
            <div class="form-group">
                <label for="couponemployee" class="col-sm-4 control-label">Nhân viên</label>
                <div class="col-sm-8">
                    <input name="couponemployeeid" type="hidden" value="<?php echo $employee["0"]["id"]; ?>"
                           class="form-control input-sm"
                           id="couponemployeeid"/>
                    <input name="couponemployeename" type="text" value="<?php echo $employee["0"]["name"]; ?>"
                           class="form-control input-sm"
                           id="couponemployeename" disabled/>
                </div>
            </div>
            <div class="form-group pull-right">
                <div class="col-sm-1"></div>
                <div class="pull-right" style="padding-right: 15px">
                    <button class="btnself btn-warning" type="button" id="btnReport">
                        <i class="glyphicon glyphicon-book"></i> Nhận tiền
                    </button>
                    <button class="btnself btn-danger" type="button" id="btnCancel">
                        <i class="glyphicon glyphicon-ban-circle"></i> Hủy phiếu
                    </button>
                    <button class="btnself btn-warning" type="button" id="btnIsImport">
                        <i class="glyphicon glyphicon-open-file"></i> Nhập kho
                    </button>
                    <button class="btnself btn-primary" type="button" id="btnUpdateCoupon"><i
                                class="glyphicon glyphicon-plus"></i> Cập nhật
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<table class="table table-striped table-bordered table-hover small" id="tblImport" style="width:100%">
    <thead class="bg-info">
    <tr>
        <th class="text-center" width="5%">Id</th>
        <th class="text-left" width="15%">Tên hàng</th>
        <th class="text-left" width="8%">Màu sắc</th>
        <th class="text-left" width="8%">Kích thước</th>
        <th class="text-left" width="8%">Số lượng</th>
        <th class="text-left">Giá vốn</th>
        <th class="text-left">Thành tiền</th>
        <th class="text-left">Giá lẻ</th>
        <th class="text-left">Giá sỉ</th>
        <th class="text-left">Giá VIP</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            <input name="goodsid" type="text" class="form-control input-sm" id="goodsid" disabled required=""/>
        </td>
        <td>
            <input name="goodsname" type="text" class="form-control input-sm" id="goodsname"
                   placeholder="Nhập tên hàng hóa" disabled required=""/>
        </td>
        <td>
            <input name="goodscolor" type="text" class="form-control input-sm" id="goodscolor"
                   placeholder="Màu sắc" disabled required=""/>
        </td>
        <td>
            <input name="goodssize" type="text" class="form-control input-sm" id="goodssize"
                   placeholder="Kích thước" disabled required=""/>
        </td>
        <td>
            <input name="goodsamount" type="number" class="form-control input-sm text-center" id="goodsamount"
                   placeholder="Số lượng" disabled required=""/>
        </td>
        <td>
            <input name="goodsprice" type="text" class="form-control input-sm text-right" id="goodsprice"
                   placeholder="Giá vốn" data-type="currency" disabled required=""/>
        </td>
        <td>
            <input name="goodstotal" type="text" class="form-control input-sm text-right" id="goodstotal"
                   placeholder="Thành tiền" data-type="currency" disabled required=""/>
        </td>
        <td>
            <input name="goodsretail" type="text" class="form-control input-sm text-right" id="goodsretail"
                   placeholder="Giá lẻ" data-type="currency" disabled required=""/>
        </td>
        <td>
            <input name="goodswholesale" type="text" class="form-control input-sm text-right" id="goodswholesale"
                   placeholder="Giá sỉ" data-type="currency" disabled required=""/>
        </td>
        <td>
            <input name="goodspricevip" type="text" class="form-control input-sm text-right" id="goodspricevip"
                   placeholder="Giá VIP" data-type="currency" disabled required=""/>
        </td>
    </tr>
    </tbody>
</table>
<table class="table table-striped table-bordered table-hover small" id="tblCouponDetail" style="width:100%">
    <thead class="bg-primary">
    <tr>
        <th class="text-center" width="7%" hidden>Id</th>
        <th class="text-center" width="7%">Id hàng</th>
        <th class="text-left">Tên hàng</th>
        <th class="text-left">Màu sắc</th>
        <th class="text-left">Kích thước</th>
        <th class="text-left" hidden>CouponId</th>
        <th class="text-left">Số lượng</th>
        <th class="text-left">Giá vốn</th>
        <th class="text-left">Thành tiền</th>
        <th class="text-left">Giá lẻ</th>
        <th class="text-left">Giá sỉ</th>
        <th class="text-left">Giá VIP</th>
        <th class="text-left"><i class="fa fa-gears"></i></th>
    </tr>
    </thead>
    <tfoot align="right">
    <tr>
        <th hidden></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th class="text-right" hidden></th>
        <th class="text-center"></th>
        <th class="text-right"></th>
        <th class="text-right"></th>
        <th class="text-right"></th>
        <th class="text-right"></th>
        <th class="text-right"></th>
        <th class="text-right"></th>
    </tr>
    </tfoot>
</table>
<div hidden>
    <input name="sumAmount" type="text" class="form-control input-sm" id="sumAmount" required=""/>
    <input name="sumTotal" type="text" class="form-control input-sm" id="sumTotal" required=""/>
    <input name="sumRetail" type="text" class="form-control input-sm" id="sumRetail" required=""/>
    <input name="sumWhole" type="text" class="form-control input-sm" id="sumWhole" required=""/>
    <input name="sumVip" type="text" class="form-control input-sm" id="sumVip" required=""/>
</div>
<?php require('admin/views/shared/footer.php'); ?>
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

        $('#btnUpdateCoupon').click(function () {
            updateCoupon();
        });

        $("#couponname").keypress(function (evt) {
            if (evt.keyCode == 13) {
                updateCoupon();
            }
        });
        function updateCoupon() {
            var id = $('#couponid').val();
            var name = $('#couponname').val();
            var coupondate = $('#coupondate').val();
            var employeeid = $('#couponemployeeid').val();
            $.blockUI({
                message: '<h1>Đợi trong giây lát...</h1>',
                css: {
                    border: 'none',
                    padding: '15px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .5,
                    color: '#fff'
                },
                onOverlayClick: $.unblockUI
            });
            $.ajax({
                type: "POST",
                url: "admin/controllers/import/updateCoupon.php",
                data: {
                    'id': id,
                    'name': name,
                    'coupondate': coupondate,
                    'employeeid': employeeid
                },
                success: function (data) {
                    if (data == '0') {
                        jAlert('Thực hiện không thành công', 'Thông báo', function (e) {
                            $('#couponname').focus();
                        });
                    } else {
                        jAlert('Thực hiện thành công', 'Thông báo', function (e) {
                            $('#goodsname').focus();
                        });
                        // $('#btnFreshCoupon').click();
                        $('#couponname').prop('disabled', true);
                        $('#coupondate').prop('disabled', true);
                        $('#couponid').val(data);
                        disableTblImport(false);
                        loadCoupon();
                        var checkImport = $("#checkImport").is(":checked");
                        disableObjectCoupon(checkImport);
                    }
                    $.unblockUI();
                }
            });
        }
        // var toDay = $('#toDate').val();
        loadCoupon();

        $('#btnFreshCoupon').click(function (e) {
            var checkImport = $("#checkImport").is(":checked");
            loadCoupon();
            disableTblImport(true);
            emptyObjectCoupon();
            disableObjectCoupon(checkImport);
            loadCouponDetail('0');
        });

        function disableObjectCoupon(bool) {
            $('#couponname').prop('disabled', bool);
            $('#coupondate').prop('disabled', bool);
        }

        function emptyObjectCoupon() {
            $('#couponid').val('');
            $('#couponname').val('');
            $('#coupondate').val(<?php echo json_encode(date('Y-m-d')); ?>);
        }

        function loadCoupon() {
            var toDate = $('#toDate').val();
            var fromDate = $('#fromDate').val();
            var checkImport = $("#checkImport").is(":checked") ? 1 : 0;
            $('#tblCoupon').DataTable().destroy();
            $('#tblCoupon').DataTable({
                searching: true,
                lengthChange: false,
                // info: false,
                // scrollY: "150px",
                // paging: false,
                width: '100%',
                responsive: true,
                lengthMenu: [[4, 10, 30, "All"]],
                order: [[0, 'desc']],
                ajax: {
                    type: 'POST',
                    url: "admin/controllers/import/listCoupon.php",
                    data: {
                        toDate: toDate,
                        fromDate: fromDate,
                        checkImport: checkImport
                    },
                    dataSrc: ''
                },
                columns: [
                    {data: "id", className: "text-center", width: '12%'},
                    {data: "name"},
                    {data: "coupondate"},
                    {data: "employeeid", visible: false},
                    {data: "employeename"},
                    {data: "isimport", visible: false},
                    {data: "isimportname", width: '15%'},
                    {
                        data: null,
                        className: "text-center",
                        width: '10%',
                        defaultContent: '<button class="coupondelete"><i class="glyphicon glyphicon-trash"></i></button>'
                    }
                ]
            });
        }

        $('#tblCoupon tbody').on('click', 'tr', function (id) {
            var data = $('#tblCoupon').DataTable().row(this).data();
            if (data["id"] !== undefined && data["id"] !== null) {
                $("#couponid").val(data["id"]);
                $("#couponname").val(data["name"]);
                $("#coupondate").val(data["coupondate"]);
                $("#couponemployeeid").val(data["employeeid"]);
                $("#couponemployeename").val(data["employeename"]);
                var isimport = data["isimport"];
                $("#isimport").val(isimport);
                disableTblImport(isimport == '1' ? true : false);
                loadCouponDetail(data["id"]);
                changeIsImport(isimport);
                // if (isimport == "0") {
                //     changeIsImport("0");
                // } else if (isimport == "1") {
                //     changeIsImport("1");
                // } else if (isimport == "2") {
                //     changeIsImport("2");
                // } else {
                //     changeIsImport("2");
                // }
            }
        });

        $('#tblCoupon').on('click', 'button.coupondelete', function (e) {
            var checkImport = $("#checkImport").is(":checked");
            if (checkImport) {
                return jAlert('Trạng thái không được xóa', 'Thông báo');
            }
            var $row = $(this).closest('tr');
            var data = $('#tblCoupon').DataTable().row($row).data();
            jConfirm('Bạn chắc chắn xóa phiếu này này?', 'Thông báo', function (e) {
                if (e == true) {
                    $.ajax({
                        type: "POST",
                        url: "admin/controllers/import/deleteCoupon.php",
                        data: {
                            'id': data["id"]
                        },
                        success: function (data) {
                            if (data == '0') {
                                jAlert('Thực hiện không thành công. Vui lòng kiểm tra lại phiếu đã có nhập hàng chưa', 'Thông báo');
                            } else {
                                jAlert('Thực hiện thành công', 'Thông báo');
                                $('#btnFreshCoupon').click();
                            }
                        }
                    });
                }
            });
        });

        function disableTblImport(bool) {
            $('#goodsname').prop('disabled', bool);
            $('#goodsamount').prop('disabled', bool);
            $('#goodsprice').prop('disabled', bool);
            // $('#goodstotal').prop('disabled', bool);
            $('#goodsretail').prop('disabled', bool);
            $('#goodswholesale').prop('disabled', bool);
            $('#goodspricevip').prop('disabled', bool);
        }

        $("#goodsname").combogrid({
            url: 'admin/controllers/import/listGoods.php',
            colModel: [
                {'columnName': 'id', 'width': '10', 'label': 'Id'},
                {'columnName': 'name', 'width': '30', 'label': 'Tên hàng'},
                {'columnName': 'color', 'width': '30', 'label': 'Màu sắc'},
                {'columnName': 'sizename', 'width': '30', 'label': 'Kích thước'}
            ],
            select: function (event, ui) {
                $("#goodsid").val(ui.item.id);
                $("#goodsname").val(ui.item.name);
                $("#goodscolor").val(ui.item.color);
                $("#goodssize").val(ui.item.sizename);
                return false;
            }
        });

        $("#goodsname").keypress(function (evt) {
            if (evt.keyCode == 13) {
                var goodsid = $("#goodsid").val();
                var goodsCheck = $('#tblCouponDetail').DataTable().columns(1).data()[0];
                var checkResult = checkSurvival(goodsid, goodsCheck);
                if (checkResult) {
                    jAlert('Sản phẩm đã có trong phiếu nhập. Vui lòng xóa sản phẩm ra khỏi phiếu và thêm lại !!!', 'Thông báo', function (e) {
                        emptyTblImport();
                        $('#goodsname').focus();
                    });
                } else {
                    $("#goodsamount").focus();
                }
            }
        });
        $("#goodsamount").keypress(function (evt) {
            if (evt.keyCode == 13) {
                if (!checkIf($('#goodsamount').val())) {
                    $("#goodsprice").focus();
                } else {
                    jAlert('Số lượng không được để trống', 'Thông báo', function (e) {
                        $('#goodsamount').focus();
                    });
                }
            }
        });
        $("#goodsprice").keypress(function (evt) {
            if (evt.keyCode == 13) {
                if (!checkIf($('#goodsprice').val())) {
                    $("#goodsretail").focus();
                    var amount = $('#goodsamount').val();
                    var price = $("#goodsprice").val();
                    var total = amount * StringToNumber(price);
                    $('#goodstotal').val(formatNumber(total.toString()));
                } else {
                    jAlert('Giá vốn không được để trống', 'Thông báo', function (e) {
                        $('#goodsprice').focus();
                    });
                }
            }
        });
        $("#goodsretail").keypress(function (evt) {
            if (evt.keyCode == 13) {
                if (!checkIf($('#goodsretail').val())) {
                    $("#goodswholesale").focus();
                } else {
                    jAlert('Giá bán lẻ không được để trống', 'Thông báo', function (e) {
                        $('#goodsretail').focus();
                    });
                }
            }
        });
        $("#goodswholesale").keypress(function (evt) {
            if (evt.keyCode == 13) {
                $("#goodspricevip").focus();
            }
        });
        $("#goodspricevip").keypress(function (evt) {
            if (evt.keyCode == 13) {
                var goodsid = $('#goodsid').val();
                if (checkIf(goodsid)) {
                    return jAlert('Chưa nhập thông tin sản phẩm', 'Thông báo', function (e) {
                        $("#goodspricevip").focus();
                    });
                }
                var goodsname = $('#goodsname').val();
                var goodscolor = $('#goodscolor').val();
                var goodssize = $('#goodssize').val();
                var goodsamount = $('#goodsamount').val();
                var goodsprice = StringToNumber($('#goodsprice').val());
                var goodstotal = StringToNumber($('#goodstotal').val());
                var goodsretail = StringToNumber($('#goodsretail').val());
                var goodswholesale = StringToNumber($('#goodswholesale').val());
                var goodspricevip = StringToNumber($('#goodspricevip').val());
                var couponid = $('#couponid').val();
                $.blockUI({
                    message: '<h1>Đợi trong giây lát...</h1>',
                    css: {
                        border: 'none',
                        padding: '15px',
                        backgroundColor: '#000',
                        '-webkit-border-radius': '10px',
                        '-moz-border-radius': '10px',
                        opacity: .5,
                        color: '#fff'
                    },
                    onOverlayClick: $.unblockUI
                });
                $.ajax({
                    type: "POST",
                    url: "admin/controllers/import/insertCouponDetail.php",
                    data: {
                        'goodsid': goodsid,
                        'goodsname': goodsname,
                        'goodscolor': goodscolor,
                        'goodssize': goodssize,
                        'goodsamount': goodsamount,
                        'goodsprice': goodsprice,
                        'goodstotal': goodstotal,
                        'goodsretail': goodsretail,
                        'goodswholesale': goodswholesale,
                        'goodspricevip': goodspricevip,
                        'couponid': couponid
                    },
                    success: function (data) {
                        if (data == '0') {
                            jAlert('Thực hiện không thành công', 'Thông báo', function (e) {
                                $('#goodsname').focus();
                            });
                        } else {
                            jAlert('Thực hiện thành công', 'Thông báo', function (e) {
                                emptyTblImport();
                                $('#goodsname').focus();
                            });
                            loadCouponDetail(couponid);
                        }
                        $.unblockUI();
                    }
                });
            }
        });

        function loadCouponDetail(couponid) {
            $('#tblCouponDetail').DataTable().destroy();
            $('#tblCouponDetail').DataTable({
                searching: false,
                // lengthChange: false,
                // info: false,
                // scrollY: "150px",
                paging: false,
                width: '100%',
                responsive: true,
                // lengthMenu: [[4, 10, 30, "All"]],
                // order: [[0, 'desc']],
                ajax: {
                    type: 'POST',
                    url: "admin/controllers/import/listCouponDetail.php",
                    data: {
                        couponid: couponid
                    },
                    dataSrc: ''
                },
                columns: [
                    {data: "id", className: "text-center", width: '10%', visible: false},
                    {data: "goodsid", className: "text-center", width: '10%'},
                    {data: "goodsname"},
                    {data: "goodscolor"},
                    {data: "goodssize"},
                    {data: "couponid", visible: false},
                    {data: "amount", className: "text-center",},
                    {
                        data: "price", className: "text-right",
                        render: $.fn.dataTable.render.number(',', '.', 0)
                    },
                    {
                        data: "total", className: "text-right",
                        render: $.fn.dataTable.render.number(',', '.', 0)
                    },
                    {
                        data: "retail", className: "text-right",
                        render: $.fn.dataTable.render.number(',', '.', 0)
                    },
                    {
                        data: "wholesale", className: "text-right",
                        render: $.fn.dataTable.render.number(',', '.', 0)
                    },
                    {
                        data: "pricevip", className: "text-right",
                        render: $.fn.dataTable.render.number(',', '.', 0)
                    },
                    {
                        data: null,
                        className: "text-center",
                        width: '7%',
                        defaultContent: '<button class="coupondetaildelete"><i class="glyphicon glyphicon-trash"></i></button>'
                    }
                ],
                footerCallback: function (row, data, start, end, display) {
                    var api = this.api(), data;

                    // converting to interger to find total
                    var intVal = function (i) {
                        return typeof i === 'string' ?
                            i.replace(/[\$,]/g, '') * 1 :
                            typeof i === 'number' ?
                                i : 0;
                    };

                    var sumAmount = api
                        .column(6)
                        .data()
                        .reduce(function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    var sumTotal = api
                        .column(8)
                        .data()
                        .reduce(function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    var sumRetail = api
                        .column(9)
                        .data()
                        .reduce(function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    var sumWhole = api
                        .column(10)
                        .data()
                        .reduce(function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    var sumVip = api
                        .column(11)
                        .data()
                        .reduce(function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    // Update footer by showing the total with the reference of the column index
                    $(api.column(2).footer()).html('Tổng');
                    $(api.column(6).footer()).html(formatNumber(sumAmount.toString()));
                    $(api.column(8).footer()).html(formatNumber(sumTotal.toString()));
                    $(api.column(9).footer()).html(formatNumber(sumRetail.toString()));
                    $(api.column(10).footer()).html(formatNumber(sumWhole.toString()));
                    $(api.column(11).footer()).html(formatNumber(sumVip.toString()));
                    $('#sumAmount').val(sumAmount);
                    $('#sumTotal').val(sumTotal);
                    $('#sumRetail').val(sumRetail);
                    $('#sumWhole').val(sumWhole);
                    $('#sumVip').val(sumVip);
                }
            });
        }

        function emptyTblImport() {
            $('#goodsid').val('');
            $('#goodsname').val('');
            $('#goodscolor').val('');
            $('#goodssize').val('');
            $('#goodsamount').val('');
            $('#goodsprice').val('');
            $('#goodstotal').val('');
            $('#goodsretail').val('');
            $('#goodswholesale').val('');
            $('#goodspricevip').val('');
        }

        $('#tblCouponDetail').on('click', 'button.coupondetaildelete', function (e) {
            var checkImport = $("#checkImport").is(":checked");
            if (checkImport) {
                return jAlert('Trạng thái không được xóa', 'Thông báo');
            }
            var $row = $(this).closest('tr');
            var data = $('#tblCouponDetail').DataTable().row($row).data();
            var couponid = data["couponid"];
            jConfirm('Bạn chắc chắn xóa sản phẩm này không?', 'Thông báo', function (e) {
                if (e == true) {
                    $.ajax({
                        type: "POST",
                        url: "admin/controllers/import/deleteCouponDetail.php",
                        data: {
                            'id': data["id"]
                        },
                        success: function (data) {
                            if (data == '0') {
                                jAlert('Thực hiện không thành công', 'Thông báo', function (e) {
                                    $('#goodsname').focus();
                                });
                            } else {
                                jAlert('Thực hiện thành công', 'Thông báo', function (e) {
                                    $('#goodsname').focus();
                                });
                                loadCouponDetail(couponid);
                            }
                        }
                    });
                }
            });
        });
        changeIsImport('0');

        function changeIsImport(status) {
            if (status == '0') {
                $('#btnUpdateCoupon').show();
                $('#btnIsImport').show();
                $('#btnCancel').hide();
                $('#btnReport').hide();
            } else if (status == '1') {
                $('#btnUpdateCoupon').hide();
                $('#btnIsImport').hide();
                $('#btnCancel').show();
                $('#btnReport').show();
            } else if (status == '2') {
                $('#btnIsImport').hide();
                $('#btnCancel').hide();
                $('#btnReport').hide();
            } else {
                $('#btnIsImport').hide();
                $('#btnCancel').hide();
                $('#btnReport').hide();
            }
        }

        $('#btnIsImport').click(function () {
            var id = $('#couponid').val();
            if (checkIf(id)) {
                return jAlert('Chưa chọn phiếu nhập', 'Thông báo');
            }
            // var isimport = $('#isimport').val();
            updateIsImport(id, 1)
        });

        function updateIsImport(couponid, isimport) {
            var sumAmount = $('#sumAmount').val();
            var sumTotal = $('#sumTotal').val();
            if (sumTotal == '0') {
                return jAlert('Phiếu chưa có dịch vụ', 'Thông báo');
            }
            var sumRetail = $('#sumRetail').val();
            var sumWhole = $('#sumWhole').val();
            var sumVip = $('#sumVip').val();
            $.blockUI({
                message: '<h1>Đợi trong giây lát...</h1>',
                css: {
                    border: 'none',
                    padding: '15px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .5,
                    color: '#fff'
                },
                onOverlayClick: $.unblockUI
            });
            $.ajax({
                type: "POST",
                url: "admin/controllers/import/updateIsImport.php",
                data: {
                    couponid: couponid,
                    isimport: isimport,
                    sumAmount: sumAmount,
                    sumTotal: sumTotal,
                    sumRetail: sumRetail,
                    sumWhole: sumWhole,
                    sumVip: sumVip
                },
                success: function (data) {
                    if (data == '0') {
                        jAlert('Thực hiện không thành công', 'Thông báo', function (e) {
                            $('#couponname').focus();
                        });
                    } else {
                        jAlert('Thực hiện thành công', 'Thông báo');
                        $('#btnFreshCoupon').click();
                        $('#couponname').prop('disabled', true);
                        $('#coupondate').prop('disabled', true);
                        $('#couponid').val(data);
                        disableTblImport(true);
                    }
                    $.unblockUI();
                }
            });
        }

        $('#checkImport').click(function () {
            $('#btnFreshCoupon').click();
            if ($(this).is(':checked')) {
                disableObjectCoupon(true);
                changeIsImport('1');
            } else {
                disableObjectCoupon(false);
                changeIsImport('0');
            }
        });

        $('#btnReport').click(function () {
            updateCouponReport(3);
        });

        function updateCouponReport(isimport) {
            var id = $('#couponid').val();
            $.blockUI({
                message: '<h1>Đợi trong giây lát...</h1>',
                css: {
                    border: 'none',
                    padding: '15px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .5,
                    color: '#fff'
                },
                onOverlayClick: $.unblockUI
            });
            $.ajax({
                type: "POST",
                url: "admin/controllers/import/updateCouponReport.php",
                data: {
                    id: id,
                    isimport: isimport
                },
                success: function (data) {
                    if (data == '0') {
                        jAlert('Thực hiện không thành công', 'Thông báo');
                    } else {
                        jAlert('Thực hiện thành công', 'Thông báo');
                        loadCoupon();
                    }
                    $.unblockUI();
                }
            });
        }

        $('#btnCancel').click(function () {
            updateCouponCancel(2);
        });
        function updateCouponCancel(isimport) {
            var id = $('#couponid').val();
            $.blockUI({
                message: '<h1>Đợi trong giây lát...</h1>',
                css: {
                    border: 'none',
                    padding: '15px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .5,
                    color: '#fff'
                },
                onOverlayClick: $.unblockUI
            });
            $.ajax({
                type: "POST",
                url: "admin/controllers/import/updateCouponCancel.php",
                data: {
                    id: id,
                    isimport: isimport
                },
                success: function (data) {
                    if (data == '0') {
                        jAlert('Thực hiện không thành công', 'Thông báo');
                    } else {
                        jAlert('Thực hiện thành công', 'Thông báo');
                        loadCoupon();
                    }
                    $.unblockUI();
                }
            });
        }
    });
</script>