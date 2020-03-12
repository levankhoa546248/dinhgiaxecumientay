<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
        <ul class="nav nav-tabs small bg-info">
            <li class="active"><a data-toggle="tab" href="#home">Thông tin</a></li>
            <li><a data-toggle="tab" href="#menu1">Đổi mật khẩu</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <form class="form-horizontal">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <b class="small">Thông tin tài khoản</b>
                        </div>
                        <div class="panel-body small">
                            <div>
                                <input name="id" type="hidden" class="form-control" id="id" value="<?php echo $employees['id'] ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label">Tài khoản</label>
                                <div class="col-sm-4">
                                    <label for="username"
                                           class="control-label text-primary"><?php echo $employees['username'] ?></label>
                                </div>
                                <label for="name" class="col-sm-2 control-label">Tên</label>
                                <div class="col-sm-4">
                                    <label for="name"
                                           class="control-label text-primary"><?php echo $employees['name'] ?></label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="identity" class="col-sm-2 control-label">Chứng minh</label>
                                <div class="col-sm-4">
                                    <label for="identity"
                                           class="control-label text-primary"><?php echo $employees['identity'] ?></label>
                                </div>
                                <label for="email" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-4">
                                    <label for="email"
                                           class="control-label text-primary"><?php echo $employees['email'] ?></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="province" class="col-sm-2 control-label">Thành phố/Tỉnh</label>
                                <div class="col-sm-4">
                                    <label for="province"
                                           class="control-label text-primary"><?php echo $employees['provincename'] ?></label>
                                </div>
                                <label for="district" class="col-sm-2 control-label">Quận/Huyện</label>
                                <div class="col-sm-4">
                                    <label for="district"
                                           class="control-label text-primary"><?php echo $employees['districtname'] ?></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="village" class="col-sm-2 control-label">Phường/Xã</label>
                                <div class="col-sm-4">
                                    <label for="village"
                                           class="control-label text-primary"><?php echo $employees['villagename'] ?></label>
                                </div>
                                <label for="address" class="col-sm-2 control-label">Địa chỉ</label>
                                <div class="col-sm-4">
                                    <label for="address"
                                           class="control-label text-primary"><?php echo $employees['address'] ?></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sex" class="col-sm-2 control-label">Giới tính</label>
                                <div class="col-sm-4">
                                    <label for="sex"
                                           class="control-label text-primary"><?php echo $employees['sex'] ?></label>
                                </div>
                                <label for="birthday" class="col-sm-2 control-label">Ngày sinh</label>
                                <div class="col-sm-4">
                                    <label for="birthday"
                                           class="control-label text-primary"><?php echo $employees['birthday'] ?></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="position" class="col-sm-2 control-label">Chức vụ</label>
                                <div class="col-sm-4">
                                    <label for="position"
                                           class="control-label text-primary"><?php echo $employees['positionname'] ?></label>
                                </div>
                                <label for="phone" class="col-sm-2 control-label">Điện thoại</label>
                                <div class="col-sm-4">
                                    <label for="phone"
                                           class="control-label text-primary"><?php echo $employees['phone'] ?></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="zalo" class="col-sm-2 control-label">Zalo</label>
                                <div class="col-sm-4">
                                    <label for="zalo"
                                           class="control-label text-primary"><?php echo $employees['zalo'] ?></label>
                                </div>
                                <label for="facebook" class="col-sm-2 control-label">Facebook</label>
                                <div class="col-sm-4">
                                    <a href="<?php echo $employees['facebook'] ?>" target="_blank"
                                       class="control-label text-right">
                                        <h6 class="text-left"><b><?php echo $employees['facebook'] ?></b></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="datejoined" class="col-sm-2 control-label">Ngày vào</label>
                                <div class="col-sm-4">
                                    <label for="datejoined"
                                           class="control-label text-primary"><?php echo $employees['datejoined'] ?></label>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
        <div id="menu1" class="tab-pane fade">
            <form class="form-horizontal">
                <div class="panel panel-default">
                    <button class="btn btn-warning pull-right" style="margin: 3px" type="reset" id="btnResetEmployee"><i
                                class="glyphicon glyphicon-trash"></i> Reset
                    </button>
                    <button class="btn btn-primary pull-right" style="margin: 3px" type="button" id="btnResetPassEmployee">
                        <i
                                class="glyphicon glyphicon-plus"></i> Cập nhật
                    </button>
                    <div class="panel-heading">
                        <b class="small">Thay đổi mật khẩu</b>
                    </div>
                    <div class="panel-body small">
                        <div>
                            <input name="password" type="hidden" class="form-control" id="password" value="<?php echo $employees['password'] ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="passwordcurrent" class="col-sm-2 control-label">Mật khẩu hiện tại</label>
                            <div class="col-sm-10">
                                <input name="passwordcurrent" type="password" class="form-control input-sm"
                                       id="passwordcurrent"
                                       placeholder="Mật khẩu hiện tại"
                                       required=""/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="passwordnew" class="col-sm-2 control-label">Mật khẩu mới</label>
                            <div class="col-sm-10">
                                <input name="passwordnew" type="password" class="form-control input-sm"
                                       id="passwordnew"
                                       placeholder="Mật khẩu mới"
                                       required=""/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="passwordconfirm" class="col-sm-2 control-label">Xác nhận lại mật khẩu</label>
                            <div class="col-sm-10">
                                <input name="passwordconfirm" type="password" class="form-control input-sm"
                                       id="passwordconfirm"
                                       placeholder="Xác nhận lại mật khẩu"
                                       required=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    <script>
        //Nhân viên
        $(document).ready(function () {
            $('#btnResetPassEmployee').click(function (e) {
                var id = $('#id').val();
                var password = $('#password').val();
                var passwordcurrent = $('#passwordcurrent').val();
                if (checkIf(passwordcurrent)){
                    return jAlert('Chưa nhập mật khẩu', 'Thông báo');
                }
                var passcurrentmd5 = Crypto.MD5(passwordcurrent);
                var passwordnew = $('#passwordnew').val();
                if (checkIf(passwordnew)){
                    return jAlert('Chưa nhập mật khẩu mới', 'Thông báo');
                }
                var passwordconfirm = $('#passwordconfirm').val();
                if (checkIf(passwordconfirm)){
                    return jAlert('Chưa xác nhận mật khẩu', 'Thông báo');
                }
                if (password != passcurrentmd5){
                    return jAlert('Mật khẩu không chính xác', 'Thông báo');
                }
                if (passwordnew != passwordconfirm){
                    return jAlert('Xác nhận mật khẩu không khớp với mật khẩu mới', 'Thông báo');
                }
                if (id) {
                    jConfirm('Bạn chắc chắn muốn đổi mật khẩu này?', 'Thông báo', function (e) {
                        if (e == true){
                            $.ajax({
                                type: "POST",
                                url: "admin/controllers/employees/changePassword.php",
                                data: {
                                    'id': id,
                                    'password': passwordnew
                                },
                                success: function (data) {
                                    if (data == '0') {
                                        jAlert('Thực hiện không thành công', 'Thông báo');
                                    } else {
                                        jAlert('Thực hiện thành công', 'Thông báo');
                                        $('#btnResetEmployee').click();
                                    }
                                }
                            });
                        }
                    });
                } else {
                    jAlert('Chưa chọn tài khoản', 'Thông báo');
                }

            });
        });
    </script>
    </div>
<?php require('admin/views/shared/footer.php'); ?>