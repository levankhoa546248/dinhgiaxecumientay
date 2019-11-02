<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
        <ul class="nav nav-tabs small bg-info">
            <li class="active"><a data-toggle="tab" href="#home">Nhân viên</a></li>
            <li><a data-toggle="tab" href="#menu1">Chức vụ</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <form class="form-horizontal">
                    <div class="panel panel-default">
                        <button class="btn btn-danger pull-right" style="margin: 3px"><i
                                    class="glyphicon glyphicon-minus"></i> Xóa
                        </button>
                        <button class="btn btn-warning pull-right" style="margin: 3px" type="reset"><i
                                    class="glyphicon glyphicon-trash"></i> Reset
                        </button>
                        <button class="btn btn-primary pull-right" style="margin: 3px"><i
                                    class="glyphicon glyphicon-plus"></i> Cập nhật
                        </button>
                        <div class="panel-heading">
                            <b class="small">Danh mục nhân viên</b>
                        </div>
                        <div class="panel-body small">
                            <div>
                                <input name="id" type="hidden" class="form-control" id="id"/>
                            </div>
                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label">Tài khoản</label>
                                <div class="col-sm-4">
                                    <input name="username" type="text" class="form-control input-sm" id="username"
                                           placeholder="Tài khoản"
                                           required=""/>
                                </div>
                                <label for="name" class="col-sm-2 control-label">Tên</label>
                                <div class="col-sm-4">
                                    <input name="name" type="text" class="form-control input-sm" id="name"
                                           placeholder="Họ tên"
                                           required=""/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="identity" class="col-sm-2 control-label">Chứng minh</label>
                                <div class="col-sm-4">
                                    <input name="identity" type="text" class="form-control input-sm" id="identity"
                                           placeholder="Chứng minh nhân dân" required=""/>
                                </div>
                                <label for="email" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-4">
                                    <input name="email" type="text" class="form-control input-sm" id="email"
                                           placeholder="Email" required=""/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="province" class="col-sm-2 control-label">Thành phố/Tỉnh</label>
                                <div class="col-sm-4">
                                    <select name="province" class="form-control input-sm" id="province" required="" onChange="getListDistrict(this.value);"
                                            data-show-subtext="true" data-live-search="true">
                                        <option value="-1" selected disabled>Chọn Thành phố/Tỉnh</option>
                                        <?php foreach ($province as $provinces) {
                                            echo '<option value="' . $provinces['id'] . '">' . $provinces['name'] . '</option>';
                                        } ?>
                                    </select>
                                </div>
                                <label for="address" class="col-sm-2 control-label">Quận/Huyện</label>
                                <div class="col-sm-4">
                                    <select name="district" class="form-control input-sm" id="district" required="" onChange="getListVillage(this.value);"
                                            data-show-subtext="true" data-live-search="true">
                                        <option value="-1" selected disabled>Chọn Quận/Huyện</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="village" class="col-sm-2 control-label">Phường/Xã</label>
                                <div class="col-sm-4">
                                    <select name="village" class="form-control input-sm" id="village" required=""
                                            data-show-subtext="true" data-live-search="true">
                                        <option value="-1" selected disabled>Chọn Phường/Xã</option>
                                    </select>
                                </div>
                                <label for="identity" class="col-sm-2 control-label">Địa chỉ</label>
                                <div class="col-sm-4">
                                    <input name="address" type="text" class="form-control input-sm" id="address"
                                           placeholder="Địa chỉ" required=""/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sex" class="col-sm-2 control-label">Giới tính</label>
                                <div class="col-sm-4">
                                    <select name="sex" class="form-control input-sm" id="sex" required=""
                                            data-show-subtext="true" data-live-search="true">
                                        <option value="-1" selected disabled>Chọn giới tính</option>
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                    </select>
                                </div>
                                <label for="birthday" class="col-sm-2 control-label">Ngày sinh</label>
                                <div class="col-sm-4">
                                    <input name="birthday" type="text" class="form-control input-sm" id="birthday"
                                           placeholder="Ngày sinh"
                                           required=""/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="zalo" class="col-sm-2 control-label">Zalo</label>
                                <div class="col-sm-4">
                                    <input name="zalo" type="text" class="form-control input-sm" id="zalo"
                                           placeholder="Zalo"
                                           required=""/>
                                </div>
                                <label for="facebook" class="col-sm-2 control-label">
                                    <a href="https://www.facebook.com/messages/t/vietanh.nguyenhoai" target="_blank">Facebook</a></label>
                                <div class="col-sm-4">
                                    <input name="facebook" type="text" class="form-control input-sm" id="facebook"
                                           placeholder="Facebook"
                                           required=""/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="position" class="col-sm-2 control-label">Chức vụ</label>
                                <div class="col-sm-4">
                                    <select name="position" class="form-control input-sm" id="position" required=""
                                            data-show-subtext="true" data-live-search="true">
                                        <option value="-1" selected disabled>Chọn chức vụ</option>
                                        <?php foreach ($listposition as $listpositions) {
                                            echo '<option value="' . $listpositions['id'] . '">' . $listpositions['name'] . '</option>';
                                        } ?>
                                    </select>
                                </div>
                                <label for="phone" class="col-sm-2 control-label">Điện thoại</label>
                                <div class="col-sm-4">
                                    <input name="phone" type="text" class="form-control input-sm" id="phone"
                                           placeholder="Số điện thoại"
                                           required=""/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="createtime" class="col-sm-2 control-label">Ngày tạo</label>
                                <div class="col-sm-4">
                                    <input name="createtime" type="date" class="form-control input-sm" id="createtime"
                                           placeholder="Ngày tạo" value="<?php echo date('Y-m-d') ?>"
                                           required=""/>
                                </div>
                                <label for="datejoined" class="col-sm-2 control-label">Ngày vào</label>
                                <div class="col-sm-4">
                                    <input name="datejoined" type="date" class="form-control input-sm" id="datejoined"
                                           placeholder="Ngày vào" value="<?php echo date('Y-m-d') ?>"
                                           required=""/>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
            <table class="table table-striped table-bordered table-hover small" id="tableEmployees" style="width:100%">
                <thead class="bg-primary">
                <tr>
                    <th class="text-center" width="7%">Id</th>
                    <th class="text-left">Tài khoản</th>
                    <th class="text-left">Tên</th>
                    <th class="text-left">Ngày sinh</th>
                    <th class="text-left">Chứng minh</th>
                    <th class="text-left">Điện thoại</th>
                    <th class="text-left">Email</th>
                    <th class="text-left">Địa chỉ</th>
                    <th class="text-left">Giới tính</th>
                    <th class="text-left">Facebook</th>
                    <th class="text-left">Zalo</th>
                    <th class="text-left">Mật khẩu</th>
                    <th class="text-left">Ngày tạo</th>
                    <th class="text-left">Chức vụ id</th>
                    <th class="text-left">Chức vụ</th>
                    <th class="text-left">Ngày vào</th>
                </tr>
                </thead>
            </table>
        </div>
        <div id="menu1" class="tab-pane fade">
            <form class="form-horizontal">
                <div class="panel panel-default">
                    <button class="btn btn-danger pull-right" style="margin: 3px" type="button" id="btnPositionDelete"><i
                                class="glyphicon glyphicon-minus"></i> Xóa
                    </button>
                    <button class="btn btn-warning pull-right" style="margin: 3px" type="reset"><i
                                class="glyphicon glyphicon-trash"></i> Reset
                    </button>
                    <button class="btn btn-primary pull-right" style="margin: 3px" type="button" id="btnPositionUpdate"><i
                                class="glyphicon glyphicon-plus"></i> Cập nhật
                    </button>
                    <div class="panel-heading">
                        <b class="small">Danh mục chức vụ</b>
                    </div>
                    <div class="panel-body small">
                        <div>
                            <input name="positionid" type="hidden" class="form-control" id="positionid"/>
                        </div>
                        <div class="form-group">
                            <label for="positionname" class="col-sm-2 control-label">Tên chức vụ</label>
                            <div class="col-sm-10">
                                <input name="positionname" type="text" class="form-control input-sm"
                                       id="positionname"
                                       placeholder="Tên chức vụ"
                                       required=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <table class="table table-striped table-bordered table-hover small" id="tablePosition" style="width:100%">
                <thead class="bg-primary">
                <tr>
                    <th class="text-center" width="30%">Id</th>
                    <th class="text-left">Tên chức vụ</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
    </div>
    <script>
        //Nhân viên
        $(document).ready(function () {
            loadTableEmployees();

            function loadTableEmployees(){
                $('#tableEmployees').DataTable().destroy();
                $('#tableEmployees').DataTable({
                    width: '100%',
                    responsive: true,
                    order: [[0, 'desc']],
                    ajax: {
                        url: "admin/controllers/employees/listEmployees.php",
                        dataSrc: ''
                    },
                    columns: [
                        {data: "id"},
                        {data: "username"},
                        {data: "name"},
                        {data: "birthday"},
                        {data: "identity"},
                        {data: "phone"},
                        {data: "email"},
                        {data: "address"},
                        {data: "sex"},
                        {data: "facebook"},
                        {data: "zalo"},
                        {data: "password"},
                        {data: "createtime"},
                        {data: "position"},
                        {data: "positionname"},
                        {data: "datejoined"}
                    ],
                    columnDefs: [
                        {
                            targets: 0, // your case first column
                            className: "text-center",
                            width: "7%"
                        }, {
                            targets: 1,
                            width: "20%"
                        }, {
                            targets: 2,
                            width: "25%"
                        }, {
                            targets: 3,
                            visible: false
                        }, {
                            targets: 4,
                            visible: false
                        }, {
                            targets: 6,
                            visible: false
                        }, {
                            targets: 7,
                            visible: false
                        }, {
                            targets: 8,
                            class: "text-center",
                            visible: false
                        }, {
                            targets: 9,
                            visible: false
                        }, {
                            targets: 10,
                            visible: false
                        }, {
                            targets: 11,
                            visible: false
                        }, {
                            targets: 12,
                            visible: false
                        },{
                            targets: 13,
                            class: "text-right",
                            visible: false
                        },{
                            targets: 14
                        },{
                            targets: 15,
                            class: "text-right"
                        }
                    ]
                });
            }

            $('#tableEmployees tbody').on('click', 'tr', function (id) {
                var data = $('#tableEmployees').DataTable().row(this).data();
                if (data["id"] !== undefined && data["id"] !== null) {
                    $("#id").val(data["id"]);
                    $("#username").val(data["username"]);
                    $("#name").val(data["name"]);
                    $("#birthday").val(data["birthday"]);
                    $("#identity").val(data["identity"]);
                    $("#phone").val(data["phone"]);
                    $("#email").val(data["email"]);
                    $("#address").val(data["address"]);
                    $("#sex").val(data["sex"]);
                    $("#facebook").val(data["facebook"]);
                    $("#zalo").val(data["zalo"]);
                    $("#password").val(data["password"]);
                    $("#createtime").val(data["createtime"]);
                    $("#position").val(data["position"]);
                    $("#datejoined").val(data["datejoined"]);
                }
            });

        });

        function getListDistrict(val){
            $.ajax({
                type: "POST",
                url: "admin/controllers/units/listDistrict.php",
                data: 'provinceid=' + val,
                success: function (data) {
                    $("#district").html(data);
                }
            });
        }
        function getListVillage(val){
            $.ajax({
                type: "POST",
                url: "admin/controllers/units/listVillage.php",
                data: 'districtid=' + val,
                success: function (data) {
                    $("#village").html(data);
                }
            });
        }

        // Chức vụ
        $(document).ready(function () {
            loadTablePosition();
            function loadTablePosition(){
                $('#tablePosition').DataTable().destroy();
                $('#tablePosition').DataTable({
                    width: '100%',
                    responsive: true,
                    order: [[0, 'desc']],
                    ajax: {
                        url: "admin/controllers/employees/listPosition.php",
                        dataSrc: ''
                    },
                    columns: [
                        {data: "id"},
                        {data: "name"}
                    ],
                    columnDefs: [
                        {
                            targets: 0, // your case first column
                            className: "text-center",
                            width: "20%"
                        }, {
                            targets: 1, // your case first column
                            className: "text-center",
                            width: "80%"
                        }
                    ]
                });
            }

            $('#tablePosition tbody').on('click', 'tr', function (id) {
                var data = $('#tablePosition').DataTable().row(this).data();
                if (data["id"] !== undefined && data["id"] !== null) {
                    $("#positionid").val(data["id"]);
                    $("#positionname").val(data["name"]);
                }
            });

            $('#btnPositionUpdate').click(function (e) {
               var name = $('#positionname').val();
               if (name){
                   var id = $('#positionid').val();
                   $.ajax({
                       type: "POST",
                       url: "admin/controllers/employees/updatePosition.php",
                       data: {
                           'id': id,
                           'name': name
                       },
                       success: function (data) {
                           if (data == '0') {
                               jAlert('Thực hiện không thành công', 'Thông báo');
                           } else {
                               jAlert('Thực hiện thành công', 'Thông báo');
                               loadTablePosition();
                           }
                       }
                   });
               }else{
                   jAlert('Chưa nhập tên chức vụ', 'Thông báo');
               }
            });

            $('#btnPositionDelete').click(function (e) {
                var id = $('#positionid').val();
               if (id){
                   $.ajax({
                       type: "POST",
                       url: "admin/controllers/employees/deletePosition.php",
                       data: {
                           'id': id
                       },
                       success: function (data) {
                           if (data == '0') {
                               jAlert('Thực hiện không thành công', 'Thông báo');
                           } else {
                               jAlert('Thực hiện thành công', 'Thông báo');
                               loadTablePosition();
                           }
                       }
                   });
               }else{
                   jAlert('Chưa chọn chức vụ', 'Thông báo');
               }
            });
        });
    </script>
    </div>
<?php require('admin/views/shared/footer.php'); ?>