<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <b>Cập nhật chủ đầu tư</b>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="col-sm-7">
                    <table class="table table-striped table-bordered table-hover" id="tlb_sanpham">
                        <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th>Tên xe</th>
                            <th>Giá xe</th>
                            <th>Ngày nhập</th>
                            <th hidden>Import Id</th>
                            <th>C.K mua</th>
                            <th>C.K bán</th>
                            <th>C.P phát sinh</th>
                            <th>Giá bán</th>
                            <th hidden>Import UserId</th>
                            <th>Người thực hiện</th>
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
                                    <?php echo number_format($products['Price'], 0, '.', ',') == 0 ? '' : number_format($products['Price'], 0, '.', ','); ?>
                                </td>
                                <td class="text-center"><?php echo date_format(new DateTime($products['Createdate']), 'd-m-Y') ?></td>
                                <td hidden>
                                    <?php echo $products['ImportId']; ?>
                                </td>
                                <td class="text-right">
                                    <?php echo number_format($products['PurchaseDiscount'], 0, '.', ',') != 0 ? number_format($products['PurchaseDiscount'], 0, '.', ',') : ''; ?>
                                </td>
                                <td class="text-right">
                                    <?php echo number_format($products['SaleDiscount'], 0, '.', ',') != 0 ? number_format($products['SaleDiscount'], 0, '.', ',') : ''; ?>
                                </td>
                                <td class="text-right">
                                    <?php echo number_format($products['CostsIncurred'], 0, '.', ',') != 0 ? number_format($products['CostsIncurred'], 0, '.', ',') : ''; ?>
                                </td>
                                <td class="text-right">
                                    <?php echo number_format($products['SalePrice'], 0, '.', ',') != 0 ? number_format($products['SalePrice'], 0, '.', ',') : ''; ?>
                                </td>
                                <td hidden>
                                    <?php echo $products['ImportUserId']; ?>
                                </td>
                                <td>
                                    <?php echo $products['ImportUserName']; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="tableInvestor"
                               name="tableInvestor">
                            <thead>
                            <tr>
                                <th class="text-center" width="10%">Id</th>
                                <th class="text-center" hidden>ProductId</th>
                                <th class="text-center" hidden>UserId</th>
                                <th>Sản phẩm</th>
                                <th width="20%">Chủ đầu tư</th>
                                <th class="text-right" width="20%">Vốn</th>
                                <th class="text-right" width="10%">Tỉ lệ</th>
                                <th class="text-right" width="20%">Tiền lãi</th>
                                <th class="text-right" width="20%" hidden>Tái đầu tư</th>
                                <!--                    <th class="text-center">Chức năng</th>-->
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
                                        <!--                            <a href="admin.php?controller=group&amp;action=edit&amp;gid=-->
                                        <?php //echo $investors['Id']; ?><!--">-->
                                        <?php //echo $investors['NameUser']; ?><!--</a>-->
                                    </td>
                                    <td class="text-right">
                                        <?php echo $investors ? number_format($investors['Funds'], 0, '.', ',') : 0;
                                        ?>
                                    </td>
                                    <td class="text-right">
                                        <?php echo $investors ? number_format($investors['Percentage'], 0, '.', ',') : 0;
                                        ?>
                                    </td>
                                    <td class="text-right">
                                        <?php echo $investors ? number_format($investors['Dividends'], 0, '.', ',') : 0;
                                        ?>
                                    </td>
                                    <td class="text-right" hidden>
                                        <?php echo $investors['Reinvestment']; ?>
                                    </td>
                                    <!--                        <td class="text-center">-->
                                    <!--                            <a href="admin.php?controller=group&amp;action=edit&amp;gid=-->
                                    <?php //echo $investors['Id']; ?><!--"-->
                                    <!--                               class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>-->
                                    <!--                            <a href="admin.php?controller=group&amp;action=delete&amp;gid=-->
                                    <?php //echo $investors['Id']; ?><!--"-->
                                    <!--                               class="text-danger deleteitem"><i class="glyphicon glyphicon-remove"></i></a>-->
                                    <!--                        </td>-->
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
                                <th class="text-right"></th>
                                <th class="text-right"></th>
                                <th class="text-right" hidden></th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="col-sm-5"
                <div class="panel-body">
                    <form id="category-form" class="form-horizontal" method="post"
                          enctype="multipart/form-data" role="form">
                        <input id="ImportUserId" name="ImportUserId" type="hidden"/>
                        <input id="InvestorId" name="InvestorId" type="hidden"/>
                        <input id="ProductId" name="ProductId" type="hidden"/>
                        <input id="ImportId" name="ImportId" type="hidden"/>
                        <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Tên sản phẩm</label>
                            <div class="col-sm-8">
                                <input name="name" type="text" value=""
                                       class="form-control" id="tenSanPham" placeholder="Tên sản phẩm"
                                       required=""/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="link" class="col-sm-4 control-label">Giá xe</label>
                            <div class="col-sm-8">
                                <input name="gia" type="text" value="" data-type="currency" disabled
                                       class="form-control text-right" id="gia" placeholder="Giá xe"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="link" class="col-sm-4 control-label">C.K mua</label>
                            <div class="col-sm-8">
                                <input name="PurchaseDiscount" type="text" value="" data-type="currency"
                                       class="form-control text-right" id="PurchaseDiscount"
                                       placeholder="Chiết khấu mua"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="link" class="col-sm-4 control-label">Chiết khấu bán</label>
                            <div class="col-sm-8">
                                <input name="SaleDiscount" type="text" value="" data-type="currency"
                                       class="form-control text-right" id="SaleDiscount" placeholder="Chiết khấu bán"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="link" class="col-sm-4 control-label">C.P phát sinh</label>
                            <div class="col-sm-8">
                                <input name="CostsIncurred" type="text" value="" data-type="currency"
                                       class="form-control text-right" id="CostsIncurred"
                                       placeholder="Chi phí phát sinh"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="link" class="col-sm-4 control-label">Giá bán</label>
                            <div class="col-sm-8">
                                <input name="SalePrice" type="text" value="" data-type="currency"
                                       class="form-control text-right" id="SalePrice" placeholder="Giá bán"/>
                            </div>
                        </div>
                        <div class="form-group" hidden>
                            <label for="link" class="col-sm-4 control-label">Nhân viên</label>
                            <div class="col-sm-8">
                                <input name="ImportUserName" type="text" value="" data-type="currency" disabled
                                       class="form-control text-right" id="ImportUserName"
                                       placeholder="Nhân viên nhập"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="link" class="col-sm-4 control-label">Chủ đầu tư</label>
                            <div class="col-sm-8">
                                <select name="UserId" class="form-control" id="UserId" required=""
                                        data-show-subtext="true" data-live-search="true">
                                    <option value="-1" selected disabled>Chọn nhà đầu tư</option>
                                    <?php foreach ($userInvestor as $userInvestors) {
                                        echo '<option value="' . $userInvestors['Id'] . '">' . $userInvestors['Name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="link" class="col-sm-4 control-label">Vốn</label>
                            <div class="col-sm-8">
                                <input name="Funds" type="text" value=""
                                       data-type="currency"
                                       class="form-control text-right" id="Funds" placeholder="Vốn"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="link" class="col-sm-4 control-label">Tái đầu tư</label>
                            <div class="col-sm-8 text-right">
                                <input name="Reinvestment" type="checkbox" id="Reinvestment"/>
                            </div>
                        </div>
                        <div class="form-group" hidden>
                            <label for="link" class="col-sm-4 control-label">Tổng đầu tư</label>
                            <div class="col-sm-8">
                                <input name="TotalFunds" type="text" value=""
                                       data-type="currency" disabled
                                       class="form-control text-right" id="TotalFunds" placeholder="Tổng đầu tư"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="link" class="col-sm-4 control-label">Số tiền còn lại</label>
                            <div class="col-sm-8">
                                <input name="RestFunds" type="text" value=""
                                       data-type="currency" disabled
                                       class="form-control text-right" id="RestFunds" placeholder="Số tiền còn lại"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="link" class="col-sm-4 control-label">Tỉ lệ(%)</label>
                            <div class="col-sm-8">
                                <input name="Percentage" type="text" value="" disabled
                                       class="form-control text-right" id="Percentage" placeholder="Tỉ lệ thụ hưởng"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="link" class="col-sm-4 control-label">Tiền lãi</label>
                            <div class="col-sm-8">
                                <input name="Dividends" type="text" value=""
                                       data-type="currency" disabled
                                       class="form-control text-right" id="Dividends" placeholder="Tiền lãi"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="link" class="col-sm-4 control-label"></label>
                            <div class="col-sm-8">
                                <button id="btnInsertInvestor" name="btnInsertInvestor" type="button"
                                        class="btn btn-primary">Thêm
                                </button>
                                <button id="btnDeleteInvestor" name="btnDeleteInvestor" type="button"
                                        class="btn btn-danger">Xóa
                                </button>
                                <button id="btnReset" name="btnReset" type="button" class="btn btn-info">Reset</button>
                            </div>
                        </div>
                    </form>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
        </div>
    </div>
    </div>
    <script>
        $(document).ready(function () {
            function checkSurplus(UserId, Funds) {
                $.ajax({
                    type: "POST",
                    url: "admin/views/import/checkSurplusInvestor.php",
                    data: {
                        'UserId': UserId,
                        'Funds': Funds
                    },
                    success: function (data) {
                        if (data == '0') {
                            $("#Reinvestment").prop('checked', false);
                            alert('Số dư không đủ tái đầu tư');
                            return false;
                        } else {
                            return true;
                        }
                    }
                });
            }

            $('#Reinvestment').change(function (i) {
                if ($('#Reinvestment').is(":checked")) {
                    var Funds = $('#Funds').val();
                    var UserId = $('#UserId').val();
                    if (UserId) {
                        // $.ajax({
                        //     type: "POST",
                        //     url: "admin/views/import/checkSurplusInvestor.php",
                        //     data: {
                        //         'UserId': UserId,
                        //         'Funds': Funds
                        //     },
                        //     success: function (data) {
                        //         if(data == '0'){
                        //             alert('Số dư không đủ để tái đầu tư');
                        //             $("#Reinvestment").prop('checked', false);
                        //         }
                        //     }
                        // });
                        return checkSurplus(UserId, Funds);
                    } else {
                        return alert('Chưa chọn chủ đầu tư');
                    }
                }
            });

            $('#UserId').change(function () {
                $('#InvestorId').val('');
                $('#Funds').val('');
                $('#Percentage').val('');
                $('#Dividends').val('');
                $("#Reinvestment").prop('checked', false);
            });

            $('#Funds').blur(function (value) {
                calPercentage(StrToNum($('#Funds').val()))
            });

            $('#tableInvestor tbody').on('click', 'tr', function (id) {
                var data = $('#tableInvestor').DataTable().row(this).data();
                if (data["Id"] !== undefined && data["Id"] !== null) {
                    var userId = data["UserId"];
                    var funds = data["Funds"];
                    var InvestorId = data["Id"];
                    var Percentage = data["Percentage"];
                    var Dividends = data["Dividends"];
                    var Reinvestment = data["Reinvestment"];
                    $('#UserId').selectpicker('val', userId);
                    $("#Funds").val(formatNumber(funds));
                    $("#InvestorId").val(formatNumber(InvestorId));
                    $("#Percentage").val(Percentage);
                    $("#Dividends").val(formatNumber(Dividends));
                    $("#Reinvestment").prop('checked', Reinvestment == '1' ? true : false);
                } else {
                    var InvestorId = data[0];
                    var userId = data[2];
                    var funds = data[5];
                    var Percentage = calPercentage(data[6]);
                    var Dividends = data[7];
                    $('#UserId').selectpicker('val', userId);
                    $("#Funds").val(formatNumber(funds));
                    $("#InvestorId").val(formatNumber(InvestorId));
                    // calPercentage(funds);
                }
            });

            function calPercentage(Funds) {
                var TotalFunds = $('#gia').val();
                var PercenFunds = Funds / StrToNum(TotalFunds) * 100;
                var CostsFunds = StrToNum($('#gia').val()) + StrToNum($('#PurchaseDiscount').val()) + StrToNum($('#SaleDiscount').val()) + StrToNum($('#CostsIncurred').val());// chi phi
                var Interest = StrToNum($('#SalePrice').val()) - CostsFunds; // tien lai
                var PercenFixed = PercenFunds.toFixed(0);
                var InterestInvestor = (Interest * PercenFunds / 100).toFixed(0);
                $("#Percentage").val(PercenFixed);
                $("#Dividends").val(formatNumber(InterestInvestor));
            }

            $('#tlb_sanpham tbody').on('click', 'tr', function (id) {
                var data = $('#tlb_sanpham').DataTable().row(this).data();
                if (data["Id"] !== undefined && data["Id"] !== null) {
                    $("#ProductId").val(data["Id"]);
                    $("#tenSanPham").val(data["Name"]);
                    $("#gia").val(formatNumber(data["Price"]));
                    $('#UserId').selectpicker('val', "-1");
                    $("#ImportUserId").val(data["ImportUserId"] == null || "" ? <?php echo json_encode($_SESSION['user']['Id'])?> : data["ImportUserId"]);
                    $("#ImportId").val(data["ImportId"]);
                    $("#PurchaseDiscount").val(formatNumber(StrToNum(data["PurchaseDiscount"]).toFixed(0)));
                    $("#SaleDiscount").val(formatNumber(StrToNum(data["SaleDiscount"]).toFixed(0)));
                    $("#CostsIncurred").val(formatNumber(StrToNum(data["CostsIncurred"]).toFixed(0)));
                    $("#SalePrice").val(formatNumber(StrToNum(data["SalePrice"]).toFixed(0)));
                    $("#ImportUserName").val(data["ImportUserName"] == null || "" ? <?php echo json_encode($_SESSION['user']['Name'])?> : data["ImportUserName"]);
                    loadDataTable(data["ProductId"]);
                } else {
                    $("#ProductId").val(data[0]);
                    $("#tenSanPham").val(data[1]);
                    $("#gia").val(data[2]);
                    $('#UserId').selectpicker('val', "-1");
                    $("#ImportUserId").val(data[9] == "" || null ? <?php echo json_encode($_SESSION['user']['Id'])?> : data[9]);
                    $("#ImportId").val(data[4]);
                    $("#PurchaseDiscount").val(data[5]);
                    $("#SaleDiscount").val(data[6]);
                    $("#CostsIncurred").val(data[7]);
                    $("#SalePrice").val(data[8]);
                    $("#ImportUserName").val(data[10] == "" || null ? <?php echo json_encode($_SESSION['user']['Name'])?> : data[10]);
                    loadDataTable(data[0]);
                }
            });

            $("#btnDeleteInvestor").click(function () {
                if (confirm('Bạn chắc chắn muốn xóa thông tin này') == true) {
                    var InvestorId = $("#InvestorId").val();
                    if (InvestorId == '0' || InvestorId == "") {
                        return alert('Chưa chọn chủ đầu tư');
                    }

                    $.ajax({
                        type: "POST",
                        url: "admin/views/import/deleteInvestor.php",
                        data: {
                            'InvestorId': InvestorId
                        },
                        success: function (data) {
                            if (data > 0) {
                                alert('Xóa thành công');
                            } else {
                                alert('Xóa không thành công');
                            }
                            var ProductId = $("#ProductId").val();
                            loadDataTable(ProductId);
                            // loadDataTableProduct();
                            reloadForm();
                        }
                    });
                }
            });

            $("#btnInsertInvestor").click(function () {
                var ImportId = $("#ImportId").val();//Import id
                var PurchaseDiscount = $("#PurchaseDiscount").val();//chiet khau mua
                var SaleDiscount = $("#SaleDiscount").val();//chiet khau ban
                var CostsIncurred = $("#CostsIncurred").val();//chi phi phat sinh
                var SalePrice = $("#SalePrice").val();//chi phi phat sinh
                var ImportUserId = $("#ImportUserId").val();//User import
                var Percentage = $("#Percentage").val();//Ti le
                var Dividends = $("#Dividends").val();//Tien lai
                var Reinvestment = $('#Reinvestment').is(":checked") ? 1 : 0;

                var InvestorId = $("#InvestorId").val();
                var ProductId = $("#ProductId").val();
                if (ProductId == '0' || ProductId == "") {
                    return alert("Chưa chọn sản phẩm");
                }
                var UserId = $("#UserId").val();
                if (UserId == '-1' || UserId == null) {
                    return alert('Chưa chọn chủ đầu tư');
                }
                var survival = checkSurvival(UserId);
                if (survival == true) {
                    return alert('Chủ đầu tư đã có trong danh sách.');
                }
                var Funds = $("#Funds").val();
                if (Funds == '0' || Funds == "") {
                    return alert('Chưa nhập số vốn');
                }
                var restFunds = $('#RestFunds').val();
                if (StrToNum(Funds) > StrToNum(restFunds)) {
                    return alert('Tiền đầu tư vượt quá số tiền còn lại');
                }
                if ($('#Reinvestment').is(":checked")) {
                    $.ajax({
                        type: "POST",
                        url: "admin/views/import/checkSurplusInvestor.php",
                        data: {
                            'UserId': UserId,
                            'Funds': Funds
                        },
                        success: function (data) {
                            if (data == '0') {
                                $("#Reinvestment").prop('checked', false);
                                alert('Số dư không đủ tái đầu tư');
                                return false;
                            } else {
                                loadInvestor();
                            }
                        }
                    });
                } else {
                    loadInvestor();
                }
            });

            function loadInvestor() {
                $.ajax({
                    type: "POST",
                    url: "admin/views/import/updateInvestor.php",
                    data: {
                        'InvestorId': InvestorId,
                        'ProductId': ProductId,
                        'UserId': UserId,
                        'Funds': Funds,
                        'ImportId': ImportId,
                        'PurchaseDiscount': PurchaseDiscount,
                        'SaleDiscount': SaleDiscount,
                        'CostsIncurred': CostsIncurred,
                        'SalePrice': SalePrice,
                        'ImportUserId': ImportUserId,
                        'Percentage': Percentage,
                        'Dividends': Dividends,
                        'Reinvestment': Reinvestment
                    },
                    success: function (data) {
                        if (data > 0) {
                            alert('Thêm thành công');
                        } else {
                            alert('Thêm không thành công');
                        }
                        reloadForm();
                        loadDataTable(ProductId);
                        loadDataTableProduct();
                    }
                });
            }

            $('#UserId').selectpicker();

            $('#tableInvestor').DataTable({
                responsive: true,
                order: [[1, 'desc']],
                lengthMenu: [[5, 15, 30, -1], [5, 15, 30, "All"]],
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
                    $(api.column(6).footer()).html(formatNumber(sumPercentage.toString()));
                    $(api.column(7).footer()).html(formatNumber(sumDividends.toString()));
                }
            });

            $('#tlb_sanpham').DataTable({
                lengthMenu: [[5, 15, 30, -1], [5, 15, 30, "All"]],
                order: [[0, 'desc']],
                scrollX: true
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
                if (n !== null) {
                    return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                }
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
                                {
                                    data: 'Percentage'
                                },
                                {
                                    data: 'Dividends',
                                    render: $.fn.dataTable.render.number(',', '.')
                                },
                                {
                                    data: 'Reinvestment'
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
                                    "width": "20%"
                                }, {
                                    "targets": 6, // your case first column
                                    "className": "text-right",
                                    "width": "10%"
                                }, {
                                    "targets": 7, // your case first column
                                    "className": "text-right",
                                    "width": "20%"
                                }, {
                                    "targets": 8,
                                    "visible": false
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
                                $(api.column(6).footer()).html(formatNumber(sumPercentage.toString()));
                                $(api.column(7).footer()).html(formatNumber(sumDividends.toString()));
                                $('#TotalFunds').val(formatNumber(sumFunds.toString()));
                                var price = Number($('#gia').val().replace(/[^0-9.-]+/g, ""));
                                var restfunds = price - sumFunds;
                                $('#RestFunds').val(formatNumber(restfunds.toString()));
                                var lengthInvestor = data.length;
                                if (lengthInvestor > 0) {
                                    $("#PurchaseDiscount").prop('disabled', true);
                                    $("#SaleDiscount").prop('disabled', true);
                                    $("#CostsIncurred").prop('disabled', true);
                                    $("#SalePrice").prop('disabled', true);
                                } else {
                                    $("#PurchaseDiscount").prop('disabled', false);
                                    $("#SaleDiscount").prop('disabled', false);
                                    $("#CostsIncurred").prop('disabled', false);
                                    $("#SalePrice").prop('disabled', false);
                                }
                            }
                        });
                    }
                });
            }

            function StrToNum(str) {
                if (str !== null) {
                    return Number(str.replace(/[^0-9.-]+/g, ""));
                }
            }

            function loadDataTableProduct() {
                $.ajax({
                    url: "admin/views/import/loadListProducts.php",
                    type: "POST",
                    success: function (json) {
                        $('#tlb_sanpham').DataTable().destroy();
                        $('#tlb_sanpham').DataTable({
                            data: JSON.parse(json),
                            scrollX: true,
                            order: [[0, 'desc']],
                            lengthMenu: [[5, 15, 30, -1], [5, 15, 30, "All"]],
                            columns: [
                                {data: 'Id', align: 'center'},
                                {data: 'Name', align: 'center'},
                                {
                                    data: 'Price',
                                    render: $.fn.dataTable.render.number(',', '.')
                                },
                                {data: 'Createdate'},
                                {data: 'ImportId'},
                                {
                                    data: 'PurchaseDiscount',
                                    render: $.fn.dataTable.render.number(',', '.')
                                },
                                {
                                    data: 'SaleDiscount',
                                    render: $.fn.dataTable.render.number(',', '.')
                                },
                                {
                                    data: 'CostsIncurred',
                                    render: $.fn.dataTable.render.number(',', '.')
                                },
                                {
                                    data: 'SalePrice',
                                    render: $.fn.dataTable.render.number(',', '.')
                                },
                                {
                                    data: 'ImportUserId'
                                },
                                {
                                    data: 'ImportUserName'
                                }
                            ],
                            columnDefs: [
                                {
                                    "targets": 0, // your case first column
                                    "className": "text-center",
                                    "width": "10%"
                                }, {
                                    "targets": 4,
                                    visible: false
                                }, {
                                    "targets": 9,
                                    visible: false
                                }]
                        });
                    }
                });
            }

            function checkSurvival(UserId) { //Kiem tra ton tai
                var survivals = $('#tableInvestor').DataTable().columns(2).data()[0];
                for (const value of survivals) {
                    if (value == UserId) {
                        return true;
                    }
                }
                return false;
            }

            $('#btnReset').click(function () {
                $("#PurchaseDiscount").val("");
                $("#SaleDiscount").val("");
                $("#CostsIncurred").val("");
                $("#SalePrice").val("");
            });

            function reloadForm() {
                // $("#ImportUserId").val("");
                // $("#ImportId").val("");
                $("#InvestorId").val("");
                // $("#ProductId").val("");
                // $("#tenSanPham").val("");
                // $("#gia").val("");
                $('#UserId').selectpicker('val', "-1");
                $("#Funds").val("");
                $("#TotalFunds").val("");
                $("#RestFunds").val("");
                // $("#PurchaseDiscount").val("");
                // $("#SaleDiscount").val("");
                // $("#CostsIncurred").val("");
                // $("#SalePrice").val("");
                // $("#ImportUserName").val("");
                $("#Percentage").val("");
                $("#Dividends").val("");
                $("#Reinvestment").prop('checked', false);
            }
        });
    </script>
<?php require('admin/views/shared/footer.php'); ?>