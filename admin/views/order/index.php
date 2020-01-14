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
            <th class="text-left">Is Import</th>
            <th class="text-left">Trạng thái</th>
            <th class="text-left"><i class="fa fa-gears"></i></th>
        </tr>
        </thead>
    </table>
</div>
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
<table class="table table-striped table-bordered table-hover small" id="tblImport" style="width:100%">
    <thead class="bg-info">
    <tr>
        <th class="text-center" width="5%">Id</th>
        <th class="text-left" width="15%">Tên hàng</th>
        <th class="text-left" width="7%">Màu sắc</th>
        <th class="text-left" width="8%">Kích thước</th>
        <th class="text-left" width="8%">Số lượng</th>
        <th class="text-left" width="7%">ĐVT</th>
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
            <input name="goodsunit" type="text" class="form-control input-sm" id="goodsunit"
                   placeholder="Đơn vị tính" disabled required=""/>
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
<table class="table table-striped table-bordered table-hover small" id="listOrderDetail" style="width:100%">
    <thead class="bg-primary">
    <tr>
        <th class="text-center" width="7%" hidden>Id</th>
        <th class="text-center" width="7%">Id hàng</th>
        <th class="text-left">Tên hàng</th>
        <th class="text-left">Màu sắc</th>
        <th class="text-left">Kích thước</th>
        <th class="text-left" hidden>CouponId</th>
        <th class="text-left">Số lượng</th>
        <th class="text-left">ĐVT</th>
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
                    {data: "customerid", visible: false},
                    {data: "customername"},
                    {data: "employeesid", visible: false},
                    {data: "employeename"},
                    {data: "isorder", visible: false},
                    {data: "isordername", width: '13%'},
                    {
                        data: null,
                        className: "text-center",
                        width: '7%',
                        defaultContent: '<button class="coupondelete"><i class="glyphicon glyphicon-trash"></i></button>'
                    }
                ]
            });
        }

        $('#listOrder tbody').on('click', 'tr', function (id) {
            var data = $('#listOrder').DataTable().row(this).data();
            if (data["id"] !== undefined && data["id"] !== null) {
                $("#couponid").val(data["id"]);
                $("#couponname").val(data["name"]);
                $("#coupondate").val(data["coupondate"]);
                $("#couponemployeeid").val(data["employeeid"]);
                $("#couponemployeename").val(data["employeename"]);
                var isimport = data["isimport"];
                $("#isimport").val(isimport);
                disableTblImport(isimport == '1' ? true : false);
                loadOrderDetail(data["id"]);
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

        $('#listOrder').on('click', 'button.coupondelete', function (e) {
            var checkOrder = $("#checkOrder").is(":checked");
            if (checkOrder) {
                return jAlert('Trạng thái không được xóa', 'Thông báo');
            }
            var $row = $(this).closest('tr');
            var data = $('#listOrder').DataTable().row($row).data();
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
                if (!checkIf($('#ordercustomername').val())) {
                    // Thêm đơn hàng
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
    });
</script>