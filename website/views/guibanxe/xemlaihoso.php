<?php require('website/views/shared/header.php'); ?>
        <div class="panel panel-default" style="border-top-width: 0px;">
            <ol class="breadcrumb">
                <li><a href="website.php?controller=home"><b>Trang chủ</b></a></li>
                <li><b>Định giá xe</b></li>
                <li><b>Hình ảnh giấy đăng kiểm</b></li>
                <li class="active">Hồ sơ đã gửi</li>
            </ol>
            <div class="panel-body">
                <div class="col-sm-12">
                    <div class="small form-horizontal">
                        <div class="form-group">
                            <label for="name" class="col-sm-12 text-center" style="color: red"><h4><b>HỒ SƠ GỬI BÁN XE</b></h4></label>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">Họ tên</label>
                            <div class="col-sm-9">
                                <input name="hoten" type="text" class="form-control text-capitalize" id="hoten"
                                       placeholder="Họ tên" disabled value="<?php echo $xeguiban["hoten"];?>" required="" autofocus/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dienthoai" class="col-sm-3 control-label">Điện thoại <span style="color: red">(*)</span></label>
                            <div class="col-sm-9">
                                <input name="dienthoai" type="text" class="form-control" id="dienthoai"
                                       placeholder="Điện thoại" required="" disabled value="<?php echo $xeguiban["dienthoai"];?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="diachi" class="col-sm-3 control-label">Địa chỉ</label>
                            <div class="col-sm-9">
                                <input name="diachi" type="text" class="form-control" id="diachi" placeholder="Địa chỉ"
                                       required="" disabled value="<?php echo $xeguiban["diachi"];?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="thongtinxe" class="col-sm-3 control-label">Hãng xe</label>
                            <div class="col-sm-9">
                                <input name="hangxe" type="text" class="form-control" id="hangxe"
                                       placeholder="Hãng xe" required="" disabled value="<?php echo $xeguiban["hangxe"];?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="thongtinxe" class="col-sm-3 control-label">Dòng xe</label>
                            <div class="col-sm-9">
                                <input name="dongxe" type="text" class="form-control" id="dongxe"
                                       placeholder="Dòng xe" required="" disabled value="<?php echo $xeguiban["dongxe"];?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="thongtinxe" class="col-sm-3 control-label">Thông tin xe</label>
                            <div class="col-sm-9">
                                <textarea name="thongtinxe" type="text" class="form-control" id="thongtinxe"
                                          disabled rows="5"><?php echo $xeguiban["thongtinxe"];?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="giabanmongmuon" class="col-sm-3 control-label">Giá bán mong muốn</label>
                            <div class="col-sm-9">
                                <input name="giabanmongmuon" type="text" class="form-control" id="giabanmongmuon" data-type="currency"
                                       placeholder="Giá bán mong muốn" required="" disabled value="<?php echo $xeguiban["giabanmongmuon"];?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="trangchu" class="col-sm-3 control-label"></label>
                            <div class="col-sm-9">
                                <button type="button" class="btn btn-success" id="trangchu"><i
                                            class="glyphicon glyphicon-home"></i> Trang chủ
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script>
        $(document).ready(function () {
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
        });
    </script>
<?php require('website/views/shared/footer.php'); ?>