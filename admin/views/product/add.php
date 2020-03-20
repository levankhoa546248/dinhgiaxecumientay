<style>
    input[type="file"] {
        display: block;
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
<?php require('admin/views/shared/header.php');
$idxe = select_id_auto("xe");
?>
<div id="page-wrapper">
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <b><?php echo $title ?></b>
        </div>
        <div></div>
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <div class="panel-body">
                    <form id="product-form" class="form-horizontal" method="post"
                          enctype="multipart/form-data" role="form">
                        <input name="idxe" type="hidden" value="<?php echo $idxe; ?>"/>
                        <div class="form-group">
                            <label for="hangxe" class="col-sm-2 control-label">Hãng xe</label>
                            <div class="col-sm-10">
                                <select name="hangxe" class="form-control" id="hangxe">
                                    <option value="0" selected>Chọn hãng xe</option>
                                    <?php foreach ($subcategories as $subcategory) {
                                        $selected = '';
                                        echo '<option value="' . $subcategory['Id'] . '" ' . $selected . '>' . $subcategory['Name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tenxe" class="col-sm-2 control-label">Tên sản phẩm</label>
                            <div class="col-sm-10">
                                <input name="tenxe" type="text"
                                       class="form-control" id="tenxe" placeholder="Tên sản phẩm" required=""/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mausac" class="col-sm-2 control-label">Màu sắc</label>
                            <div class="col-sm-10">
                                <input name="mausac" type="text"
                                       class="form-control" id="mausac" placeholder="Màu sắc"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="giavon" class="col-sm-2 control-label">Giá vốn</label>
                            <div class="col-sm-10">
                                <input name="giavon" type="text" data-type="currency"
                                       class="form-control" id="giavon" placeholder="0"
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="chietkhaumua" class="col-sm-2 control-label">Chiết khấu mua</label>
                            <div class="col-sm-10">
                                <input name="chietkhaumua" type="text" id="chietkhaumua"
                                       data-type="currency" class="form-control" placeholder="0"
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="chietkhauban" class="col-sm-2 control-label">Chiết khấu bán</label>
                            <div class="col-sm-10">
                                <input name="chietkhauban" type="text" id="chietkhauban"
                                       data-type="currency" class="form-control" placeholder="0"
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="soluong" class="col-sm-2 control-label">Số lượng</label>
                            <div class="col-sm-10">
                                <input name="soluong" type="number" value="1"
                                       class="form-control" id="soluong" placeholder="0"
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="chiphiphatsinh" class="col-sm-2 control-label">Chi phí phát sinh</label>
                            <div class="col-sm-10">
                                <input name="chiphiphatsinh" type="text" id="chiphiphatsinh"
                                       data-type="currency" class="form-control" placeholder="0"
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="giaban" class="col-sm-2 control-label">Giá bán</label>
                            <div class="col-sm-3">
                                <input name="giaban" type="text" id="giaban"
                                       data-type="currency" class="form-control" placeholder="0"
                                />
                            </div>
                            <label for="tonglai" class="col-sm-1 control-label">Tổng lãi</label>
                            <div class="col-sm-2">
                                <input name="tonglai" type="text" id="tonglai" disabled
                                       data-type="currency" class="form-control" placeholder="0"
                                />
                            </div>
                            <label for="tonglai" class="col-sm-1 control-label">Còn lại</label>
                            <div class="col-sm-3">
                                <input name="sotienconlai" type="text" id="sotienconlai" disabled
                                       data-type="currency" class="form-control" placeholder="0"
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="chudautu" class="col-sm-2 control-label">Chủ đầu tư</label>
                            <div class="col-sm-3">
                                <select name="chudautu" class="form-control" id="chudautu"
                                        data-show-subtext="true" data-live-search="true">
                                    <option value="0" selected disabled>Chọn nhà đầu tư</option>
                                    <?php foreach ($dsNhaDauTu as $dsNhaDauTus) {
                                        echo '<option value="' . $dsNhaDauTus['manhadautu'] . '">' . $dsNhaDauTus['tennhadautu'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                            <label class="col-sm-1 control-label">Vốn</label>
                            <div class="col-sm-2">
                                <input name="vondautu" type="text" id="vondautu"
                                       data-type="currency" class="form-control text-right col-sm-4" placeholder="0"
                                />
                            </div>
                            <label for="tonglai" class="col-sm-1 control-label" style="padding-left: 0px">Tái đầu
                                tư</label>
                            <div class="col-sm-1 control-label">
                                <input name="taidautu" type="checkbox" id="taidautu" class="pull-left"/>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-success pull-right" id="themnhadautu"
                                        name="themnhadautu">+
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tile" class="col-sm-2 control-label">Tỉ lệ(%)</label>
                            <div class="col-sm-3">
                                <input name="tile" type="text" id="tile" disabled
                                       data-type="currency" class="form-control" placeholder="0"
                                />
                            </div>
                            <label for="tienlai" class="col-sm-1 control-label">Tiền lãi</label>
                            <div class="col-sm-2">
                                <input name="tienlai" type="text" id="tienlai" disabled
                                       data-type="currency" class="form-control" placeholder="0"
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="giaban" class="col-sm-2 control-label"></label>
                            <div class="col-sm-10">
                                <table class="table table-striped table-bordered table-hover small" id="dsnhadautu"
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
                                        <th></th>
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
                        <div class="form-group">
                            <label for="image1" class="col-sm-2 control-label">Hình ảnh</label>
                            <div class="col-sm-10">
                                <div class="field" align="left">
                                    <input class="form-control" accept="image/*" type="file" id="files" name="files[]"
                                           multiple/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="button" class="btn btn-primary" id="themmoixe">Thêm mới</button>
                                <a class="btn btn-warning" href="admin.php?controller=product">Trở về</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php require('admin/views/shared/footer.php'); ?>
<script>
    $(document).ready(function () {
        $("#themmoixe").click(function (e) {
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
            var datadschudautu = $('#dsnhadautu').DataTable().rows().data();
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
            $.ajax({
                url: "admin.php?controller=product&action=add",
                type: "POST",
                data: dataform,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response > 0){
                        location.href = "admin.php?controller=product";
                    }
                }
            });
        });

        function disablethongtinxe(bool) {
            $("#tenxe").prop('disabled', bool);
        }

        $('#chudautu').on('change', function () {
            $('#vondautu').focus();
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
            var giaban = $("#giaban").val();
            if (checkIf(giaban)) {
                return jAlert('Chưa nhập giá bán', 'Thông báo', function (e) {
                    $("#tenxe").focus();
                });
            }
            var manhadautu = $("#chudautu").val();
            if (manhadautu == "0" || checkIf(manhadautu)) {
                return jAlert('Chưa chọn nhà đầu tư', 'Thông báo', function (e) {
                    $("#chudautu").focus();
                });
            }
            var dscheck = $('#dsnhadautu').DataTable().columns(0).data()[0];
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
            var taidautu = $('#taidautu').is(":checked");
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

        function dsnhadautu(data) {
            $('#dsnhadautu').DataTable().destroy();
            var table = $('#dsnhadautu').DataTable({
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
                    {data: "vondautu", className: "text-right"},
                    {
                        data: "taidautu",
                        className: "text-center",
                        width: '15%'
                    },
                    {data: "tile", width: '10%', className: "text-center"},
                    {data: "tienlai", className: "text-right"},
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

                    // Update footer by showing the total with the reference of the column index
                    $(api.column(1).footer()).html('Tổng');
                    $(api.column(3).footer()).html(formatNumber(tongtiendautu.toString()));
                    var tienvon = StringToNumber($("#giavon").val());
                    $('#sotienconlai').val(formatNumber((tienvon - tongtiendautu).toString()));
                }
            });
            table.rows.add(data).draw();
        }

        $('#dsnhadautu').on('click', 'button.xoanhadautu', function (e) {
            $('#dsnhadautu').DataTable()
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
                                "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                                "<br/>" + "</span>").insertAfter("#files");
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
            if (e.keyCode == 13) {
                $('#giavon').focus();
            }
        });
        $('#giavon').keypress(function (e) {
            if (e.keyCode == 13) {
                $('#chietkhaumua').focus();
                tinhtongtienlai();
            }
        });
        $('#chietkhaumua').keypress(function (e) {
            if (e.keyCode == 13) {
                $('#chietkhauban').focus();
                tinhtongtienlai();
            }
        });
        $('#chietkhauban').keypress(function (e) {
            if (e.keyCode == 13) {
                $('#soluong').focus();
                tinhtongtienlai();
            }
        });
        $('#soluong').keypress(function (e) {
            if (e.keyCode == 13) {
                $('#chiphiphatsinh').focus();
                tinhtongtienlai();
            }
        });
        $('#chiphiphatsinh').keypress(function (e) {
            if (e.keyCode == 13) {
                $('#giaban').focus();
                tinhtongtienlai();
            }
        });
        $('#giaban').keypress(function (e) {
            if (e.keyCode == 13) {
                var giaban = $("#giaban").val();
                if (checkIf(giaban)) {
                    jAlert('Chưa nhập giá bán', 'Thông báo', function (e) {
                        $('#giaban').focus();
                    });
                } else {
                    $('#vondautu').focus();
                }
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