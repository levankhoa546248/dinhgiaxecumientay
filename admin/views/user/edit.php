<?php require('admin/views/shared/header.php'); ?>
<div id="page-wrapper">
    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo $title ?>
        </div>
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <table class="product-table">
                    <tr>
                        <td> <label for="name" class="col-sm-3 control-label">Username</label></td>
                        <td> <?php echo $user_info ? $user_info['Username'] : ''; ?></td>
                    </tr>

                    <tr>
                        <td>  <label for="Email" class="col-sm-3 control-label">Email</label></td>
                        <td>  <?php echo $user_info ? $user_info['Email'] : ''; ?></td>
                    </tr>

                    <tr>
                        <td> <label for="CreateDate" class="col-sm-3 control-label">CreateDate</label></td>
                        <td> <?php echo $user_info ? $user_info['CreateDate'] : ''; ?></td>
                    </tr>

                    <tr>
                        <td> <label for="RoleId" class="col-sm-3 control-label">RoleId</label></td>
                        <td> <?php echo $user_info ? $user_info['RoleId'] : ''; ?></td>
                    </tr>
                </table><br>

                <form id="user-form" class="form-horizontal" method="post" action="admin.php?controller=user&action=edit" enctype="multipart/form-data" role="form">
                    <input name="id" type="hidden" value="<?php echo $user_info ? $user_info['Id'] : '0'; ?>"/>

                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Họ và tên</label>
                        <div class="col-sm-9">
                            <input name="name" type="text" value="<?php echo $user_info ? $user_info['Name'] : ''; ?>" class="form-control" id="name" placeholder="Họ và tên" required=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-sm-3 control-label">Địa chỉ</label>
                        <div class="col-sm-9">
                            <input name="address" type="text" value="<?php echo $user_info ? $user_info['Address'] : ''; ?>" class="form-control" id="address" placeholder="Địa chỉ"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-sm-3 control-label">Loại user</label>
                        <div class="col-sm-9">
                            <select id="typeuser" name="typeuser" class="form-control" defaultvalue>
                                <option value="1">Nhân viên</option>
                                <option value="2">Nhà đầu tư</option>
                                <option value="3">Khách hàng</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="RoleId" class="col-sm-3 control-label">Quyền quản trị</label>
                        <div class="col-sm-9">
                            <select name="roleid" class="form-control" id="roleid">
                                <option value="1">Quyền Admin</option>
                                <option value="2">Quyền nhân viên</option>
                                <option value="3">Không phân quyền</option>
                            </select>
                            <!--                            <input name="roleid" type="text" class="form-control" id="RoleId" placeholder="RoleId" required=""/>-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-sm-3 control-label">Di động</label>
                        <div class="col-sm-9">
                            <input name="phone" type="text" value="<?php echo $user_info ? $user_info['Phone'] : ''; ?>" class="form-control" id="phone" placeholder="Số di động" pattern="[0-9]{10,11}"/>
                        </div>
                    </div>

                    <div class="form-group" id="div_phanquyen_1">
                        <label for="phone" class="col-sm-3 control-label">Phân quyền</label>
                        <div class="col-sm-3">
                            <input name="quyentruycap" type="checkbox" id="quyentruycap"
                                <?php echo $user_info['QuyenTruyCap'] == '1' ? 'checked' : ''; ?>/>
                            <span>Quyền truy cập </span>
                        </div>
                        <div class="col-sm-3">
                            <input name="cauhinhwebsite" type="checkbox" id="cauhinhwebsite"
                                <?php echo $user_info['CauHinhWebsite'] == '1' ? 'checked' : ''; ?>/>
                            <span>Cấu hình Website </span>
                        </div>
                        <div class="col-sm-3">
                            <input name="donhang" type="checkbox" id="donhang"
                                <?php echo $user_info['DonHang'] == '1' ? 'checked' : ''; ?>/>
                            <span>Đơn hàng</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-sm-3 control-label"></label>
                        <div class="col-sm-3">
                            <input name="sanpham" type="checkbox" id="sanpham"
                                <?php echo $user_info['SanPham'] == '1' ? 'checked' : ''; ?>/>
                            <span>Sản phẩm </span>
                        </div>
                        <div class="col-sm-3">
                            <input name="danhmucsanpham" type="checkbox" id="danhmucsanpham"
                                <?php echo $user_info['DanhMucSanPham'] == '1' ? 'checked' : ''; ?>/>
                            <span>Danh mục sản phẩm </span>
                        </div>
                        <div class="col-sm-3">
                            <input name="nhomdanhmuc" type="checkbox" id="nhomdanhmuc"
                                <?php echo $user_info['NhomDanhMuc'] == '1' ? 'checked' : ''; ?>/>
                            <span>Nhóm danh mục</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="col-sm-3 control-label"></label>
                        <div class="col-sm-3">
                            <input name="binhluan" type="checkbox" id="binhluan"
                                <?php echo $user_info['BinhLuan'] == '1' ? 'checked' : ''; ?>/>
                            <span>Bình luận</span>
                        </div>
                        <div class="col-sm-3">
                            <input name="phanhoi" type="checkbox" id="phanhoi"
                                <?php echo $user_info['PhanHoi'] == '1' ? 'checked' : ''; ?>/>
                            <span>Phản hồi</span>
                        </div>
                        <div class="col-sm-3">
                            <input name="thongke" type="checkbox" id="thongke"
                                <?php echo $user_info['ThongKe'] == '1' ? 'checked' : ''; ?>/>
                            <span>Thống kê</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-sm-3 control-label"></label>
                        <div class="col-sm-3">
                            <input name="phatvideo" type="checkbox" id="phatvideo"
                                <?php echo $user_info['PhatVideo'] == '1' ? 'checked' : ''; ?>/>
                            <span>Phát video</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image1" class="col-sm-3 control-label">Ảnh Đại Diện</label>
                        <div class="col-sm-9">
                            <input name="Image1" type="file" class="form-control" id="image1" accept="image/*"/><br>
                            <?php if ($user_info && is_file('public/upload/images/' . $user_info['Avatar'])) {
                                echo '<image src="public/upload/images/' . $user_info['Avatar'] . '?time=' . time() . '" style="max-width:50px;" />';
                            }?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button id="btnsubmit" type="submit" class="btn btn-primary"><?php echo $user_info ? 'Cập nhật' : 'Thêm mới' ;?></button>
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
    $(function() {
        // $("#btnsubmit").change(function() {
        //
        // });
        $("#typeuser").change(function() {
            var typeuser = $("#typeuser").val();
            var roleid = $("#roleid").val();
            if(typeuser == '1'){
                if(roleid == '3'){
                    defaultDisabled('disabled', true);
                    defaultChecked('checked', false);
                    $("#roleid").val(3);
                    // $("#roleid").prop('disabled', false);
                }else{
                    defaultDisabled('disabled', false);
                    defaultChecked('checked', true);
                    // $("#roleid").prop('disabled', false);
                }
            }else {
                defaultDisabled('disabled', true);
                defaultChecked('checked', false);
                $("#roleid").val(3);
                // $("#roleid").prop('disabled', true);
            }
        });
        $("#roleid").change(function() {
            var roleid = $("#roleid").val();
            if(roleid == '1'){
                defaultDisabled('disabled', false);
                defaultChecked('checked', true);
            }else {
                defaultDisabled('disabled', true);
                defaultChecked('checked', false);
            }
        });
        function setDefaultObject(){
            $("#typeuser").val(<?php echo json_encode($user_info["TypeUser"]); ?>);
            $("#roleid").val(<?php echo json_encode($user_info["RoleId"]); ?>);
        }
        setDefaultObject();
        function defaultDisabled(disabled, bool){
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
        function defaultChecked(checked,bool){
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