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

<div class="pull-left" style="padding-left: 0px; margin-top: 5px; width: 30%">
    <div class="small form-horizontal">
        <div class="form-group">
            <div class="col-sm-3" style="width: 25%;">
                Từ ngày
            </div>
            <div class="col-sm-4" style="width: 50%;">
                <input name="toDate" type="date" value="<?php echo date('Y-m-d'); ?>" class="form-control input-sm"
                       id="toDate"/>
            </div>
            <label class="col-sm-3 control-label pull-right" style="padding-left: 0px; width: 25%">
                <input type="checkbox" id="checkOrder"/> Đã xuất</label>
        </div>
        <div class="form-group">
            <div class="col-sm-3" style="width: 25%;">
                Đến ngày
            </div>
            <div class="col-sm-4" style="width: 50%;">
                <input name="fromDate" type="date" value="<?php echo date('Y-m-d'); ?>" class="form-control input-sm"
                       id="fromDate"/>
            </div>
            <div class="col-sm-4 pull-right" style="width: 25%;">
                <button class="btnself btn-success pull-right"
                        id="btnFreshOrder"><i class="glyphicon glyphicon-refresh"></i> Làm mới
                </button>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <b class="small">Tạo đơn hàng</b>
        </div>
        <div class="panel-body small form-horizontal" style="padding-bottom: inherit">
            <div class="form-group">
                <label for="orderid" class="col-sm-4 control-label">Id đơn hàng</label>
                <div class="col-sm-8">
                    <input name="orderid" type="text" class="form-control input-sm" disabled
                           id="orderid" placeholder="Id đơn hàng"/>
                </div>
            </div>
            <div class="form-group">
                <label for="ordername" class="col-sm-4 control-label">Tên đơn</label>
                <div class="col-sm-8">
                    <input name="ordername" type="text" class="form-control input-sm"
                           id="ordername" placeholder="Tên đơn gợi nhớ"/>
                </div>
            </div>
            <div class="form-group">
                <label for="ordercustomer" class="col-sm-4 control-label">Khách hàng</label>
                <div class="col-sm-8">
                    <input name="ordercustomerid" type="hidden"
                           class="form-control input-sm" id="ordercustomerid"/>
                    <input name="ordercustomername" type="text"
                           class="form-control input-sm" id="ordercustomername" placeholder="Tên khách hàng"/>
                </div>
            </div>
            <div class="form-group">
                <label for="ordercustomertype" class="col-sm-4 control-label">Loại khách hàng</label>
                <div class="col-sm-8">
                    <input name="ordercustomertypeid" type="hidden"
                           class="form-control input-sm" id="ordercustomertypeid"/>
                    <input name="ordercustomertypename" type="text" disabled
                           class="form-control input-sm" id="ordercustomertypename" placeholder="Loại khách hàng"/>
                </div>
            </div>
            <div class="form-group">
                <label for="orderdate" class="col-sm-4 control-label">Ngày bán</label>
                <div class="col-sm-8">
                    <input name="orderdate" type="date" value="<?php echo date('Y-m-d'); ?>"
                           class="form-control input-sm" id="orderdate" placeholder="Ngày lên đơn"/>
                </div>
            </div>
            <div class="form-group">
                <label for="orderemployee" class="col-sm-4 control-label">Nhân viên bán</label>
                <div class="col-sm-8">
                    <input name="orderemployeeid" type="hidden" value="<?php echo $employee["0"]["id"]; ?>"
                           class="form-control input-sm" id="orderemployeeid"/>
                    <input name="orderemployeename" type="text" value="<?php echo $employee["0"]["name"]; ?>"
                           class="form-control input-sm" id="orderemployeename" disabled/>
                </div>
            </div>
            <div class="form-group">
                <label for="orderpayment" class="col-sm-4 control-label">Hình thức</label>
                <div class="col-sm-8">
                    <input type="radio" name="orderpayment" id="cash" checked value="1">Tiền mặt
                    <input type="radio" name="orderpayment" id="transfer" value="2">Chuyển khoản
                    <input type="radio" name="orderpayment" id="other" value="3">Khác
                </div>
            </div>
            <div class="form-group">
                <label for="intoTotal" class="col-sm-4 control-label">Thành tiền</label>
                <div class="col-sm-8">
                    <input name="intoTotal" type="text" value="" class="form-control input-sm text-right" id="intoTotal"
                           style="font-weight: bold; font-size: large" disabled/>
                </div>
            </div>
            <div class="form-group">
                <label for="discount" class="col-sm-4 control-label">Giảm giá</label>
                <div class="col-sm-3">
                    <input name="discountpercent" type="text" value="" class="form-control input-sm text-center"
                           id="discountpercent" placeholder="Số %"/>
                </div>
                <div class="col-sm-5">
                    <input name="discountmoney" type="text" value="" class="form-control input-sm text-right"
                           id="discountmoney" placeholder="Số tiền" data-type="currency"
                           style="font-weight: bold; font-size: large"/>
                    <!--                    <button class="btnself btn-info" type="button" id="dialogdiscount" data-toggle="modal"-->
                    <!--                            data-target="#exampleModalCenter">-->
                    <!--                        <i class="glyphicon glyphicon-new-window"></i>-->
                    <!--                    </button>-->
                </div>
            </div>
            <div class="form-group">
                <label for="sumtotal" class="col-sm-4 control-label">Tổng tiền</label>
                <div class="col-sm-8">
                    <input name="sumtotal" type="text" value="" class="form-control input-sm text-right" id="sumtotal"
                           style="font-weight: bold; font-size: large" disabled/>
                </div>
            </div>
            <div class="form-group">
                <label for="paidtotal" class="col-sm-4 control-label">Đã thanh toán</label>
                <div class="col-sm-8">
                    <input name="paidtotal" type="text" value="" class="form-control input-sm text-right" id="paidtotal"
                           data-type="currency" style="font-weight: bold; font-size: large"/>
                </div>
            </div>
            <div class="form-group">
                <label for="resttotal" class="col-sm-4 control-label">Còn lại</label>
                <div class="col-sm-8">
                    <input name="resttotal" type="text" value="" class="form-control input-sm text-right" id="resttotal"
                           data-type="currency" disabled style="font-weight: bold; font-size: large"/>
                </div>
            </div>
            <div class="form-group pull-right">
                <div class="col-sm-1"></div>
                <div class="pull-right" style="padding-right: 15px">
                    <button class="btnself btn-warning" type="button" id="btnReport">
                        <i class="glyphicon glyphicon-book"></i> Báo cáo
                    </button>
                    <button class="btnself btn-danger" type="button" id="btnCancel">
                        <i class="glyphicon glyphicon-ban-circle"></i> Hủy phiếu
                    </button>
                    <button class="btnself btn-warning" type="button" id="btnIsOrder">
                        <i class="glyphicon glyphicon-open-file"></i> Xuất kho
                    </button>
                    <button class="btnself btn-primary" type="button" id="btnUpdateOrder"><i
                                class="glyphicon glyphicon-plus"></i> Cập nhật
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pull-right" style="padding-left: 10px; margin-top: 5px; width: 70%">
    <table class="table table-striped table-bordered table-hover small" id="listOrder" style="width:100%">
        <caption class="bg-primary text-center">Danh sách đơn hàng</caption>
        <thead class="bg-primary">
        <tr>
            <th class="text-center" width="15%">Id</th>
            <th class="text-left">Tên đơn</th>
            <th class="text-left">Ngày tạo</th>
            <th class="text-left">Nhân viên id</th>
            <th class="text-left">Nhân viên</th>
            <th class="text-left">Khách hàng id</th>
            <th class="text-left">Khách hàng</th>
            <th class="text-left">Loại KH id</th>
            <th class="text-left">Loại KH</th>
            <th class="text-left">Is Import</th>
            <th class="text-left">Trạng thái</th>
            <th class="text-left">Hình thức</th>
            <th class="text-left">Thành tiền</th>
            <th class="text-left">% Giảm giá</th>
            <th class="text-left">Tiền giảm giá</th>
            <th class="text-left">Tổng tiền</th>
            <th class="text-left">Đã thanh toán</th>
            <th class="text-left">Còn lại</th>
            <th class="text-left"><i class="fa fa-gears"></i></th>
        </tr>
        </thead>
    </table>
    <table class="table table-striped table-bordered table-hover small" id="tblOrdersDetail" style="width:100%">
        <thead class="bg-info">
        <tr>
            <th class="text-center" width="10%">Id</th>
            <th class="text-left" width="35%">Tên hàng</th>
            <th class="text-center" width="15%">Số lượng</th>
            <th class="text-right">Giá bán</th>
            <th class="text-right">Thành tiền</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <input name="goodsid" type="text" class="form-control input-sm text-center" id="goodsid" disabled
                       required=""/>
            </td>
            <td>
                <input name="goodsname" type="text" class="form-control input-sm" id="goodsname"
                       placeholder="Nhập tên hàng hóa" disabled required=""/>
            </td>
            <td>
                <input name="goodsamount" type="number" class="form-control input-sm text-center" id="goodsamount"
                       placeholder="Số lượng" disabled required=""/>
            </td>
            <td>
                <input name="goodscash" type="text" class="form-control input-sm text-right" id="goodscash"
                       placeholder="Giá bán" data-type="currency" disabled required=""/>
            </td>
            <td>
                <input name="goodstotal" type="text" class="form-control input-sm text-right" id="goodstotal"
                       placeholder="Thành tiền" data-type="currency" disabled required=""/>
            </td>
        </tr>
        </tbody>
    </table>
    <table class="table table-striped table-bordered table-hover small" id="listOrderDetail" style="width:100%">
        <thead class="bg-primary">
        <tr>
            <th class="text-center" width="7%" hidden>Id orderdetail</th>
            <th class="text-center" width="7%">Id</th>
            <th class="text-left" width="30%">Tên hàng</th>
            <th class="text-center" width="15%">Số lượng</th>
            <th class="text-left">Giá bán</th>
            <th class="text-left">Thành tiền</th>
            <th class="text-left" hidden>Ngày tạo</th>
            <th class="text-center" width="7%"><i class="fa fa-gears"></i></th>
        </tr>
        </thead>
        <tfoot align="right">
        <tr>
            <th hidden></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th hidden></th>
            <th class="text-center"></th>
        </tr>
        </tfoot>
    </table>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center" id="exampleModalLongTitle">Giảm giá
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h4>
            </div>
            <div class="modal-body">
                <div class="panel-body small form-horizontal" style="padding-bottom: inherit">
                    <div class="form-group">
                        <label for="discountstyle" class="col-sm-4 control-label">Hình thức</label>
                        <div class="col-sm-2">
                            <input type="radio" name="discountstyle" id="money" checked value="1"> Tiền
                        </div>
                        <div class="col-sm-2">
                            <input type="radio" name="discountstyle" id="percent" value="2"> %
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="discountmoney" class="col-sm-4 control-label">Nhập số tiền</label>
                        <div class="col-sm-4">
                            <input name="discountmoney" type="text" class="form-control input-sm text-right"
                                   id="discountmoney" placeholder="Số tiền giảm giá" data-type="currency" required=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="discountpercent" class="col-sm-4 control-label">Nhập số %</label>
                        <div class="col-sm-2">
                            <input type="radio" name="radiopercent" id="radio5" checked value="5"> 5%
                        </div>
                        <div class="col-sm-2">
                            <input type="radio" name="radiopercent" id="radio10" value="10"> 10%
                        </div>
                        <div class="col-sm-2">
                            <input type="radio" name="radiopercent" id="radio15" value="15"> 15%
                        </div>
                        <div class="col-sm-2">
                            <input type="radio" name="radiopercent" id="radio50" value="50"> 50%
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="discountpercent" class="col-sm-4 control-label"></label>
                        <div class="col-sm-4">
                            <input name="discountpercent" type="text" class="form-control input-sm text-right"
                                   id="discountpercent" placeholder="Số % giảm giá" required=""/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary">Lưu</button>
            </div>
        </div>
    </div>
</div>
<div hidden>
    <input name="sumamount" type="text" class="form-control input-sm" id="sumamount" required=""/>
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

        $('#checkOrder').click(function () {
            loadOrder();
            emptyObjectOrder();
        });

        $('#btnFreshOrder').click(function () {
            loadOrder();
            emptyObjectOrder();
            disableOrders(false);
            disableOrdersDetail(true);
            loadOrderDetail();
        });

        loadOrder();

        function loadOrder() {
            var toDate = $('#toDate').val();
            var fromDate = $('#fromDate').val();
            var checkOrder = $("#checkOrder").is(":checked") ? 1 : 0;
            $('#listOrder').DataTable().destroy();
            $('#listOrder').DataTable({
                searching: true,
                lengthChange: false,
                width: '100%',
                responsive: true,
                lengthMenu: [[5, 10, 30, "All"]],
                order: [[0, 'desc']],
                ajax: {
                    type: 'POST',
                    url: "admin/controllers/order/listOrder.php",
                    data: {
                        toDate: toDate,
                        fromDate: fromDate,
                        checkOrder: checkOrder
                    },
                    dataSrc: ''
                },
                columns: [
                    {data: "id", className: "text-center", width: '8%'},
                    {data: "name"},
                    {data: "orderdate", className: "text-right", width: '12%'},
                    {data: "employeesid", visible: false},
                    {data: "employeename"},
                    {data: "customerid", visible: false},
                    {data: "customername"},
                    {data: "typeid", visible: false},
                    {data: "typename", visible: false},
                    {data: "isorder", visible: false},
                    {data: "isordername", width: '13%'},
                    {data: "orderpayment", width: '13%'},
                    {
                        data: "intototal", width: '13%',
                        render: $.fn.dataTable.render.number(',', '.', 0)
                    },
                    {data: "discountpercent", width: '13%'},
                    {
                        data: "discountmoney", width: '13%',
                        render: $.fn.dataTable.render.number(',', '.', 0)
                    },
                    {
                        data: "sumtotal", width: '13%',
                        render: $.fn.dataTable.render.number(',', '.', 0)
                    },
                    {
                        data: "paidtotal", width: '13%',
                        render: $.fn.dataTable.render.number(',', '.', 0)
                    },
                    {
                        data: "resttotal", width: '13%',
                        render: $.fn.dataTable.render.number(',', '.', 0)
                    },
                    {
                        data: null,
                        className: "text-center",
                        width: '7%',
                        defaultContent: '<button class="deleteorder"><i class="glyphicon glyphicon-trash"></i></button>'
                    }
                ]
            });
        }

        $('#listOrder tbody').on('click', 'tr', function (id) {
            var data = $('#listOrder').DataTable().row(this).data();
            if (data["id"] !== undefined && data["id"] !== null) {
                $("#orderid").val(data["id"]);
                $("#ordername").val(data["name"]);
                $("#ordercustomerid").val(data["customerid"]);
                $("#ordercustomername").val(data["customername"]);
                $("#ordercustomertypeid").val(data["typeid"]);
                $("#ordercustomertypename").val(data["typename"]);
                $("#orderdate").val(data["orderdate"]);
                var radiopayment = data["orderpayment"];
                if (radiopayment == "1") {
                    $("#cash").prop("checked", true);
                } else if (radiopayment == "2") {
                    $("#transfer").prop("checked", true);
                } else {
                    $("#other").prop("checked", true);
                }
                $("#intoTotal").val(formatNumber(data["intototal"].toString()));
                $("#discountpercent").val(data["discountpercent"]);
                $("#discountmoney").val(formatNumber(data["discountmoney"].toString()));
                $("#sumtotal").val(formatNumber(data["sumtotal"].toString()));
                $("#paidtotal").val(formatNumber(data["paidtotal"].toString()));
                $("#resttotal").val(formatNumber(data["resttotal"].toString()));

            }
            disableOrders(true);
            disableOrdersDetail(false);
            $("#goodsname").focus();
            loadOrderDetail();
        });

        $('#listOrder').on('click', 'button.deleteorder', function (e) {
            var checkOrder = $("#checkOrder").is(":checked");
            if (checkOrder) {
                return jAlert('Trạng thái không được xóa', 'Thông báo');
            }
            var $row = $(this).closest('tr');
            var data = $('#listOrder').DataTable().row($row).data();
            jConfirm('Bạn chắc chắn xóa đơn hàng này này?', 'Thông báo', function (e) {
                if (e == true) {
                    $.ajax({
                        type: "POST",
                        url: "admin/controllers/order/deleteOrder.php",
                        data: {
                            'id': data["id"]
                        },
                        success: function (data) {
                            if (data == '0') {
                                jAlert('Thực hiện không thành công. Vui lòng kiểm tra lại đơn hàng đã có hàng chưa', 'Thông báo');
                            } else {
                                jAlert('Thực hiện thành công', 'Thông báo');
                                $('#btnFreshOrder').click();
                            }
                        }
                    });
                }
            });
        });

        $("#ordername").keypress(function (evt) {
            if (evt.keyCode == 13) {
                if (!checkIf($('#ordername').val())) {
                    $("#ordercustomername").focus();
                } else {
                    jAlert('Tên đơn hàng không được để trống', 'Thông báo', function (e) {
                        $('#ordername').focus();
                    });
                }
            }
        });

        $("#ordercustomername").keypress(function (evt) {
            if (evt.keyCode == 13) {
                var custumername = $('#ordercustomername').val();
                if (!checkIf(custumername)) {
                    $.ajax({
                        type: "POST",
                        url: "admin/controllers/order/checkCustomer.php",
                        data: {
                            custumername: custumername
                        },
                        success: function (data) {
                            if (data !== '0') {
                                updateOrders();
                            }
                        }
                    });
                } else {
                    jAlert('Tên khách hàng không được để trống', 'Thông báo', function (e) {
                        $('#ordercustomername').focus();
                    });
                }
            }
        });

        $("#ordercustomername").combogrid({
            url: 'admin/controllers/order/listCustomerOrder.php',
            width: '50%',
            colModel: [
                {'columnName': 'id', 'width': '10', 'label': 'Id'},
                {'columnName': 'name', 'width': '30', 'label': 'Tên khách hàng', align: 'left'},
                {'columnName': 'phone', 'width': '25', 'label': 'Số điện thoại', align: 'right'},
                {'columnName': 'typeid', 'width': '25', 'label': 'Loại khách id', hidden: true},
                {'columnName': 'typename', 'width': '25', 'label': 'Loại khách'}
            ],
            select: function (event, ui) {
                $("#ordercustomerid").val(ui.item.id);
                $("#ordercustomername").val(ui.item.name);
                $("#ordercustomertypeid").val(ui.item.typeid);
                $("#ordercustomertypename").val(ui.item.typename);
                return false;
            }
        });

        function updateOrders() {
            var orderid = $('#orderid').val();
            var ordername = $('#ordername').val();
            var ordercustomerid = $('#ordercustomerid').val();
            var ordercustomername = $('#ordercustomername').val();
            var ordercustomertypeid = $('#ordercustomertypeid').val();
            var ordercustomertypename = $('#ordercustomertypename').val();
            var orderdate = $('#orderdate').val();
            var orderemployeeid = $('#orderemployeeid').val();
            var orderemployeename = $('#orderemployeename').val();
            //--------------------
            var orderpayment = $("input:radio[name=orderpayment]:checked").val();
            var intototal = $("#intoTotal").val();
            var discountpercent = $("#discountpercent").val();
            var discountmoney = $("#discountmoney").val();
            var sumtotal = $("#sumtotal").val();
            var paidtotal = $("#paidtotal").val();
            var resttotal = $("#resttotal").val();
            var sumamount = $("#sumamount").val();
            if (checkIf(ordername)) {
                return jAlert('Chưa nhập tên đơn hàng', 'Thông báo', function () {
                    $('#ordername').focus();
                });
            } else if (checkIf(ordercustomername)) {
                return jAlert('Chưa nhập tên tên khách hàng', 'Thông báo', function () {
                    $('#ordercustomername').focus();
                });
            } else {
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
                    url: "admin/controllers/order/updateOrders.php",
                    data: {
                        orderid: orderid,
                        ordername: ordername,
                        ordercustomerid: ordercustomerid,
                        ordercustomername: ordercustomername,
                        ordercustomertypeid: ordercustomertypeid,
                        ordercustomertypename: ordercustomertypename,
                        orderdate: orderdate,
                        orderemployeeid: orderemployeeid,
                        orderemployeename: orderemployeename,
                        orderpayment: orderpayment,
                        intototal: StringToNumber(intototal),
                        discountpercent: discountpercent,
                        discountmoney: StringToNumber(discountmoney),
                        sumtotal: StringToNumber(sumtotal),
                        paidtotal: StringToNumber(paidtotal),
                        resttotal: StringToNumber(resttotal),
                        sumamount: sumamount
                    },
                    success: function (data) {
                        if (data == '0') {
                            jAlert('Thực hiện không thành công', 'Thông báo', function (e) {
                                $('#ordername').focus();
                            });
                        } else {
                            jAlert('Thực hiện thành công', 'Thông báo', function (e) {
                                disableOrdersDetail(false);
                                disableOrders(true);
                                $('#orderid').val(data);
                                $('#goodsname').focus();
                            });
                        }
                        $.unblockUI();
                        loadOrder();
                        // emptyObjectOrder();
                    }
                });
            }
        }

        function emptyObjectOrder() {
            $("#orderid").val('');
            $("#ordername").val('');
            $("#ordercustomerid").val('');
            $("#ordercustomername").val('');
            $("#ordercustomertypeid").val('');
            $("#ordercustomertypename").val('');
            $("#intoTotal").val('');
            $("#discountpercent").val('');
            $("#discountmoney").val('');
            $("#sumtotal").val('');
            $("#paidtotal").val('');
            $("#resttotal").val('');
        }

        $("#btnUpdateOrder").click(function (e) {
            updateOrders();
        });

        function disableOrdersDetail(bool) {
            $('#goodsname').prop('disabled', bool);
            $('#goodsamount').prop('disabled', bool);
            $('#goodstotal').prop('disabled', bool);
        }

        function disableOrders(bool) {
            $('#ordername').prop('disabled', bool);
            $('#ordercustomername').prop('disabled', bool);
            $('#orderdate').prop('disabled', bool);
        }

        $("#goodsname").combogrid({
            url: 'admin/controllers/order/listGoodsOrders.php',
            width: '60%',
            colModel: [
                {'columnName': 'goodsid', 'width': '10', 'label': 'Id'},
                {'columnName': 'goodsname', 'width': '25', 'label': 'Tên hàng', align: 'left'},
                {'columnName': 'goodssize', 'width': '25', 'label': 'Kích thước', align: 'right', hidden: true},
                {'columnName': 'goodscolor', 'width': '25', 'label': 'Màu sắc', hidden: true},
                {'columnName': 'price', 'width': '25', 'label': 'Đơn giá', hidden: true},
                {'columnName': 'total', 'width': '25', 'label': 'Thành tiền', hidden: true},
                {'columnName': 'retail', 'width': '15', 'label': 'Giá bán lẻ', align: 'right'},
                {'columnName': 'wholesale', 'width': '15', 'label': 'Giá bán sỉ', align: 'right'},
                {'columnName': 'pricevip', 'width': '15', 'label': 'Giá VIP', align: 'right'},
                {'columnName': 'amount', 'width': '15', 'label': 'Tồn kho'}
            ],
            select: function (event, ui) {
                $("#goodsid").val(ui.item.goodsid);
                $("#goodsname").val(ui.item.goodsname);
                var typecustomer = $("#ordercustomertypeid").val();
                if (typecustomer == '-1') {
                    $("#goodscash").val(ui.item.retail);
                } else if (typecustomer == '3') {
                    $("#goodscash").val(ui.item.pricevip);
                } else {
                    $("#goodscash").val(ui.item.retail);
                }
                return false;
            }
        });

        $("#goodsname").keypress(function (evt) {
            if (evt.keyCode == 13) {
                var goodsid = $("#goodsid").val();
                if (checkIf(goodsid)) {
                    jAlert('Chưa chọn hàng trong danh mục', 'Thông báo', function (e) {
                        $("#goodsname").focus();
                    });
                } else {
                    $("#goodsamount").focus();
                }

            }
        });

        $("#goodsamount").keypress(function (evt) {
            if (evt.keyCode == 13) {
                var goodsamount = $("#goodsamount").val();
                var goodscash = $("#goodscash").val();
                if (checkIf(goodsamount)) {
                    jAlert('Số lượng không được để trống', 'Thông báo', function (e) {
                        $("#goodsamount").focus();
                    });
                } else {
                    var goodstotal = StringToNumber(goodscash) * goodsamount;
                    $("#goodstotal").val(goodstotal);
                    $("#goodstotal").focus();
                }
            }
        });

        $("#goodstotal").keypress(function (evt) {
            if (evt.keyCode == 13) {
                var goodsid = $("#goodsid").val();
                var goodscash = $("#goodscash").val();
                var idCheck = $('#listOrderDetail').DataTable().columns(1).data()[0];
                var cashCheck = $('#listOrderDetail').DataTable().columns(4).data()[0];
                var checkIdResult = checkSurvival(goodsid, idCheck);
                var checkCashResult = checkSurvival(StringToNumber(goodscash), cashCheck);
                if (checkIdResult && checkCashResult) {
                    jAlert('Sản phẩm đã có trong phiếu nhập. Vui lòng xóa sản phẩm ra khỏi phiếu và thêm lại !!!', 'Thông báo', function (e) {
                        emptyOrderDetail();
                        $('#goodsname').focus();
                    });
                } else {
                    updateOrderDetail();
                    // loadOrderDetail();
                    emptyOrderDetail();
                }
            }
        });

        function updateOrderDetail() {
            var ordersid = $("#orderid").val();
            var goodsid = $("#goodsid").val();
            var goodsname = $("#goodsname").val();
            var goodsamount = $("#goodsamount").val();
            var goodscash = $("#goodscash").val();
            var goodstotal = $("#goodstotal").val();
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
                url: "admin/controllers/order/updateOrderDetail.php",
                data: {
                    ordersid: ordersid,
                    goodsid: goodsid,
                    goodsname: goodsname,
                    goodsamount: goodsamount,
                    goodscash: StringToNumber(goodscash),
                    goodstotal: StringToNumber(goodstotal)
                },
                success: function (data) {
                    if (data == '0') {
                        jAlert('Thực hiện không thành công', 'Thông báo', function (e) {
                            $("#goodsname").focus();
                        });
                    } else {
                        jAlert('Thực hiện thành công', 'Thông báo', function (e) {
                            $("#goodsname").focus();
                        });
                    }
                    loadOrderDetail();
                    $.unblockUI();
                }
            });
        }

        function loadOrderDetail() {
            var orderid = $('#orderid').val();
            $('#listOrderDetail').DataTable().destroy();
            $('#listOrderDetail').DataTable({
                searching: true,
                lengthChange: false,
                width: '100%',
                responsive: true,
                lengthMenu: [[5, 10, 30, "All"]],
                order: [[0, 'desc']],
                ajax: {
                    type: 'POST',
                    url: "admin/controllers/order/listOrderDetail.php",
                    data: {
                        orderid: orderid
                    },
                    dataSrc: ''
                },
                columns: [
                    {data: "id", className: "text-center", width: '7%', visible: false},
                    {data: "goodsid", className: "text-center", width: '7%'},
                    {data: "goodsname", className: "text-left", width: '30%'},
                    {data: "goodsamount", className: "text-center", width: '15%'},
                    {
                        data: "goodscash", className: "text-right",
                        render: $.fn.dataTable.render.number(',', '.', 0)
                    },
                    {
                        data: "goodstotal", className: "text-right",
                        render: $.fn.dataTable.render.number(',', '.', 0)
                    },
                    {data: "createdate", className: "text-right", width: '12%', visible: false},
                    {
                        data: null,
                        className: "text-center",
                        width: '7%',
                        defaultContent: '<button class="delete"><i class="glyphicon glyphicon-trash"></i></button>'
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
                        .column(3)
                        .data()
                        .reduce(function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    var intoTotal = api
                        .column(5)
                        .data()
                        .reduce(function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    var intoTotalString = formatNumber(intoTotal.toString());
                    // Update footer by showing the total with the reference of the column index
                    $(api.column(2).footer()).html('Tổng');
                    $(api.column(3).footer()).html(sumAmount);
                    $(api.column(5).footer()).html(intoTotalString);
                    $('#intoTotal').val(intoTotalString);
                    var discountmoney = $("#discountmoney").val();
                    var sumtotal = intoTotal - StringToNumber(discountmoney);
                    $('#sumtotal').val(formatNumber(sumtotal.toString()));
                    $('#paidtotal').val(formatNumber(sumtotal.toString()));
                    var paidtotal = $("#paidtotal").val();
                    var resttotal = sumtotal - StringToNumber(paidtotal);
                    $('#sumamount').val(sumAmount);
                    $('#resttotal').val(formatNumber(resttotal.toString()));
                }
            });
        }

        function emptyOrderDetail() {
            $("#goodsid").val('');
            $("#goodsname").val('');
            $("#goodsamount").val('');
            $("#goodscash").val('');
            $("#goodstotal").val('');
        }

        $('#listOrderDetail').on('click', 'button.delete', function (e) {
            var checkOrder = $("#checkOrder").is(":checked");
            if (checkOrder) {
                return jAlert('Trạng thái không được xóa', 'Thông báo');
            }
            var $row = $(this).closest('tr');
            var data = $('#listOrderDetail').DataTable().row($row).data();
            jConfirm('Bạn chắc chắn xóa phiếu này này?', 'Thông báo', function (e) {
                if (e == true) {
                    $.ajax({
                        type: "POST",
                        url: "admin/controllers/order/deleteOrderDetail.php",
                        data: {
                            'id': data["id"]
                        },
                        success: function (data) {
                            if (data == '0') {
                                jAlert('Thực hiện không thành công', 'Thông báo');
                            } else {
                                jAlert('Thực hiện thành công', 'Thông báo');
                            }
                            loadOrderDetail();
                        }
                    });
                }
            });
        });

        function disabledDivPercent(checkDiscount) {
            if (checkDiscount == "1") {
                $('#discountmoney').prop('disabled', false);
                $('#radio5').prop('disabled', true);
                $('#radio10').prop('disabled', true);
                $('#radio15').prop('disabled', true);
                $('#radio50').prop('disabled', true);
                $('#discountpercent').prop('disabled', true);
            } else {
                $('#discountmoney').prop('disabled', true);
                $('#radio5').prop('disabled', false);
                $('#radio10').prop('disabled', false);
                $('#radio15').prop('disabled', false);
                $('#radio50').prop('disabled', false);
                $('#discountpercent').prop('disabled', false);
            }
        }

        // disabledDivPercent(true);

        $('input[name=discountstyle]').click(function () {
            var checkDiscount = $("input:radio[name=discountstyle]:checked").val();
            disabledDivPercent(checkDiscount);
        });

        $("#discountpercent").keypress(function (evt) {
            if (evt.keyCode == 13) {
                caldiscount(1);
                $("#paidtotal").focus();
            }
        });

        $("#discountmoney").keypress(function (evt) {
            if (evt.keyCode == 13) {
                caldiscount(2);
                $("#paidtotal").focus();
            }
        });

        function caldiscount(x) {
            if (x == 1) {
                var discountpercent = $("#discountpercent").val();
                var intoTotal = $("#intoTotal").val();
                var discountmoney = discountpercent / 100 * StringToNumber(intoTotal);
                var sumtotal = StringToNumber(intoTotal) - discountmoney;
                $("#discountmoney").val(formatNumber(discountmoney.toString()));
                $("#sumtotal").val(formatNumber(sumtotal.toString()));
                $("#paidtotal").val(formatNumber(sumtotal.toString()));
                var sumtotal = $("#sumtotal").val();
                var paidtotal = $("#paidtotal").val();
                var resttotal = StringToNumber(sumtotal) - StringToNumber(paidtotal);
                $("#resttotal").val(formatNumber(resttotal.toString()));
            } else {
                var discountmoney = $("#discountmoney").val();
                var intoTotal = $("#intoTotal").val();
                var sumtotal = StringToNumber(intoTotal) - StringToNumber(discountmoney);
                // $("#discountmoney").val(formatNumber(discountmoney.toString()));
                $("#discountpercent").val("");
                $("#sumtotal").val(formatNumber(sumtotal.toString()));
                $("#paidtotal").val(formatNumber(sumtotal.toString()));
                var sumtotal = $("#sumtotal").val();
                var paidtotal = $("#paidtotal").val();
                var resttotal = StringToNumber(sumtotal) - StringToNumber(paidtotal);
                $("#resttotal").val(formatNumber(resttotal.toString()));
            }
        }

        function calpaidtotal() {
            var sumtotal = StringToNumber($("#sumtotal").val());
            var paidtotal = StringToNumber($("#paidtotal").val());
            var resttotal = sumtotal - paidtotal;
            $("#resttotal").val(formatNumber(resttotal.toString()));
        }

        $("#paidtotal").keypress(function (evt) {
            if (evt.keyCode == 13) {
                calpaidtotal();
                updateOrders();
            }
        });
    });

</script>