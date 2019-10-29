<?php require('admin/views/shared/header.php'); ?>
<div id="page-wrapper">
    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo $title ?>
        </div>
        <div class="panel-body">
            <div class="dataTable_wrapper"><?php $user['Id']; ?>

                <form id="user-form" class="form-horizontal" method="post"
                      action="admin.php?controller=user&action=add" enctype="multipart/form-data" role="form">
                    <input name="id" type="hidden"/>

                    <div class="form-group">
                        <label for="phone" class="col-sm-3 control-label">Loại user</label>
                        <div class="col-sm-9">
                            <select id="typeuser" name="typeuser" class="form-control">
                                <option value="1">Nhân viên</option>
                                <option value="2">Nhà đầu tư</option>
                                <option value="3">Khách hàng</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group" id="divUsername">
                        <label for="Username" class="col-sm-3 control-label">Tên đăng nhập</label>
                        <div class="col-sm-9">
                            <input name="username" type="text" class="form-control" id="Username"
                                   placeholder="Tên đăng nhập" />
                        </div>
                    </div>

                    <div class="form-group" id="divPassword">
                        <label for="Password" class="col-sm-3 control-label">Mật khẩu (Mặc định: 12345)</label>
                        <div class="col-sm-9">
                            <input name="password" value="12345" type="text" class="form-control" id="Password"
                                   placeholder="Mật khẩu"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Name" class="col-sm-3 control-label">Họ tên</label>
                        <div class="col-sm-9">
                            <input name="name" type="text" class="form-control" id="Name" placeholder="Name"
                                   required=""/>
                        </div>
                    </div>

                    <div class="form-group" hidden>
                        <label for="RoleId" class="col-sm-3 control-label">Quyền quản trị</label>
                        <div class="col-sm-9">
                            <select name="roleid" class="form-control" id="roleid">
                                <option value="1">Quyền Admin</option>
                                <option value="2">Quyền nhân viên cấp 1</option>
                                <option value="3">Quyền nhân viên cấp 2</option>
                                <option value="4">Không phân quyền</option>
                            </select>
                            <!--                            <input name="roleid" type="text" class="form-control" id="RoleId" placeholder="RoleId" required=""/>-->
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Email" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <input name="email" type="text" class="form-control" id="Email" placeholder="Email"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Address" class="col-sm-3 control-label">Địa chỉ</label>
                        <div class="col-sm-9">
                            <input name="address" type="text" class="form-control" id="Address"
                                   placeholder="Address" required=""/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="col-sm-3 control-label">Di động</label>
                        <div class="col-sm-9">
                            <input name="phone" type="text" class="form-control" id="phone" placeholder="Số di động"
                                   pattern="[0-9]{10,11}" required=""/>
                        </div>
                    </div>

                    <div class="form-group" id="div_phanquyen_1" hidden>
                        <label for="phone" class="col-sm-3 control-label">Phân quyền</label>
                        <div class="col-sm-3">
                            <input name="quyentruycap" type="checkbox" id="quyentruycap"/>
                            <span>Quyền truy cập </span>
                        </div>
                        <div class="col-sm-3">
                            <input name="cauhinhwebsite" type="checkbox" id="cauhinhwebsite"/>
                            <span>Cấu hình Website </span>
                        </div>
                        <div class="col-sm-3">
                            <input name="donhang" type="checkbox" id="donhang"/>
                            <span>Đơn hàng</span>
                        </div>
                    </div>
                    <div class="form-group" hidden>
                        <label for="phone" class="col-sm-3 control-label"></label>
                        <div class="col-sm-3">
                            <input name="sanpham" type="checkbox" id="sanpham"/>
                            <span>Sản phẩm </span>
                        </div>
                        <div class="col-sm-3">
                            <input name="danhmucsanpham" type="checkbox" id="danhmucsanpham"/>
                            <span>Danh mục sản phẩm </span>
                        </div>
                        <div class="col-sm-3">
                            <input name="nhomdanhmuc" type="checkbox" id="nhomdanhmuc"/>
                            <span>Nhóm danh mục</span>
                        </div>
                    </div>

                    <div class="form-group" hidden>
                        <label for="phone" class="col-sm-3 control-label"></label>
                        <div class="col-sm-3">
                            <input name="binhluan" type="checkbox" id="binhluan"/>
                            <span>Bình luận</span>
                        </div>
                        <div class="col-sm-3">
                            <input name="phanhoi" type="checkbox" id="phanhoi"/>
                            <span>Phản hồi</span>
                        </div>
                        <div class="col-sm-3">
                            <input name="thongke" type="checkbox" id="thongke"/>
                            <span>Thống kê</span>
                        </div>
                    </div>
                    <div class="form-group" hidden>
                        <label for="phone" class="col-sm-3 control-label"></label>
                        <div class="col-sm-3">
                            <input name="phatvideo" type="checkbox" id="phatvideo"/>
                            <span>Phát video</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="image1" class="col-sm-3 control-label">Ảnh Đại Diện</label>
                        <div class="col-sm-9">
                            <input name="Image1" type="file" class="form-control" id="image1" accept="image/*"/><br>
                            <!--                            --><?php //if ($user && is_file('public/upload/images/' . $user['Avatar'])) {
                            //                                echo '<image src="public/upload/images/' . $user['Avatar'] . '?time=' . time() . '" style="max-width:50px;" />';
                            //                            }?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-primary">Thêm mới</button>
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
        function loadDefaultCheck(){
            $("#quyentruycap").prop('disabled', false);
            $("#quyentruycap").prop('checked', true);
            $("#cauhinhwebsite").prop('disabled', false);
            $("#cauhinhwebsite").prop('checked', true);
            $("#donhang").prop('disabled', false);
            $("#donhang").prop('checked', true);
            $("#sanpham").prop('disabled', false);
            $("#sanpham").prop('checked', true);
            $("#danhmucsanpham").prop('disabled', false);
            $("#danhmucsanpham").prop('checked', true);
            $("#nhomdanhmuc").prop('disabled', false);
            $("#nhomdanhmuc").prop('checked', true);
            $("#binhluan").prop('disabled', false);
            $("#binhluan").prop('checked', true);
            $("#phanhoi").prop('disabled', false);
            $("#phanhoi").prop('checked', true);
            $("#thongke").prop('disabled', false);
            $("#thongke").prop('checked', true);
            $("#phatvideo").prop('disabled', false);
            $("#phatvideo").prop('checked', true);
        }
        loadDefaultCheck();
        $("#roleid").change(function() {
            var rolevalue = $("#roleid").val();
            if(rolevalue == '1'){
                $("#quyentruycap").prop('disabled', false);
                $("#quyentruycap").prop('checked', true);
                $("#cauhinhwebsite").prop('disabled', false);
                $("#cauhinhwebsite").prop('checked', true);
                $("#donhang").prop('disabled', false);
                $("#donhang").prop('checked', true);
                $("#sanpham").prop('disabled', false);
                $("#sanpham").prop('checked', true);
                $("#danhmucsanpham").prop('disabled', false);
                $("#danhmucsanpham").prop('checked', true);
                $("#nhomdanhmuc").prop('disabled', false);
                $("#nhomdanhmuc").prop('checked', true);
                $("#binhluan").prop('disabled', false);
                $("#binhluan").prop('checked', true);
                $("#phanhoi").prop('disabled', false);
                $("#phanhoi").prop('checked', true);
                $("#thongke").prop('disabled', false);
                $("#thongke").prop('checked', true);
                $("#phatvideo").prop('disabled', false);
                $("#phatvideo").prop('checked', true);
            }else {
                $("#quyentruycap").prop('disabled', true);
                $("#quyentruycap").prop('checked', false);
                $("#cauhinhwebsite").prop('disabled', true);
                $("#cauhinhwebsite").prop('checked', false);
                $("#donhang").prop('disabled', true);
                $("#donhang").prop('checked', false);
                $("#sanpham").prop('disabled', true);
                $("#sanpham").prop('checked', false);
                $("#danhmucsanpham").prop('disabled', true);
                $("#danhmucsanpham").prop('checked', false);
                $("#nhomdanhmuc").prop('disabled', true);
                $("#nhomdanhmuc").prop('checked', false);
                $("#binhluan").prop('disabled', true);
                $("#binhluan").prop('checked', false);
                $("#phanhoi").prop('disabled', true);
                $("#phanhoi").prop('checked', false);
                $("#thongke").prop('disabled', true);
                $("#thongke").prop('checked', false);
                $("#phatvideo").prop('disabled', true);
                $("#phatvideo").prop('checked', false);
            }
        });
        $("#typeuser").change(function() {
            var typeuser = $("#typeuser").val();

            if(typeuser == '1'){
                $('#divUsername').show();
                $('#divPassword').show();
                $("#roleid").val(1);
                $("#quyentruycap").prop('disabled', false);
                $("#quyentruycap").prop('checked', true);
                $("#cauhinhwebsite").prop('disabled', false);
                $("#cauhinhwebsite").prop('checked', true);
                $("#donhang").prop('disabled', false);
                $("#donhang").prop('checked', true);
                $("#sanpham").prop('disabled', false);
                $("#sanpham").prop('checked', true);
                $("#danhmucsanpham").prop('disabled', false);
                $("#danhmucsanpham").prop('checked', true);
                $("#nhomdanhmuc").prop('disabled', false);
                $("#nhomdanhmuc").prop('checked', true);
                $("#binhluan").prop('disabled', false);
                $("#binhluan").prop('checked', true);
                $("#phanhoi").prop('disabled', false);
                $("#phanhoi").prop('checked', true);
                $("#thongke").prop('disabled', false);
                $("#thongke").prop('checked', true);
                $("#phatvideo").prop('disabled', false);
                $("#phatvideo").prop('checked', true);
            }else {
                $('#divUsername').hide();
                $('#divPassword').hide();
                $("#roleid").val(4);
                $("#quyentruycap").prop('disabled', true);
                $("#quyentruycap").prop('checked', false);
                $("#cauhinhwebsite").prop('disabled', true);
                $("#cauhinhwebsite").prop('checked', false);
                $("#donhang").prop('disabled', true);
                $("#donhang").prop('checked', false);
                $("#sanpham").prop('disabled', true);
                $("#sanpham").prop('checked', false);
                $("#danhmucsanpham").prop('disabled', true);
                $("#danhmucsanpham").prop('checked', false);
                $("#nhomdanhmuc").prop('disabled', true);
                $("#nhomdanhmuc").prop('checked', false);
                $("#binhluan").prop('disabled', true);
                $("#binhluan").prop('checked', false);
                $("#phanhoi").prop('disabled', true);
                $("#phanhoi").prop('checked', false);
                $("#thongke").prop('disabled', true);
                $("#thongke").prop('checked', false);
                $("#phatvideo").prop('disabled', true);
                $("#phatvideo").prop('checked', false);
            }
        });
    });
</script>