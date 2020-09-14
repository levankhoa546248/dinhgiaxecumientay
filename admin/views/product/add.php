<html class="no-js" lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="admin/themes/images/favicon.png">
    <title><?php echo isset($title) ? $title : 'Quản trị hệ thống'; ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="admin/themes/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/themes/css/sb-admin-2.css" rel="stylesheet">
    <script src="admin/themes/js/jquery.min.js"></script>
    <script src="admin/themes/js/jquery.alerts.js" type="text/javascript"></script>
    <link href="admin/themes/css/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen"/>
    <script src="admin/themes/js/selfjs.js" type="text/javascript"></script>
    <script type="text/javascript" src="themes/jquery/blockUI/jquery.blockUI.js"></script>
    <script src="admin/themes/js/bootstrap.min.js"></script>
    <script src="admin/themes/js/metisMenu.min.js"></script>
    <script src="admin/themes/js/sb-admin-2.js"></script>
    <script src="admin/themes/js/jquery.dataTables.min.js"></script>
    <script src="admin/themes/js/dataTables.bootstrap.min.js"></script>

    <link href="themes/fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
    <link href="themes/fileinput/themes/explorer-fas/theme.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="themes/fileinput/js/plugins/piexif.js" type="text/javascript"></script>
    <script src="themes/fileinput/js/plugins/sortable.js" type="text/javascript"></script>
    <script src="themes/fileinput/js/fileinput.js" type="text/javascript"></script>
    <script src="themes/fileinput/js/locales/fr.js" type="text/javascript"></script>
    <script src="themes/fileinput/js/locales/es.js" type="text/javascript"></script>
    <script src="themes/fileinput/themes/fas/theme.js" type="text/javascript"></script>
    <script src="themes/fileinput/themes/explorer-fas/theme.js" type="text/javascript"></script>

</head>
<body>

<div id="wrapper">
    <?php
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    require('admin/views/shared/navbar.php'); ?>
    <div id="page-wrapper">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <b><?php echo $title ?></b>
            </div>
            <div></div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <div class="panel-body form-horizontal">
                        <input name="idxe" id="idxe" type="hidden" value="<?php echo $idxe; ?>"/>
                        <div class="form-group">
                            <label for="tenxe" class="col-sm-2 control-label">Tên sản phẩm</label>
                            <div class="col-sm-10">
                                <input name="tenxe" type="text"
                                       class="form-control" id="tenxe" placeholder="Tên sản phẩm" required=""
                                       autofocus/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="hangxe" class="col-sm-2 control-label">Hãng xe</label>
                            <div class="col-sm-4">
                                <select name="hangxe" class="form-control" id="hangxe"
                                        onChange="getDongXe(this.value);">
                                    <option disabled selected>Chọn hãng xe</option>
                                    <?php foreach ($subcategories as $subcategory) {
                                        $selected = '';
                                        echo '<option value="' . $subcategory['Id'] . '" ' . $selected . '>' . $subcategory['Name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                            <label for="dongxe" class="col-sm-2 control-label">Dòng xe</label>
                            <div class="col-sm-4">
                                <select name="dongxe" class="form-control" id="dongxe">
                                    <option disabled selected>Chọn dòng xe</option>
                                    <?php foreach ($dongxes as $dongxe) {
                                        $selected = '';
                                        echo '<option value="' . $dongxe['id'] . '" ' . $selected . '>' . $dongxe['dongxe'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nhienlieu" class="col-sm-2 control-label">Nhiên liệu</label>
                            <div class="col-sm-4">
                                <select name="nhienlieu" class="form-control" id="nhienlieu">
                                    <option disabled selected>Chọn nhiên liệu</option>
                                    <?php foreach ($nhienlieus as $nhienlieu) {
                                        $selected = '';
                                        echo '<option value="' . $nhienlieu['id'] . '" ' . $selected . '>' . $nhienlieu['name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                            <label for="hopso" class="col-sm-2 control-label">Hộp số</label>
                            <div class="col-sm-4">
                                <select name="hopso" class="form-control" id="hopso">
                                    <option disabled selected>Chọn hộp số</option>
                                    <?php foreach ($hopsos as $hopso) {
                                        $selected = '';
                                        echo '<option value="' . $hopso['id'] . '" ' . $selected . '>' . $hopso['name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="chongoi" class="col-sm-2 control-label">Chỗ ngồi</label>
                            <div class="col-sm-4">
                                <select name="chongoi" class="form-control" id="chongoi">
                                    <option disabled selected>Chọn chỗ ngồi</option>
                                    <?php foreach ($chongois as $chongoi) {
                                        $selected = '';
                                        echo '<option value="' . $chongoi['id'] . '" ' . $selected . '>' . $chongoi['name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                            <label for="xuatxu" class="col-sm-2 control-label">Xuất xứ</label>
                            <div class="col-sm-4">
                                <select name="xuatxu" class="form-control" id="xuatxu">
                                    <option disabled selected>Chọn xuất xứ</option>
                                    <?php foreach ($xuatxus as $xuatxu) {
                                        $selected = '';
                                        echo '<option value="' . $xuatxu['id'] . '" ' . $selected . '>' . $xuatxu['name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mausac" class="col-sm-2 control-label">Màu sắc</label>
                            <div class="col-sm-4">
                                <select name="mausac" class="form-control" id="mausac">
                                    <option disabled selected>Chọn màu sắc</option>
                                    <?php foreach ($mausacs as $mausac) {
                                        $selected = '';
                                        echo '<option value="' . $mausac['id'] . '" ' . $selected . '>' . $mausac['name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                            <label for="namsanxuat" class="col-sm-2 control-label">Năm sản xuất</label>
                            <div class="col-sm-4">
                                <select name="namsanxuat" class="form-control" id="namsanxuat">
                                    <option disabled selected>Chọn năm sản xuất</option>
                                    <?php foreach ($namsanxuats as $namsanxuat) {
                                        $selected = '';
                                        echo '<option value="' . $namsanxuat['id'] . '" ' . $selected . '>' . $namsanxuat['name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="chietkhaumua" class="col-sm-2 control-label">Chi phí mua</label>
                            <div class="col-sm-4">
                                <input name="chietkhaumua" type="text" id="chietkhaumua"
                                       data-type="currency" class="form-control text-right" placeholder="0"
                                />
                            </div>
                            <label for="chietkhauban" class="col-sm-2 control-label">Chi phí bán</label>
                            <div class="col-sm-4">
                                <input name="chietkhauban" type="text" id="chietkhauban"
                                       data-type="currency" class="form-control text-right" placeholder="0"
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="giavon" class="col-sm-2 control-label">Giá vốn</label>
                            <div class="col-sm-4">
                                <input name="giavon" type="text" data-type="currency"
                                       class="form-control text-right" id="giavon" placeholder="0"
                                />
                            </div>
                            <label for="giavon" class="col-sm-2 control-label">Giá bán</label>
                            <div class="col-sm-4">
                                <input name="giaban" type="text" data-type="currency"
                                       class="form-control text-right" id="giaban" placeholder="0"
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="soluong" class="col-sm-2 control-label">Số lượng</label>
                            <div class="col-sm-1">
                                <input name="soluong" type="number" value="1"
                                       class="form-control text-center" id="soluong" placeholder="0"
                                />
                            </div>
                            <label for="ngaynhap" class="col-sm-1 control-label">Ngày</label>
                            <div class="col-sm-2">
                                <input name="ngaynhap" id="ngaynhap" class="form-control"
                                       type="date" value="<?php echo date('Y-m-d'); ?>"
                                />
                            </div>
                            <label for="tonglai" class="col-sm-2 control-label">Còn lại</label>
                            <div class="col-sm-4">
                                <input name="sotienconlai" type="text" id="sotienconlai" disabled
                                       data-type="currency" class="form-control text-right" placeholder="0"
                                />
                            </div>
                        </div>
                        <div class="form-group" hidden>
                            <label for="chiphiphatsinh" class="col-sm-2 control-label">Chi phí phát sinh</label>
                            <div class="col-sm-10">
                                <input name="chiphiphatsinh" type="text" id="chiphiphatsinh"
                                       data-type="currency" class="form-control" placeholder="0"
                                />
                            </div>
                        </div>
                        <div class="form-group" hidden>
                            <label for="tonglai" class="col-sm-1 control-label">Tổng lãi</label>
                            <div class="col-sm-2">
                                <input name="tonglai" type="text" id="tonglai" disabled
                                       data-type="currency" class="form-control" placeholder="0"
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="chudautu" class="col-sm-2 control-label">Chủ đầu tư</label>
                            <div class="col-sm-10">
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
                            <label class="col-sm-1 control-label">Vốn</label>
                            <div class="col-sm-3">
                                <input name="vondautu" type="text" id="vondautu"
                                       data-type="currency" class="form-control text-right col-sm-4" placeholder="0"
                                />
                            </div>
                            <label for="tonglai" class="col-sm-1 control-label" style="padding-left: 0px">Tái đầu
                                tư</label>
                            <div class="col-sm-1 control-label">
                                <input name="taidautu" type="checkbox" id="taidautu" class="pull-left"/>
                            </div>
                            <div class="col-sm-1">
                                <button type="button" class="btn btn-success pull-right" id="themnhadautu"
                                        name="themnhadautu">+
                                </button>
                            </div>
                        </div>
                        <div class="form-group" hidden>
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
                                        <th class="text-center" width="10%">Tái đầu tư</th>
                                        <th class="text-center">Tỉ lệ</th>
                                        <th class="text-right" hidden>Tiền lãi</th>
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
                                        <th class="text-right" hidden></th>
                                        <th class="text-center"></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!--                                        <form class="form-horizontal" method="post" enctype="multipart/form-data" role="form"-->
                        <!--                                              action="admin.php?controller=product&action=themhinhanhxe">-->
                        <div class="form-group">
                            <div class="col-sm-12">
                                <?php require('admin/views/product/themhinhanhxe.php'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="button" class="btn btn-primary" id="themmoixe">Thêm mới</button>
                                <a class="btn btn-warning" href="admin.php?controller=product">Trở về</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php //require('admin/views/shared/footer.php'); ?>
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
            var giavon = StringToNumber($("#giavon").val());
            if (checkIf(manhadautu)) {
                jAlert('Chưa chọn chủ đầu tư', 'Thông báo');
                $('#taidautu').prop("checked", false);
                return true;
            }
            if (checkIf(vondautu)) {
                jAlert('Chưa nhập vốn đầu tư', 'Thông báo', function (e) {
                    $("#vondautu").focus();
                });
                $('#taidautu').prop("checked", false);
                return true;
            }
            if (vondautu > sodu) {
                jAlert('Tiền không đủ để tái đầu tư', 'Thông báo', function (e) {
                    $("#vondautu").focus();
                });
                $('#taidautu').prop("checked", false);
                return true;
            }
            if (giavon == 0) {
                $('#taidautu').prop("checked", false);
                return jAlert("Chưa chọn nhập giá vốn", "Thông báo", function (e) {
                    $("#giavon").focus();
                });
            }
            if (giavon < vondautu) {
                $('#taidautu').prop("checked", false);
                return jAlert("Vốn đầu tư lớn hơn giá vốn", "Thông báo", function (e) {
                    $("#vondautu").focus();
                });
            }
        }

        $("#themmoixe").click(function (e) {
            // themhinhanhxe();
            f_themxemoi();
        });

        function f_themxemoi() {
            var idxe = $("#idxe").val();
            var tenxe = $("#tenxe").val();
            if (checkIf(tenxe)) {
                return jAlert("Chưa nhập tên xe", "Thông báo", function (e) {
                    $("#tenxe").focus();
                });
            }
            var hangxe = $("#hangxe").val();
            if (checkIf(hangxe)) {
                return jAlert("Chưa chọn hãng xe", "Thông báo", function (e) {
                    $("#hangxe").focus();
                });
            }
            var dongxe = $("#dongxe").val();
            if (checkIf(dongxe)) {
                return jAlert("Chưa chọn dòng xe", "Thông báo", function (e) {
                    $("#dongxe").focus();
                });
            }
            var nhienlieu = $("#nhienlieu").val();
            if (checkIf(nhienlieu)) {
                return jAlert("Chưa chọn nhiên liệu", "Thông báo", function (e) {
                    $("#nhienlieu").focus();
                });
            }
            var hopso = $("#hopso").val();
            if (checkIf(hopso)) {
                return jAlert("Chưa chọn hộp số", "Thông báo", function (e) {
                    $("#hopso").focus();
                });
            }
            var chongoi = $("#chongoi").val();
            if (checkIf(chongoi)) {
                return jAlert("Chưa chọn chỗ ngồi", "Thông báo", function (e) {
                    $("#chongoi").focus();
                });
            }
            var xuatxu = $("#xuatxu").val();
            if (checkIf(xuatxu)) {
                return jAlert("Chưa chọn xuất xứ", "Thông báo", function (e) {
                    $("#xuatxu").focus();
                });
            }
            var mausac = $("#mausac").val();
            if (checkIf(mausac)) {
                return jAlert("Chưa chọn màu sắc", "Thông báo", function (e) {
                    $("#mausac").focus();
                });
            }
            var namsanxuat = $("#namsanxuat").val();
            if (checkIf(namsanxuat)) {
                return jAlert("Chưa chọn năm sản xuất", "Thông báo", function (e) {
                    $("#namsanxuat").focus();
                });
            }
            if (checkIf($("#giavon").val())) {
                return jAlert("Chưa chọn nhập giá vốn", "Thông báo", function (e) {
                    $("#giavon").focus();
                });
            }
            var giavon = StringToNumber($("#giavon").val());
            var chietkhaumua = StringToNumber($("#chietkhaumua").val());
            var chietkhauban = StringToNumber($("#chietkhauban").val());
            var soluong = $("#soluong").val();
            var ngaynhap = $("#ngaynhap").val();
            var chiphiphatsinh = StringToNumber($("#chiphiphatsinh").val());
            var giaban = StringToNumber($("#giaban").val());
            var tonglai = StringToNumber($("#tonglai").val());
            var sotienconlai = StringToNumber($("#sotienconlai").val());
            if (sotienconlai > 0) {
                return jAlert("Số tiền đầu tư chưa đủ so với giá vốn", "Thông báo", function (e) {
                    $("#vondautu").focus();
                });
            }
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
            var dsnhadautu = JSON.stringify(arrnhadautu);
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
                url: "admin.php?controller=product&action=themmoixe",
                type: "POST",
                data: {
                    idxe: idxe,
                    hangxe: hangxe,
                    dongxe: dongxe,
                    nhienlieu: nhienlieu,
                    hopso: hopso,
                    chongoi: chongoi,
                    namsanxuat: namsanxuat,
                    xuatxu: xuatxu,
                    tenxe: tenxe,
                    mausac: mausac,
                    giavon: giavon,
                    chietkhaumua: chietkhaumua,
                    chietkhauban: chietkhauban,
                    soluong: soluong,
                    ngaynhap: ngaynhap,
                    chiphiphatsinh: chiphiphatsinh,
                    giaban: giaban,
                    tonglai: tonglai,
                    sotienconlai: sotienconlai,
                    dsnhadautu: dsnhadautu
                },
                success: function (response) {
                    if (response > 0) {
                        location.href = "admin.php?controller=product";
                    }
                }
            });
        }

        function themhinhanhxe() {
            var idxe = $("#idxe").val();
            var tenxe = $("#tenxe").val();
            var dataform = new FormData();
            var totalfiles = document.getElementById('files').files.length;
            dataform.append("idxe", idxe);
            dataform.append("tenxe", tenxe);
            if (totalfiles > 0) {
                // var totalfiles = $(".imageThumb").length;
                for (var index = 0; index < totalfiles; index++) {
                    dataform.append("files[]", document.getElementById('files').files[index]);
                    // dataform.append("images[]", $(".imageThumb")[index].src);
                }
                $.ajax({
                    url: "admin.php?controller=product&action=themhinhanhxe",
                    type: "POST",
                    data: dataform,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        f_themxemoi();
                    }
                });
            } else {
                f_themxemoi();
            }
        }

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
            var hangxe = $("#hangxe").val();
            if (hangxe == "0") {
                return jAlert("Chưa chọn hãng xe", "Thông báo", function (e) {
                    $("#hangxe").focus();
                });
            }
            var tenxe = $("#tenxe").val();
            if (checkIf(tenxe)) {
                return jAlert('Chưa nhập tên xe', 'Thông báo', function (e) {
                    $("#tenxe").focus();
                });
            }
            var giavon = StringToNumber($("#giavon").val());
            if (checkIf(giavon) || giavon == 0) {
                return jAlert('Chưa nhập giá vốn', 'Thông báo', function (e) {
                    $("#giavon").focus();
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
            if (giavon < StringToNumber(vondautu)) {
                return jAlert("Vốn đầu tư lớn hơn giá vốn", "Thông báo", function (e) {
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
                    {
                        data: "vondautu", className: "text-right"
                    },
                    {
                        data: "taidautu",
                        className: "text-center",
                        width: '10%'
                    },
                    {data: "tile", width: '10%', className: "text-center"},
                    {data: "tienlai", className: "text-right", visible: false},
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
                $('#vondautu').focus();
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

    function getDongXe(val) {
        $.ajax({
            type: "POST",
            url: "admin.php?controller=dongxe&action=getdongxe",
            data: 'idhangxe=' + val,
            success: function (data) {
                $("#dongxe").html(data);
                // getCity();
            }
        });
    }
</script>