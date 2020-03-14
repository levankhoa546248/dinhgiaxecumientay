<?php require('admin/views/shared/header.php'); ?>
<div id="page-wrapper">
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <b><?php echo $title ?></b>
        </div>
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <form id="user-form" class="form-horizontal" method="post"
                      action="admin.php?controller=nhadautu&action=edit" enctype="multipart/form-data" role="form">
                    <input name="manhadautu" type="hidden" value="<?php echo $info ? $info['manhadautu'] : '0'; ?>"/>
                    <div class="form-group">
                        <label for="Name" class="col-sm-3 control-label">Họ tên</label>
                        <div class="col-sm-8">
                            <input name="tennhadautu" type="text" class="form-control" id="tennhadautu"
                                   placeholder="Tên nhà đầu tư" value="<?php echo $info ? $info['tennhadautu'] : ''; ?>"
                                   required=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sodienthoai" class="col-sm-3 control-label">Số điện thoại</label>
                        <div class="col-sm-8">
                            <input name="sodienthoai" type="text" class="form-control" id="sodienthoai"
                                   value="<?php echo $info ? $info['sodienthoai'] : ''; ?>"
                                   placeholder="Số điện thoại"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="diachi" class="col-sm-3 control-label">Địa chỉ</label>
                        <div class="col-sm-8">
                            <input name="diachi" type="text" class="form-control" id="diachi"
                                   value="<?php echo $info ? $info['diachi'] : ''; ?>"
                                   placeholder="Địa chỉ"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button id="btnsubmit" type="submit"
                                    class="btn btn-primary"><?php echo $info ? 'Cập nhật' : 'Thêm mới'; ?></button>
                            <a class="btn btn-warning" href="admin.php">Trở về</a>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<?php require('admin/views/shared/footer.php'); ?>
<script>
    $(function () {
        // $("#btnsubmit").change(function() {
        //
        // });
        $("#typeuser").change(function () {
            var typeuser = $("#typeuser").val();
            var roleid = $("#roleid").val();
            if (typeuser == '1') {
                if (roleid == '3') {
                    defaultDisabled('disabled', true);
                    defaultChecked('checked', false);
                    $("#roleid").val(3);
                    // $("#roleid").prop('disabled', false);
                } else {
                    defaultDisabled('disabled', false);
                    defaultChecked('checked', true);
                    // $("#roleid").prop('disabled', false);
                }
            } else {
                defaultDisabled('disabled', true);
                defaultChecked('checked', false);
                $("#roleid").val(3);
                // $("#roleid").prop('disabled', true);
            }
        });
        $("#roleid").change(function () {
            var roleid = $("#roleid").val();
            if (roleid == '1') {
                defaultDisabled('disabled', false);
                defaultChecked('checked', true);
            } else {
                defaultDisabled('disabled', true);
                defaultChecked('checked', false);
            }
        });

        function setDefaultObject() {
            $("#typeuser").val(<?php echo json_encode($info["TypeUser"]); ?>);
            $("#roleid").val(<?php echo json_encode($info["RoleId"]); ?>);
        }

        setDefaultObject();

        function defaultDisabled(disabled, bool) {
            $("#quyentruycap").prop(disabled, bool);
            $("#cauhinhwebsite").prop(disabled, bool);
            $("#donhang").prop(disabled, bool);
            $("#sanpham").prop(disabled, bool);
            $("#danhmucsanpham").prop(disabled, bool);
            $("#nhomdanhmuc").prop(disabled, bool);
            $("#binhluan").prop(disabled, bool);
            $("#phanhoi").prop(disabled, bool);
            $("#thongke").prop(disabled, bool);
            $("#phatvideo").prop(disabled, bool);
        }

        function defaultChecked(checked, bool) {
            $("#quyentruycap").prop(checked, bool);
            $("#cauhinhwebsite").prop(checked, bool);
            $("#donhang").prop(checked, bool);
            $("#sanpham").prop(checked, bool);
            $("#danhmucsanpham").prop(checked, bool);
            $("#nhomdanhmuc").prop(checked, bool);
            $("#binhluan").prop(checked, bool);
            $("#phanhoi").prop(checked, bool);
            $("#thongke").prop(checked, bool);
            $("#phatvideo").prop(checked, bool);
        }
    });
</script>