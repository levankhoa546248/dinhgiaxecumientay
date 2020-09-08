<?php require('website/views/shared/header.php'); ?>
    <div class="container-top" style="margin-top: 50px">
        <div class="panel panel-default">
            <div class="block-title text-center"><h5 class="block-title-name">TÌM MUA XE</h5>
            </div>
            <div class="panel-body">
                <div class="col-sm-12">
                    <div class="small form-horizontal">
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">Họ tên</label>
                            <div class="col-sm-9">
                                <input name="hoten" type="text" class="form-control" id="hoten" placeholder="Họ tên"
                                       required="" autofocus/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dienthoai" class="col-sm-3 control-label">Điện thoại</label>
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
                            <label for="thongtinxe" class="col-sm-3 control-label">Thông tin xe</label>
                            <div class="col-sm-9">
                                <input name="thongtinxe" type="text" class="form-control" id="thongtinxe"
                                       placeholder="Thông tin xe" required=""/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="giamuamongmuon" class="col-sm-3 control-label">Giá mua mong muốn</label>
                            <div class="col-sm-9">
                                <input name="giamuamongmuon" type="text" class="form-control" id="giamuamongmuon"
                                       placeholder="Giá mua mong muốn" required=""/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label"></label>
                            <div class="col-sm-9">
                                <button type="button" class="btn btn-primary" id="guithongtin"><i
                                            class="glyphicon glyphicon-send"></i> Gửi thông tin
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#guithongtin').click(function (e) {
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
                var giamuamongmuon = $("#giamuamongmuon").val();
                $.ajax({
                    url: "website.php?controller=timmuaxe&action=guithongtin",
                    type: "POST",
                    data: {
                        hoten: hoten,
                        dienthoai: dienthoai,
                        diachi: diachi,
                        thongtinxe: thongtinxe,
                        giamuamongmuon: giamuamongmuon
                    },
                    success: function (response) {
                        if (response > 0) {
                            jAlert("Gửi thông tin thành công", "Thông báo", function (e) {
                                $("#hoten").prop("disabled", "disabled");
                                $("#dienthoai").prop("disabled", "disabled");
                                $("#diachi").prop("disabled", "disabled");
                                $("#thongtinxe").prop("disabled", "disabled");
                                $("#giamuamongmuon").prop("disabled", "disabled");
                                $("#guithongtin").hide();
                            });
                        } else {
                            jAlert("Gửi thông tin không thành công. Vui lòng liên hệ qua số điện thoại", "Thông báo", function (e) {
                            });
                        }
                    }
                });
            });
        });
    </script>
<?php require('website/views/shared/footer.php'); ?>