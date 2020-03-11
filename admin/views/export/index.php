<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <b>Bán hàng</b>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body" style="size: 13px">
                <form id="category-form" class="form-horizontal" method="post"
                      enctype="multipart/form-data" role="form">
                    <input id="Status" name="Status" type="hidden"/>
                    <input id="ProductId" name="ProductId" type="hidden"/>
                    <input id="TotalFunds" name="TotalFunds" type="hidden"/>
                    <input id="RestFunds" name="RestFunds" type="hidden"/>
                    <input id="ExportId" name="ExportId" type="hidden"/>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Tên S.P</label>
                            <div class="col-sm-8">
                                <input name="ProductName" type="text" value=""
                                       class="form-control" id="ProductName" placeholder="Tên sản phẩm"
                                       required=""/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="link" class="col-sm-4 control-label">Giá xe</label>
                            <div class="col-sm-8">
                                <input name="ProductPrice" type="text" value="" data-type="currency" disabled
                                       class="form-control text-right" id="ProductPrice" placeholder="Giá xe"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="link" class="col-sm-4 control-label">Trạng thái</label>
                            <div class="col-sm-8">
                                <input name="StatusShow" type="text" value="" disabled
                                       class="form-control text-right" id="StatusShow" placeholder="Trạng thái"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="link" class="col-sm-4 control-label">Ng nhận</label>
                            <div class="col-sm-8">
                                <select name="ReceiverId" class="form-control" id="ReceiverId" required=""
                                        data-show-subtext="true" data-live-search="true">
                                    <option value="-1" selected disabled>Chọn người nhận tiền</option>
                                    <?php foreach ($userInvestor as $userInvestors) {
                                        echo '<option value="' . $userInvestors['Id'] . '">' . $userInvestors['Name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="link" class="col-sm-4 control-label">Hình thức</label>
                            <div class="col-sm-8">
                                <select name="PaymentId" class="form-control" id="PaymentId" required=""
                                        data-show-subtext="true" data-live-search="true">
                                    <?php
                                    foreach ($paymention as $paymentions) {
                                        $selected = '';
                                        if ($paymentions && ($paymentions['Id'] == '1')) $selected = 'selected=""';
                                        echo '<option value="' . $paymentions['Id'] . '" ' . $selected . '>' . $paymentions['Name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="link" class="col-sm-4 control-label"></label>
                            <div class="col-sm-8">
                                <button id="btnPerform" name="btnPerform" type="button" hidden
                                        class="btn btn-primary">Bán hàng
                                </button>
                                <button id="btnCancel" name="btnCancel" type="button" hidden
                                        class="btn btn-danger">Hủy bán
                                </button>
                                <button id="btnReport" name="btnReport" type="button" hidden
                                        class="btn btn-warning">Báo cáo
                                </button>
                            </div>
                            <label for="link" class="col-sm-4 control-label"></label>
                        </div>
                    </div>
                </form>
                <div class="col-sm-8">
                    <table class="table table-striped table-bordered table-hover" id="tableInvestor"
                           name="tableInvestor">
                        <thead>
                        <tr>
                            <th class="text-center" width="10%">Id</th>
                            <th class="text-center" hidden>ProductId</th>
                            <th class="text-center" hidden>UserId</th>
                            <th>Sản phẩm</th>
                            <th>Chủ đầu tư</th>
                            <th class="text-right" width="20%">Vốn</th>
                            <th class="text-center" width="10%">Tỉ lệ</th>
                            <th class="text-right" width="20%">Tiền lãi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($investor as $investors): ?>
                            <tr class="odd gradeX">
                                <td class="text-center"><?php echo $investors['Id'] ?></td>
                                <td class="text-center" hidden><?php echo $investors['ProductId'] ?></td>
                                <td class="text-center" hidden><?php echo $investors['UserId'] ?></td>
                                <td>
                                    <?php echo $investors['NameProduct'] ?>
                                </td>
                                <td>
                                    <?php echo $investors['NameUser']; ?>
                                </td>
                                <td class="text-right">
                                    <?php echo $investors ? number_format($investors['Funds'], 0, '.', ',') : 0; ?>
                                </td>
                                <td class="text-right">
                                    <?php echo $investors ? number_format($investors['Percentage'], 0, '.', ',') : 0; ?>
                                </td>
                                <td class="text-right">
                                    <?php echo $investors ? number_format($investors['Dividends'], 0, '.', ',') : 0; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                        <tfoot align="right">
                        <tr>
                            <th></th>
                            <th hidden></th>
                            <th hidden></th>
                            <th></th>
                            <th></th>
                            <th class="text-right"></th>
                            <th class="text-center"></th>
                            <th class="text-right"></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <table class="table table-striped table-bordered table-hover" id="tlb_sanpham">
                <thead>
                <tr>
                    <th class="text-center">Id</th>
                    <th width="25%">Tên xe</th>
                    <th>Giá xe</th>
                    <th>Ngày nhập</th>
                    <th>Trạng thái</th>
                    <th>Ngày bán</th>
                    <th hidden></th>
                    <th hidden>Id hình thức</th>
                    <th>Hình thức</th>
                    <th hidden>Id người nhận</th>
                    <th>Người nhận</th>
                    <th hidden>Export Id</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($product as $products): ?>
                    <tr class="odd gradeX">
                        <td class="text-center"><?php echo $products['Id'] ?></td>
                        <td>
                            <?php echo $products['Name']; ?>
                        </td>
                        <td class="text-right">
                            <?php echo $products ? number_format($products['Price'], 0, '.', ',') : 0; ?>
                        </td>
                        <td class="text-center"><?php echo date_format(new DateTime($products['Createdate']), 'd-m-Y') ?></td>
                        <td class="text-center">
                            <?php
                            switch ($products['Status']) {
                                case '1':
                                    echo 'Đã bán';
                                    break;
                                case '2':
                                    echo 'Đã báo cáo';
                                    break;
                                default:
                                    echo 'Chưa bán';
                            }
                            ?>
                        </td>
                        <td class="text-center">
                            <?php echo $products['Date'] ? date_format(new DateTime($products['Date']), 'd-m-Y H:m:i') : ''; ?>
                        </td>
                        <td class="text-center" hidden>
                            <?php echo $products['Status']; ?>
                        </td>
                        <td class="text-center" hidden>
                            <?php echo $products['PaymentId']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $products['PaymentName']; ?>
                        </td>
                        <td class="text-center" hidden>
                            <?php echo $products['ReceiverId']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $products['ReceiverName']; ?>
                        </td>
                        <td class="text-center" hidden>
                            <?php echo $products['ExportId']; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#btnPerform').hide();
            $('#btnCancel').hide();
            $('#btnReport').hide();
            $('#tableInvestor tbody').on('click', 'tr', function (id) {
                var data = $('#tableInvestor').DataTable().row(this).data();
                if (data["Id"] !== undefined && data["Id"] !== null) {
                    var InvestorId = data["UserId"];
                    $('#ReceiverId').selectpicker('val', InvestorId);
                } else {
                    var InvestorId = data[2];
                    $('#ReceiverId').selectpicker('val', InvestorId);
                }
            });

            $("#btnCancel").click(function () {
                var ExportId = $("#ExportId").val();
                var ReceiverId = $("#ReceiverId").val();
                var PaymentId = $("#PaymentId").val();
                var ProductId = $("#ProductId").val();
                if (ProductId == '0' || ProductId == "") {
                    return alert("Chưa chọn sản phẩm");
                }
                var RestFunds = $("#RestFunds").val();
                if (confirm('Xác nhận hủy bán hàng sản phẩm này') == true) {
                    $.ajax({
                        type: "POST",
                        url: "admin/views/export/exportProducts.php",
                        data: {
                            'ExportId': ExportId,
                            'ProductId': ProductId,
                            'Status': 0,
                            'ReceiverId': ReceiverId,
                            'PaymentId': PaymentId
                        },
                        success: function (data) {
                            if (data > 0) {
                                alert('Thực hiện thành công');
                            } else {
                                alert('Thực hiện không thành công');
                            }
                            var ProductId = $("#ProductId").val();
                            loadDataTable(ProductId);
                            loadDataTableProduct();
                            reloadForm();
                        }
                    });
                }
            });

            $("#btnReport").click(function () {
                var ExportId = $("#ExportId").val();
                var ReceiverId = $("#ReceiverId").val();
                var PaymentId = $("#PaymentId").val();
                var ProductId = $("#ProductId").val();
                if (ProductId == '0' || ProductId == "") {
                    return alert("Chưa chọn sản phẩm");
                }
                var ProductPrice = $("#ProductPrice").val();
                if (confirm('Xác nhận sản phẩm này sẽ chốt báo cáo') == true) {
                    $.ajax({
                        type: "POST",
                        url: "admin/views/export/exportProducts.php",
                        data: {
                            'ExportId': ExportId,
                            'ProductId': ProductId,
                            'Status': 2,
                            'ReceiverId': ReceiverId,
                            'PaymentId': PaymentId,
                            'ProductPrice': ProductPrice
                        },
                        success: function (data) {
                            if (data > 0) {
                                alert('Thực hiện thành công');
                            } else {
                                alert('Thực hiện không thành công');
                            }
                            var ProductId = $("#ProductId").val();
                            loadDataTable(ProductId);
                            loadDataTableProduct();
                            reloadForm();
                        }
                    });
                }
            });

            $("#btnPerform").click(function () {
                var ExportId = $("#ExportId").val();
                var ReceiverId = $("#ReceiverId").val();
                if (ReceiverId == '-1' || ReceiverId == null) {
                    return alert('Chưa chọn Người nhận tiền');
                }
                var PaymentId = $("#PaymentId").val();
                var ProductId = $("#ProductId").val();
                if (ProductId == '0' || ProductId == "") {
                    return alert("Chưa chọn sản phẩm");
                }
                var RestFunds = $("#RestFunds").val();
                if (RestFunds !== "0") {
                    return alert('Chưa nhập đủ số tiền đầu tư cho sản phẩm');
                }
                if ($("#Status").val() == '1') {
                    return alert('Xe này đã bán');
                }
                if (confirm('Xác nhận bán sản phẩm') == true) {
                    $.ajax({
                        type: "POST",
                        url: "admin/views/export/exportProducts.php",
                        data: {
                            'ExportId': ExportId,
                            'ProductId': ProductId,
                            'Status': 1,
                            'ReceiverId': ReceiverId,
                            'PaymentId': PaymentId
                        },
                        success: function (data) {
                            if (data > 0) {
                                alert('Thực hiện thành công');
                            } else {
                                alert('Thực hiện không thành công');
                            }
                            var ProductId = $("#ProductId").val();
                            loadDataTable(ProductId);
                            loadDataTableProduct();
                            reloadForm();
                        }
                    });
                }
            });

            $('#tableInvestor').DataTable({
                responsive: true,
                searching: true,
                lengthMenu: [[5, 15, 30, -1], [5, 15, 30, "All"]],
                order: [[0, 'desc']],
                "scrollY": "100px",
                "scrollCollapse": true,
                "paging": false
            });

            $('#tlb_sanpham').DataTable({
                responsive: true,
                searching: true,
                lengthMenu: [[5, 15, 30, -1], [5, 15, 30, "All"]],
                order: [[0, 'desc']]
            });

            $('#tlb_sanpham tbody').on('click', 'tr', function (id) {
                var data = $('#tlb_sanpham').DataTable().row(this).data();
                if(data.length > 0){
                    $("#ExportId").val(data[11]);
                    $("#ProductId").val(data[0]);
                    $("#ProductName").val(data[1]);
                    $("#ProductPrice").val(data[2]);
                    $("#StatusShow").val(data[4]);
                    var status = data[6];
                    $("#Status").val(status);
                    if (status == 0) {
                        $('#btnPerform').show();
                        $('#btnCancel').hide();
                        $('#btnReport').hide();
                    } else if (status == 1) {
                        $('#btnPerform').hide();
                        $('#btnCancel').show();
                        $('#btnReport').show();
                    } else {
                        $('#btnPerform').hide();
                        $('#btnCancel').hide();
                        $('#btnReport').hide();
                    }
                    loadDataTable(data[0]);
                    var PaymentId = data[7] == "0" ? "" : data[7];
                    var ReceiverId = data[9] == "0" ? "" : data[9];
                    $("#PaymentId").selectpicker('val', PaymentId == "" ? "1" : PaymentId);
                    $('#ReceiverId').selectpicker('val', ReceiverId == "" ? "-1" : ReceiverId);
                } else {$("#ExportId").val(data["ExportId"]);
                    $("#ProductId").val(data["Id"]);
                    $("#ProductName").val(data["Name"]);
                    $("#ProductPrice").val(data["Price"]);
                    var status = data["Status"];
                    $("#Status").val(status);
                    if (status == 0) {
                        $("#StatusShow").val('Chưa bán');
                        $('#btnPerform').show();
                        $('#btnCancel').hide();
                        $('#btnReport').hide();
                    } else if (status == 1) {
                        $("#StatusShow").val('Đã bán');
                        $('#btnPerform').hide();
                        $('#btnCancel').show();
                        $('#btnReport').show();
                    } else {
                        $("#StatusShow").val('Đã báo cáo');
                        $('#btnPerform').hide();
                        $('#btnCancel').hide();
                        $('#btnReport').hide();
                    }
                    loadDataTable(data["Id"]);
                    var PaymentId = data["PaymentId"] == null ? "" : data["PaymentId"];
                    var ReceiverId = data["ReceiverId"] == null ? "" : data["ReceiverId"];
                    $("#PaymentId").selectpicker('val', PaymentId == "" ? "1" : PaymentId);
                    $('#ReceiverId').selectpicker('val', ReceiverId == "" ? "-1" : ReceiverId);
                }
            });

            $("input[data-type='currency']").on({
                keyup: function () {
                    formatCurrency($(this));
                },
                blur: function () {
                    formatCurrency($(this), "blur");
                }
            });

            function formatNumber(n) {
                // format number 1000000 to 1,234,567
                return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
            }

            function formatCurrency(input, blur) {
                // appends $ to value, validates decimal side
                // and puts cursor back in right position.

                // get input value
                var input_val = input.val();

                // don't validate empty input
                if (input_val === "") {
                    return;
                }

                // original length
                var original_len = input_val.length;

                // initial caret position
                var caret_pos = input.prop("selectionStart");

                // check for decimal
                if (input_val.indexOf(".") >= 0) {

                    // get position of first decimal
                    // this prevents multiple decimals from
                    // being entered
                    var decimal_pos = input_val.indexOf(".");

                    // split number by decimal point
                    var left_side = input_val.substring(0, decimal_pos);
                    var right_side = input_val.substring(decimal_pos);

                    // add commas to left side of number
                    left_side = formatNumber(left_side);

                    // validate right side
                    right_side = formatNumber(right_side);

                    // On blur make sure 2 numbers after decimal
                    if (blur === "blur") {
                        right_side;
                    }

                    // Limit decimal to only 2 digits
                    right_side = right_side.substring(0, 2);

                    // join number by .
                    input_val = left_side;

                } else {
                    // no decimal entered
                    // add commas to number
                    // remove all non-digits
                    input_val = formatNumber(input_val);
                    input_val = input_val;

                    // final formatting
                    if (blur === "blur") {
                        input_val;
                    }
                }

                // send updated string to input
                input.val(input_val);

                // put caret back in the right position
                var updated_len = input_val.length;
                caret_pos = updated_len - original_len + caret_pos;
                input[0].setSelectionRange(caret_pos, caret_pos);
            }

            function loadDataTableProduct() {
                $.ajax({
                    url: "admin/views/export/loadListProduct.php",
                    type: "GET",
                    success: function (json) {
                        $('#tlb_sanpham').DataTable().destroy();
                        $('#tlb_sanpham').DataTable({
                            responsive: true,
                            searching: true,
                            lengthMenu: [[5, 15, 30, -1], [5, 15, 30, "All"]],
                            order: [[0, 'desc']],
                            data: JSON.parse(json),
                            columns: [
                                {data: 'Id', align: 'center'},
                                {data: 'Name', align: 'center'},
                                {
                                    data: 'Price',
                                    align: 'center',
                                    render: $.fn.dataTable.render.number(',', '.')
                                },
                                {data: 'Createdate'},
                                {data: 'Status'},
                                {
                                    data: 'Date'
                                },
                                {data: 'Status'},
                                {data: 'PaymentId'},
                                {data: 'PaymentName'},
                                {data: 'ReceiverId'},
                                {data: 'ReceiverName'},
                                {data: 'ExportId'}
                            ],
                            columnDefs: [
                                {
                                    "targets": 0, // your case first column
                                    "className": "text-center",
                                    "width": "10%"
                                }, {
                                    "targets": 1, // your case first column
                                    "width": "20%"
                                }, {
                                    "targets": 2,
                                    "className": "text-right"
                                }, {
                                    "targets": 4,
                                    render: function (data, type, row) {
                                        return data == '1' ? 'Đã bán' : data == '2' ? 'Đã báo cáo' : 'Chưa bán'
                                    }
                                }, {
                                    "targets": 6,
                                    "visible": false
                                }, {
                                    "targets": 7,
                                    "visible": false
                                }, {
                                    "targets": 9,
                                    "visible": false
                                }, {
                                    "targets": 11,
                                    "visible": false
                                }
                            ]
                        });
                    }
                });
            }

            function loadDataTable(ProductId) {
                $.ajax({
                    url: "admin/views/import/loadListInvestor.php",
                    type: "POST",
                    data: {
                        'ProductId': ProductId
                    },
                    success: function (json) {
                        $('#tableInvestor').DataTable().destroy();
                        $('#tableInvestor').DataTable({
                            data: JSON.parse(json),
                            columns: [
                                {data: 'Id', align: 'center'},
                                {data: 'ProductId', align: 'center'},
                                {data: 'UserId', align: 'center'},
                                {data: 'NameProduct'},
                                {data: 'NameUser'},
                                {
                                    data: 'Funds',
                                    render: $.fn.dataTable.render.number(',', '.')
                                },
                                {data: 'Percentage'},
                                {
                                    data: 'Dividends',
                                    render: $.fn.dataTable.render.number(',', '.')
                                }
                            ],
                            columnDefs: [
                                {
                                    "targets": 0, // your case first column
                                    "className": "text-center",
                                    "width": "10%"
                                }, {
                                    "targets": 1,
                                    "visible": false,
                                }, {
                                    "targets": 2,
                                    "visible": false,
                                }, {
                                    "targets": 5, // your case first column
                                    "className": "text-right",
                                    "width": "25%"
                                }, {
                                    "targets": 6, // your case first column
                                    "className": "text-center",
                                    "width": "10%"
                                }, {
                                    "targets": 7, // your case first column
                                    "className": "text-right",
                                    "width": "20%"
                                }],
                            footerCallback: function (row, data, start, end, display) {
                                var api = this.api(), data;

                                // converting to interger to find total
                                var intVal = function (i) {
                                    return typeof i === 'string' ?
                                        i.replace(/[\$,]/g, '') * 1 :
                                        typeof i === 'number' ?
                                            i : 0;
                                };

                                var sumFunds = api
                                    .column(5)
                                    .data()
                                    .reduce(function (a, b) {
                                        return intVal(a) + intVal(b);
                                    }, 0);

                                var sumPercentage = api
                                    .column(6)
                                    .data()
                                    .reduce(function (a, b) {
                                        return intVal(a) + intVal(b);
                                    }, 0);

                                var sumDividends = api
                                    .column(7)
                                    .data()
                                    .reduce(function (a, b) {
                                        return intVal(a) + intVal(b);
                                    }, 0);
                                // Update footer by showing the total with the reference of the column index
                                $(api.column(4).footer()).html('Total');
                                $(api.column(5).footer()).html(formatNumber(sumFunds.toString()));
                                $(api.column(6).footer()).html(sumPercentage);
                                $(api.column(7).footer()).html(formatNumber(sumDividends.toString()));
                                $('#TotalFunds').val(formatNumber(sumFunds.toString()));
                                var price = Number($('#ProductPrice').val().replace(/[^0-9.-]+/g, ""));
                                var restfunds = price - sumFunds;
                                $('#RestFunds').val(formatNumber(restfunds.toString()));
                            }
                        });
                    }
                });
            }

            function reloadForm() {
                $("#ProductId").val("");
                $("#ProductName").val("");
                $("#ProductPrice").val("");
            }
        });
    </script>
<?php require('admin/views/shared/footer.php'); ?>