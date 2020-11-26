<?php require('website/views/shared/header.php'); ?>
        <div class="panel panel-default" style="border-top-width: 0px;">
            <ol class="breadcrumb">
                <li><a href="website.php?controller=home"><b>Trang chủ</b></a></li>
                <li class="active">Định giá xe</li>
            </ol>
            <div class="panel-body">
                <div class="col-sm-12">
                    <div class="small form-horizontal">
                        <div class="form-group">
                            <label for="name" class="col-sm-12 text-center" style="color: red"><h4><b>ĐỊNH GIÁ XE</b></h4></label>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">Họ tên</label>
                            <div class="col-sm-9">
                                <input name="hoten" type="text" class="form-control text-capitalize" id="hoten"
                                       placeholder="Họ tên"
                                       required="" autofocus/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dienthoai" class="col-sm-3 control-label">Điện thoại <span style="color: red">(*)</span></label>
                            <div class="col-sm-9">
                                <input name="dienthoai" type="text" class="form-control" id="dienthoai"
                                       placeholder="Điện thoại" required=""/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="diachi" class="col-sm-3 control-label">Địa chỉ</label>
                            <div class="col-sm-9">
                                <input name="diachi" type="text" class="form-control" id="diachi" placeholder="Địa chỉ"
                                       required=""/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="thongtinxe" class="col-sm-3 control-label">Hãng xe</label>
                            <div class="col-sm-9">
                                <input name="hangxe" type="text" class="form-control" id="hangxe"
                                       placeholder="Hãng xe" required=""/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="thongtinxe" class="col-sm-3 control-label">Dòng xe</label>
                            <div class="col-sm-9">
                                <input name="dongxe" type="text" class="form-control" id="dongxe"
                                       placeholder="Dòng xe" required=""/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="thongtinxe" class="col-sm-3 control-label">Thông tin xe</label>
                            <div class="col-sm-9">
                                <textarea name="thongtinxe" type="text" class="form-control" id="thongtinxe"
                                          rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="giabanmongmuon" class="col-sm-3 control-label">Giá bán mong muốn</label>
                            <div class="col-sm-9">
                                <input name="giabanmongmuon" type="text" class="form-control" id="giabanmongmuon" data-type="currency"
                                       placeholder="Giá bán mong muốn" required=""/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label"></label>
                            <div class="col-sm-9">
                                <button type="button" class="btn btn-success" id="tieptheo"><i
                                            class="glyphicon glyphicon-arrow-right"></i> Tiếp theo
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script>
        $(document).ready(function () {
            $('#hoten').keypress(function (e) {
                if (e.keyCode == 13) {
                    $('#dienthoai').focus();
                }
            });

            $('#dienthoai').keypress(function (e) {
                if (e.keyCode == 13) {
                    $('#diachi').focus();
                }
            });
            $('#diachi').keypress(function (e) {
                if (e.keyCode == 13) {
                    $('#thongtinxe').focus();
                }
            });
            $('#thongtinxe').keypress(function (e) {
                if (e.keyCode == 13) {
                    $('#giabanmongmuon').focus();
                }
            });
            $('#giabanmongmuon').keypress(function (e) {
                if (e.keyCode == 13) {
                    $('#guithongtin').focus();
                }
            });
            $('#tieptheo').click(function (e) {
                var hoten = $("#hoten").val();
                if (checkIf(hoten)) {
                    return jAlert("Chưa nhập họ tên", "Thông báo", function (e) {
                        $("#hoten").focus();
                    });
                }
                var dienthoai = $("#dienthoai").val();
                if (checkIf(dienthoai)) {
                    return jAlert("Chưa nhập số điện thoại", "Thông báo", function (e) {
                        $("#hoten").focus();
                    });
                }
                var diachi = $("#diachi").val();
                var thongtinxe = $("#thongtinxe").val();
                var giabanmongmuon = $("#giabanmongmuon").val();
                var hangxe = $("#hangxe").val();
                var dongxe = $("#dongxe").val();
                $.ajax({
                    url: "website.php?controller=guibanxe&action=guithongtin",
                    type: "POST",
                    data: {
                        hoten: hoten,
                        dienthoai: dienthoai,
                        diachi: diachi,
                        thongtinxe: thongtinxe,
                        giabanmongmuon: giabanmongmuon,
                        hangxe: hangxe,
                        dongxe: dongxe
                    },
                    success: function (response) {
                        if (response > 0) {
                            // jAlert("Gửi thông tin thành công", "Thông báo", function (e) {
                                location.href = "website.php?controller=guibanxe&action=giaydangkiem&idguiban=" + response;
                            // });
                        } else {
                            jAlert("Gửi thông tin không thành công. Vui lòng liên hệ qua số điện thoại", "Thông báo", function (e) {
                            });
                        }
                    }
                });
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
<?php require('website/views/shared/footer.php'); ?>