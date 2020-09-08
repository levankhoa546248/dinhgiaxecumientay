<?php require('admin/views/shared/header.php'); ?>
<!-- Navigation -->
<div id="page-wrapper">
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <b><?php echo $title ?></b>
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <div class="panel-body">
                    <div class="col-sm-12">
                        <div class="small form-horizontal">
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Id thông tin</label>
                                <div class="col-sm-9">
                                    <input name="id" type="text" class="form-control text-capitalize" id="id"
                                           placeholder="Id thông tin xe gửi bán"
                                           required="" autofocus value="<?php echo $xeguiban ? $xeguiban["id"] : "" ?>"
                                           disabled/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Họ tên</label>
                                <div class="col-sm-9">
                                    <input name="hoten" type="text" class="form-control text-capitalize" id="hoten"
                                           placeholder="Họ tên" disabled
                                           required="" value="<?php echo $xeguiban ? $xeguiban["hoten"] : "" ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dienthoai" class="col-sm-3 control-label">Điện thoại</label>
                                <div class="col-sm-9">
                                    <input name="dienthoai" type="text" class="form-control" id="dienthoai"
                                           placeholder="Điện thoại" required="" disabled
                                           value="<?php echo $xeguiban ? $xeguiban["dienthoai"] : "" ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="diachi" class="col-sm-3 control-label">Địa chỉ</label>
                                <div class="col-sm-9">
                                    <input name="diachi" type="text" class="form-control" id="diachi"
                                           placeholder="Địa chỉ" disabled
                                           required="" value="<?php echo $xeguiban ? $xeguiban["diachi"] : "" ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="thongtinxe" class="col-sm-3 control-label">Thông tin xe</label>
                                <div class="col-sm-9">
                                    <input name="thongtinxe" type="text" class="form-control" id="thongtinxe"
                                           placeholder="Thông tin xe" required="" disabled
                                           value="<?php echo $xeguiban ? $xeguiban["thongtinxe"] : "" ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="giabanmongmuon" class="col-sm-3 control-label">Giá bán mong muốn</label>
                                <div class="col-sm-9">
                                    <input name="giabanmongmuon" type="text" class="form-control" id="giabanmongmuon"
                                           placeholder="Giá bán mong muốn" required="" disabled
                                           value="<?php echo $xeguiban ? $xeguiban["giabanmongmuon"] : "" ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label"></label>
                                <div class="col-sm-9" <?php echo $xeguiban["trangthai"] == "1" ? "hidden" : ""; ?>>
                                    <button type="button" class="btn btn-primary" id="duyetthongtin"><i
                                                class="glyphicon glyphicon-check"></i> Duyệt thông tin
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
</div>
</div>
<!-- /#wrapper -->
<?php require('admin/views/shared/footer.php'); ?>
<script type="text/javascript">
    $(document).ready(function () {

        $("#duyetthongtin").click(function (e) {
            var id = $("#id").val();
            var hoten = $("#hoten").val();
            var dienthoai = $("#dienthoai").val();
            var diachi = $("#diachi").val();
            var thongtinxe = $("#thongtinxe").val();
            var giabanmongmuon = $("#giabanmongmuon").val();
            $.ajax({
                url: "admin.php?controller=guibanxe&action=duyetxeban",
                type: "POST",
                data: {
                    id: id,
                    hoten: hoten,
                    dienthoai: dienthoai,
                    diachi: diachi,
                    thongtinxe: thongtinxe,
                    giabanmongmuon: giabanmongmuon
                },
                success: function (response) {
                    if (response > 0)
                        location.href = "admin.php?controller=guibanxe";
                    else {
                        jAlert('Duyệt thông tin không thành công', 'Thông báo');
                    }
                }
            });
        });
    });
</script>