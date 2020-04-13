<style>
    input[type="file"] {
        display: block;
    }

    .hinhanhxe {
        max-height: 750px;
        max-width: 80%;
        border: 1px solid;
        padding: 1px;
        cursor: pointer;
    }

    .imageThumb {
        max-height: 75px;
        border: 1px solid;
        padding: 1px;
        cursor: pointer;
    }

    .pip {
        display: inline-block;
        margin: 10px 10px 0 0;
    }

    .remove {
        display: block;
        background: #444;
        border: 1px solid black;
        color: white;
        text-align: center;
        cursor: pointer;
        width: fit-content;
    }

    .remove:hover {
        background: white;
        color: black;
    }
</style>
<script src="themes/jquery/js/jquery-3.4.1.js" type="text/javascript"></script>
<script src="themes/jquery/blockUI/jquery.blockUI.js" type="text/javascript"></script>
<script src="admin/themes/js/jquery.alerts.js" type="text/javascript"></script>
<link href="admin/themes/css/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen"/>
<?php require('admin/views/shared/header.php'); ?>
<div id="page-wrapper">
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <b><?php echo $title ?></b>
        </div>
        <div></div>
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <div class="panel-body form-horizontal">
                    <fieldset>
                        <legend>Thông tin xe:</legend>
                        <input name="idxe" id="idxe" type="hidden" value="<?php echo $_GET["idxe"]; ?>"/>
                        <div class="form-group">
                            <label for="hangxe" class="col-sm-2 control-label">Hãng xe</label>
                            <div class="col-sm-10">
                                <select name="hangxe" class="form-control" id="hangxe">
                                    <option value="0" selected>Chọn hãng xe</option>
                                    <?php foreach ($subcategories as $subcategory) {
                                        $selected = '';
                                        if ($xe && ($xe['hangxe'] == $subcategory['Id'])) $selected = 'selected=""';
                                        echo '<option value="' . $subcategory['Id'] . '" ' . $selected . '>' . $subcategory['Name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tenxe" class="col-sm-2 control-label">Tên sản phẩm</label>
                            <div class="col-sm-10">
                                <input name="tenxe" type="text" value="<?php echo $xe ? $xe['tenxe'] : ''; ?>"
                                       class="form-control" id="tenxe" placeholder="Tên sản phẩm" required=""/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mausac" class="col-sm-2 control-label">Màu sắc</label>
                            <div class="col-sm-10">
                                <input name="mausac" type="text" value="<?php echo $xe ? $xe['mausac'] : ''; ?>"
                                       class="form-control" id="mausac" placeholder="Màu sắc"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="giavon" class="col-sm-2 control-label">Giá vốn</label>
                            <div class="col-sm-10">
                                <input name="giavon" type="text" data-type="currency" class="form-control" id="giavon"
                                       placeholder="0"
                                       value="<?php echo $xe ? number_format($xe['giavon'], 0, '.', ',') : ''; ?>"
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="chietkhaumua" class="col-sm-2 control-label">Chi phí mua</label>
                            <div class="col-sm-10">
                                <input name="chietkhaumua" type="text" id="chietkhaumua" data-type="currency"
                                       class="form-control" placeholder="0"
                                       value="<?php echo $xe ? number_format($xe['chietkhaumua'], 0, '.', ',') : ''; ?>"
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="chietkhauban" class="col-sm-2 control-label">Chi phí bán</label>
                            <div class="col-sm-10">
                                <input name="chietkhauban" type="text" id="chietkhauban" data-type="currency"
                                       class="form-control" placeholder="0"
                                       value="<?php echo $xe ? number_format($xe['chietkhauban'], 0, '.', ',') : ''; ?>"
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="soluong" class="col-sm-2 control-label">Số lượng</label>
                            <div class="col-sm-4">
                                <input name="soluong" type="number" value="1"
                                       value="<?php echo $xe ? $xe['soluong'] : ''; ?>"
                                       class="form-control" id="soluong" placeholder="0"
                                />
                            </div>
                            <label for="ngayban" class="col-sm-1 control-label">Ngày bán</label>
                            <div class="col-sm-4">
                                <input name="ngayban" id="ngayban" class="form-control"
                                       type="date" value="<?php echo date('Y-m-d'); ?>"
                                />
                            </div>
                        </div>
                        <div class="form-group" hidden>
                            <label for="chiphiphatsinh" class="col-sm-2 control-label">Chi phí phát sinh</label>
                            <div class="col-sm-10">
                                <input name="chiphiphatsinh" type="text" id="chiphiphatsinh" data-type="currency"
                                       class="form-control" placeholder="0"
                                       value="<?php echo $xe ? number_format($xe['chiphiphatsinh'], 0, '.', ',') : ''; ?>"
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="giaban" class="col-sm-2 control-label" style="color: red; font-size: large">Giá
                                bán</label>
                            <div class="col-sm-4">
                                <input name="giaban" type="text" id="giaban" data-type="currency" class="form-control"
                                       placeholder="0" style="font-size: large"
                                       value="<?php echo $xe ? $xe['giaban'] == "0" ? '' : number_format($xe['giaban'], 0, '.', ',') : ''; ?>"
                                />
                            </div>
                            <label for="tonglai" class="col-sm-1 control-label">Tổng lãi</label>
                            <div class="col-sm-4">
                                <input name="tonglai" type="text" id="tonglai" disabled data-type="currency"
                                       class="form-control" placeholder="0"
                                       value="<?php echo $xe ? number_format($xe['tonglai'], 0, '.', ',') : ''; ?>"
                                />
                            </div>
                            <div class="col-sm-1">
                                <button type="button" class="btn btn-warning" id="banxe">Bán xe</button>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Nhà đầu tư:</legend>
                        <div class="form-group">
                            <label for="chudautu" class="col-sm-2 control-label">Chủ đầu tư</label>
                            <div class="col-sm-8">
                                <select name="chudautu" class="form-control" id="chudautu"
                                        data-show-subtext="true" data-live-search="true">
                                    <option value="0" selected disabled>Chọn nhà đầu tư</option>
                                    <?php foreach ($dsNhaDauTu as $dsNhaDauTus) {
                                        echo '<option value="' . $dsNhaDauTus['manhadautu'] . '">' . $dsNhaDauTus['tennhadautu'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Số dư</label>
                            <div class="col-sm-3">
                                <input name="sodu" type="text" id="sodu" disabled
                                       data-type="currency" class="form-control text-right col-sm-4" placeholder="0"
                                />
                            </div>
                            <label class="col-sm-2 control-label">Vốn</label>
                            <div class="col-sm-3">
                                <input name="vondautu" type="text" id="vondautu"
                                       data-type="currency" class="form-control text-right col-sm-4" placeholder="0"
                                />
                            </div>
                            <label for="tonglai" class="col-sm-1 text-left control-label">Tái đầu tư</label>
                            <div class="col-sm-1 control-label pull-left">
                                <input name="taidautu" type="checkbox" id="taidautu" class="pull-left"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tile" class="col-sm-2 control-label">Tỉ lệ(%)</label>
                            <div class="col-sm-3">
                                <input name="tile" type="text" id="tile" disabled
                                       data-type="currency" class="form-control" placeholder="0"
                                />
                            </div>
                            <label for="tonglai" class="col-sm-2 control-label">Còn lại</label>
                            <div class="col-sm-3">
                                <input name="sotienconlai" type="text" id="sotienconlai" disabled data-type="currency"
                                       class="form-control" placeholder="0"
                                       value="<?php echo $xe ? $xe['sotienconlai'] == "0" ? '' : number_format($xe['sotienconlai'], 0, '.', ',') : ''; ?>"
                                />
                            </div>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-1">
                                <button type="button" class="btn btn-success" id="themnhadautu"
                                        name="themnhadautu">+
                                </button>
                            </div>
                        </div>
                        <div hidden>
                            <label for="tienlai" class="col-sm-1 control-label">Tiền lãi</label>
                            <div class="col-sm-2">
                                <input name="tienlai" type="text" id="tienlai" disabled
                                       data-type="currency" class="form-control" placeholder="0"
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"></label>
                            <div class="col-sm-10">
                                <table class="table table-striped table-bordered table-hover small" id="tbldsnhadautu"
                                       style="width:100%">
                                    <caption class="bg-primary text-center">Danh sách nhà đầu tư</caption>
                                    <thead class="bg-primary">
                                    <tr>
                                        <th class="text-center" width="10%">Mã</th>
                                        <th class="text-left">Tên nhà đầu tư</th>
                                        <th class="text-right" hidden>Mã xe</th>
                                        <th class="text-right">Vốn</th>
                                        <th class="text-center">Tái đầu tư</th>
                                        <th class="text-center">Tỉ lệ</th>
                                        <th class="text-right">Tiền lãi</th>
                                        <th class="text-center"><i class="fa fa-gears"></i></th>
                                    </tr>
                                    </thead>
                                    <tfoot align="right">
                                    <tr>
                                        <th></th>
                                        <th class="text-center"></th>
                                        <th hidden=""></th>
                                        <th class="text-right"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-right"></th>
                                        <th class="text-center"></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group">
                        <label for="image1" class="col-sm-2 control-label">Hình ảnh</label>
                        <div class="col-sm-10">
                            <div class="field" align="left">
                                <input class="form-control" accept="image/*" type="file" id="files" name="files[]"
                                       multiple style="border: #0c0b0b"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image1" class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <table class="table table-striped table-bordered table-hover small" id="dshinhanhxe"
                                   style="width:100%">
                                <thead class="bg-primary">
                                <tr>
                                    <th class="text-center">Id</th>
                                    <th class="text-center">Id xe</th>
                                    <th class="text-center">Hình ảnh</th>
                                    <th class="text-center" width="10%"><i class="fa fa-gears"></i></th>
                                </tr>
                                </thead>
                                <tfoot align="right">
                                <tr>
                                    <th class="text-center"></th>
                                    <th class="text-center"></th>
                                    <th class="text-center"></th>
                                    <th class="text-center"></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="button" class="btn btn-primary" id="capnhatxe">Cập nhật</button>
                            <a class="btn btn-warning" href="admin.php?controller=product">Trở về</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php require('admin/views/shared/footer.php'); ?>
<script>
    $(document).ready(function () {
        $('#taidautu').click(function (e) {
            var taidautu = $('#taidautu').is(":checked");
            if (taidautu) {
                f_taidautu();
            }
        });

        function f_taidautu() {
            var manhadautu = $("#chudautu").val();
            var vondautu = StringToNumber($("#vondautu").val());
            var sodu = StringToNumber($("#sodu").val());
            if (checkIf(manhadautu)) {
                jAlert('Chưa chọn chủ đầu tư', 'Thông báo');
                $('#taidautu').prop("checked", false);
                return true;
            }
            if (checkIf(vondautu)) {
                jAlert('Chưa nhập vốn đầu tư', 'Thông báo');
                $('#taidautu').prop("checked", false);
                return true;
            }
            if (vondautu > sodu) {

                jAlert('Tiền không đủ để tái đầu tư', 'Thông báo');
                $('#taidautu').prop("checked", false);
                return true;
            }
        }

        $("#giaban").focus();
        var trangthai = "<?php
            if (!empty($_GET["trangthai"])) {
                echo '1';
            } else {
                echo '0';
            }
            ?>";

        f_khoatrangthai(trangthai);

        function f_khoatrangthai(trangthai) {
            var bool = "";
            if (trangthai == "1") {
                bool = true;
            } else {
                bool = false;
            }
            $('#banxe').prop('disabled', bool);
            $('#capnhatxe').prop('disabled', bool);
            $('#themnhadautu').prop('disabled', bool);
            $('#hangxe').prop('disabled', bool);
            $('#tenxe').prop('disabled', bool);
            $('#mausac').prop('disabled', bool);
            $('#giavon').prop('disabled', bool);
            $('#chietkhaumua').prop('disabled', bool);
            $('#chietkhauban').prop('disabled', bool);
            $('#soluong').prop('disabled', bool);
            $('#chiphiphatsinh').prop('disabled', bool);
            $('#giaban').prop('disabled', bool);
            $('#chudautu').prop('disabled', bool);
            $('#vondautu').prop('disabled', bool);
            $('#taidautu').prop('disabled', bool);
            $('#files').prop('disabled', bool);
        }

        $("#banxe").click(function (e) {
            var giaban = StringToNumber($("#giaban").val());
            var tonglai = StringToNumber($("#tonglai").val());
            var idxe = $("#idxe").val();
            var ngayban = $("#ngayban").val();
            var sotienconlai = StringToNumber($("#sotienconlai").val());
            if (checkIf(giaban)) {
                return jAlert('Chưa nhập giá bán', 'Thông báo');
            }
            var datadschudautu = $('#tbldsnhadautu').DataTable().rows().data();
            var length = datadschudautu.length;
            var arrnhadautu = [];
            for (let i = 0; i < length; i++) {
                var obj = {
                    chudautu: datadschudautu[i]["manhadautu"],
                    vondautu: StringToNumber(datadschudautu[i]["vondautu"]),
                    taidautu: datadschudautu[i]["taidautu"],
                    tile: datadschudautu[i]["tile"],
                    tienlai: StringToNumber(datadschudautu[i]["tienlai"])
                };
                arrnhadautu.push(obj);
            }
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
                url: "admin.php?controller=product&action=banxe",
                type: "POST",
                data: {
                    idxe: idxe,
                    giaban: giaban,
                    tonglai: tonglai,
                    sotienconlai: sotienconlai,
                    ngayban: ngayban,
                    dsnhadautu: JSON.stringify(arrnhadautu)
                },
                success: function (response) {
                    if (response > 0) {
                        location.href = "admin.php?controller=product";
                    }
                }
            });
        });

        var dshinhanhxe_json = <?php echo $hinhanhxe_json; ?>;
        $('#dshinhanhxe').on('click', 'button.xoahinhanh', function (e) {
            if (trangthai == "1") {
                return jAlert('Trạng thái không thể xóa', 'Thông báo');
            }
            var $row = $(this).closest('tr');
            var data = $('#dshinhanhxe').DataTable().row($row).data();
            var idxe = data["idxe"];
            $.ajax({
                type: "POST",
                url: "admin.php?controller=product&action=xoahinhanh",
                data: {
                    id: data["id"],
                    idxe: idxe,
                    duongdan: data["duongdan"]
                },
                success: function (response) {
                    if (response != 0) {
                        $('#dshinhanhxe').DataTable().destroy();
                        $('#dshinhanhxe').DataTable({
                            searching: false,
                            lengthChange: false,
                            width: '100%',
                            responsive: true,
                            paging: false,
                            info: false,
                            ajax: {
                                type: 'POST',
                                url: "admin.php?controller=product&action=hinhanhxe",
                                data: {
                                    idxe: idxe
                                },
                                dataSrc: ''
                            },
                            columns: [
                                {data: "id", className: "text-center", visible: false},
                                {data: "idxe", className: "text-center", visible: false},
                                {
                                    data: "duongdan",
                                    className: "text-center",
                                    width: '50%',
                                    render: function (data, type, row) {
                                        return '<img class="hinhanhxe" src="' + data + '" />';
                                    }
                                },
                                {
                                    data: null,
                                    className: "text-center",
                                    width: '10%',
                                    defaultContent: '<button class="xoahinhanh"><i class="glyphicon glyphicon-trash"></i></button>'
                                }
                            ]
                        });
                    }
                }
            });
        });

        f_dshinhanhxe(dshinhanhxe_json);

        function f_dshinhanhxe(data_json) {
            $('#dshinhanhxe').DataTable().destroy();
            var table = $('#dshinhanhxe').DataTable({
                searching: false,
                lengthChange: false,
                width: '100%',
                responsive: true,
                paging: false,
                info: false,
                columns: [
                    {data: "id", className: "text-center", visible: false},
                    {data: "idxe", className: "text-center", visible: false},
                    {
                        data: "duongdan",
                        className: "text-center",
                        render: function (data, type, row) {
                            return '<img class="hinhanhxe" src="' + data + '" />';
                        }
                    },
                    {
                        data: null,
                        className: "text-center",
                        width: '10%',
                        defaultContent: '<button class="xoahinhanh"><i class="glyphicon glyphicon-trash"></i></button>'
                    }
                ]
            });
            table.rows.add(data_json).draw();
        }

        $("#capnhatxe").click(function (e) {
            var dataform = new FormData();
            var totalfiles = document.getElementById('files').files.length;
            for (var index = 0; index < totalfiles; index++) {
                dataform.append("images[]", document.getElementById('files').files[index]);
            }
            dataform.append("idxe", $("#idxe").val());
            dataform.append("hangxe", $("#hangxe").val());
            dataform.append("tenxe", $("#tenxe").val());
            dataform.append("mausac", $("#mausac").val());
            dataform.append("giavon", StringToNumber($("#giavon").val()));
            dataform.append("chietkhaumua", StringToNumber($("#chietkhaumua").val()));
            dataform.append("chietkhauban", StringToNumber($("#chietkhauban").val()));
            dataform.append("soluong", $("#soluong").val());
            dataform.append("chiphiphatsinh", StringToNumber($("#chiphiphatsinh").val()));
            dataform.append("giaban", StringToNumber($("#giaban").val()));
            dataform.append("tonglai", StringToNumber($("#tonglai").val()));
            dataform.append("sotienconlai", StringToNumber($("#sotienconlai").val()));
            var datadschudautu = $('#tbldsnhadautu').DataTable().rows().data();
            var length = datadschudautu.length;
            var arrnhadautu = [];
            for (let i = 0; i < length; i++) {
                var obj = {
                    chudautu: datadschudautu[i]["manhadautu"],
                    vondautu: StringToNumber(datadschudautu[i]["vondautu"]),
                    taidautu: datadschudautu[i]["taidautu"],
                    tile: datadschudautu[i]["tile"],
                    tienlai: StringToNumber(datadschudautu[i]["tienlai"])
                };
                arrnhadautu.push(obj);
            }
            dataform.append("dsnhadautu", JSON.stringify(arrnhadautu));
            var dtdshinhanhxe = $('#dshinhanhxe').DataTable().rows().data();
            var lengthhinh = dtdshinhanhxe.length;
            var arrhinhanhxe = [];
            for (let i = 0; i < lengthhinh; i++) {
                var obj = {
                    id: dtdshinhanhxe[i]["id"],
                    idxe: dtdshinhanhxe[i]["idxe"],
                    duongdan: dtdshinhanhxe[i]["duongdan"]
                };
                arrhinhanhxe.push(obj);
            }
            dataform.append("dshinhanhxe", JSON.stringify(arrhinhanhxe));
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
                url: "admin.php?controller=product&action=capnhatxe",
                type: "POST",
                data: dataform,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response > 0) {
                        location.href = "admin.php?controller=product&action=edit&idxe=" + $("#idxe").val() + "&trangthai=" + trangthai;
                    }
                }
            });
        });

        function disablethongtinxe(bool) {
            $("#tenxe").prop('disabled', bool);
        }

        $('#chudautu').on('change', function () {
            $.ajax({
                url: "admin.php?controller=product&action=laysodu",
                type: "POST",
                data: {
                    manhadautu: $("#chudautu").val()
                },
                success: function (response) {
                    $("#sodu").val(formatNumber(response));
                    $('#vondautu').focus();
                }
            });
        });

        $("#chietkhaumua").bind('input', function (e) {
            tinhtongtienlai();
            emptynhadautu();
        });

        $("#chietkhauban").bind('input', function (e) {
            tinhtongtienlai();
            emptynhadautu();
        });

        $("#chiphiphatsinh").bind('input', function (e) {
            tinhtongtienlai();
            emptynhadautu();
        });

        $("#giaban").bind('input', function (e) {
            tinhtongtienlai();
            emptynhadautu();
        });

        $("#giavon").bind('input', function (e) {
            tinhtongtienlai();
            emptynhadautu();
        });

        $("#vondautu").bind('input', function (e) {
            tinhtienlai();
        });

        function emptynhadautu() {
            $("#chudautu").val(0);
            $("#vondautu").val("");
            $("#tile").val("");
            $("#tienlai").val("");
            $("#sodu").val("");
            $("#taidautu").prop("checked", false);
        }

        $("#giaban").bind('input', function (e) {
            tinhtongtienlai();
        });

        function tinhtongtienlai() {
            var giavon = StringToNumber($("#giavon").val());
            var chietkhaumua = StringToNumber($("#chietkhaumua").val());
            var chietkhauban = StringToNumber($("#chietkhauban").val());
            var chiphiphatsinh = StringToNumber($("#chiphiphatsinh").val());
            var giaban = StringToNumber($("#giaban").val());
            var tonglai = giaban - (giavon + chietkhauban + chietkhaumua + chiphiphatsinh);
            $("#tonglai").val(formatNumber(tonglai.toString()));
        }

        function tinhtienlai() {
            var giavon = StringToNumber($("#giavon").val());
            var vondautu = StringToNumber($("#vondautu").val());
            var tile = (vondautu / giavon * 100).toFixed();
            $("#tile").val(tile);
            var tonglai = StringToNumber($("#tonglai").val());
            var tienlai = tile * tonglai / 100;
            $("#tienlai").val(formatNumber(tienlai.toString()));
        }

        $("#themnhadautu").click(function (e) {
            var tenxe = $("#tenxe").val();
            if (checkIf(tenxe)) {
                return jAlert('Chưa nhập tên xe', 'Thông báo', function (e) {
                    $("#tenxe").focus();
                });
            }
            var giavon = $("#giavon").val();
            if (checkIf(giavon)) {
                return jAlert('Chưa nhập giá vốn', 'Thông báo', function (e) {
                    $("#tenxe").focus();
                });
            }
            var manhadautu = $("#chudautu").val();
            if (manhadautu == "0" || checkIf(manhadautu)) {
                return jAlert('Chưa chọn nhà đầu tư', 'Thông báo', function (e) {
                    $("#chudautu").focus();
                });
            }
            var dscheck = $('#tbldsnhadautu').DataTable().columns(0).data()[0];
            var checkResult = checkSurvival(manhadautu, dscheck);
            if (checkResult) {
                return jAlert('Nhà đầu tư đã có', 'Thông báo');
            }
            var tennhadautu = $("#chudautu option:selected").text();
            var vondautu = $("#vondautu").val();
            if (checkIf(vondautu) || vondautu == "0") {
                return jAlert('Chưa nhập vốn đầu tư', 'Thông báo', function (e) {
                    $("#vondautu").focus();
                });
            }
            var sotienconlai = StringToNumber($("#sotienconlai").val());
            if (sotienconlai <= 0) {
                return jAlert('Đã đủ vốn đầu tư', 'Thông báo', function (e) {
                    $("#vondautu").focus();
                });
            }
            var taidautu = $('#taidautu').is(":checked") ? "1" : "0";
            var tile = $('#tile').val();
            var tienlai = $('#tienlai').val();
            var objnhadautu = [{
                manhadautu: manhadautu,
                tennhadautu: tennhadautu,
                maxedautu: 0,
                vondautu: vondautu,
                taidautu: taidautu,
                tile: tile,
                tienlai: tienlai
            }];
            dsnhadautu(objnhadautu);
            emptynhadautu();
        });

        var datachudautu = <?php echo $chudautuxejson; ?>;
        dsnhadautu(datachudautu);

        function dsnhadautu(data) {
            $('#tbldsnhadautu').DataTable().destroy();
            var table = $('#tbldsnhadautu').DataTable({
                searching: false,
                lengthChange: false,
                width: '100%',
                responsive: true,
                paging: false,
                info: false,
                columns: [
                    {data: "manhadautu", className: "text-center", width: '12%'},
                    {data: "tennhadautu"},
                    {data: "maxedautu", visible: false},
                    {
                        data: "vondautu", className: "text-right"
                    },
                    {
                        data: "taidautu",
                        className: "text-center",
                        width: '15%'
                    },
                    {data: "tile", width: '10%', className: "text-center"},
                    {
                        data: "tienlai", className: "text-right"
                    },
                    {
                        data: null,
                        className: "text-center",
                        width: '10%',
                        defaultContent: '<button class="xoanhadautu"><i class="glyphicon glyphicon-trash"></i></button>'
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

                    var tongtiendautu = api
                        .column(3)
                        .data()
                        .reduce(function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);
                    var tongtile = api
                        .column(5)
                        .data()
                        .reduce(function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    var tonglaidautu = api
                        .column(6)
                        .data()
                        .reduce(function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    // Update footer by showing the total with the reference of the column index
                    $(api.column(0).footer()).html('Tổng');
                    $(api.column(1).footer()).html(end);
                    $(api.column(3).footer()).html(formatNumber(tongtiendautu.toString()));
                    $(api.column(5).footer()).html(formatNumber(tongtile.toString()));
                    $(api.column(6).footer()).html(formatNumber(tonglaidautu.toString()));
                    var tienvon = StringToNumber($("#giavon").val());
                    $('#sotienconlai').val(formatNumber((tienvon - tongtiendautu).toString()));
                }
            });
            table.rows.add(data).draw();
        }

        $('#tbldsnhadautu').on('click', 'button.xoanhadautu', function (e) {
            if (trangthai == "1") {
                return jAlert('Trạng thái không thể xóa', 'Thông báo');
            }
            $('#tbldsnhadautu').DataTable()
                .row($(this).parents('tr'))
                .remove()
                .draw();
        });

        if (window.File && window.FileList && window.FileReader) {
            $("#files").on("change", function (e) {
                var files = e.target.files,
                    filesLength = files.length;
                if (filesLength <= 5) {
                    for (var i = 0; i < filesLength; i++) {
                        var id = "images_" + i;
                        var f = files[i];
                        var fileReader = new FileReader();
                        fileReader.onload = (function (e) {
                            var file = e.target;
                            $("<span class=\"pip\">" + "<span class=\"remove\">X</span>" +
                                "<img name=\"imageup\" class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                                "<br/>" + "</span>" + "<span class=\"pip\">").insertAfter("#files");
                            $(".remove").click(function () {
                                $(this).parent(".pip").remove();
                            });
                        });
                        fileReader.readAsDataURL(f);
                    }
                } else {
                    jAlert('Tối đa 5 hình trên một lần tải', 'Thông báo');
                }
            });
        }

        $('#hangxe').on('change', function () {
            $('#tenxe').focus();
        });

        $('#tenxe').keypress(function (e) {
            if (e.keyCode == 13) {
                var tenxe = $('#tenxe').val();
                if (checkIf(tenxe)) {
                    jAlert('Chưa nhập tên xe', 'Thông báo', function (e) {
                        $('#tenxe').focus();
                    });
                } else {
                    $('#mausac').focus();
                }
            }
        });
        $('#mausac').keypress(function (e) {
            if (e.keyCode === 13) {
                $('#giavon').focus();
            }
        });
        $('#giavon').keypress(function (e) {
            if (e.keyCode === 13) {
                $('#chietkhaumua').focus();
                tinhtongtienlai();
            }
        });
        $('#chietkhaumua').keypress(function (e) {
            if (e.keyCode === 13) {
                $('#chietkhauban').focus();
                tinhtongtienlai();
            }
        });
        $('#chietkhauban').keypress(function (e) {
            if (e.keyCode === 13) {
                $('#soluong').focus();
                tinhtongtienlai();
            }
        });
        $('#soluong').keypress(function (e) {
            if (e.keyCode === 13) {
                $('#giaban').focus();
                tinhtongtienlai();
            }
        });
        $('#chiphiphatsinh').keypress(function (e) {
            if (e.keyCode === 13) {
                $('#giaban').focus();
                tinhtongtienlai();
            }
        });
        $('#giaban').keypress(function (e) {
            if (e.keyCode === 13) {
                $('#vondautu').focus();
                tinhtongtienlai();
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
    });
</script>