<?php require('admin/views/shared/header.php'); ?>
    <!--    <div id="page-wrapper">-->
    <ul class="nav nav-tabs small bg-info">
        <li class="active"><a data-toggle="tab" href="#home">Hàng hóa</a></li>
        <li><a data-toggle="tab" href="#goodsgroup">Nhóm hàng</a></li>
        <li><a data-toggle="tab" href="#goodstype">Loại hàng</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade">
            <form class="form-horizontal">
                <div class="panel panel-default">
                    <button class="btn btn-toolbar pull-right" style="margin: 3px" type="button"
                            id="btnResetPassEmployee"><i
                                class="glyphicon glyphicon-repeat"></i> Reset password
                    </button>
                    <button class="btn btn-danger pull-right" style="margin: 3px" type="button"
                            id="btnDeleteEmployee"><i
                                class="glyphicon glyphicon-minus"></i> Xóa
                    </button>
                    <button class="btn btn-warning pull-right" style="margin: 3px" type="reset"
                            id="btnResetEmployee"><i
                                class="glyphicon glyphicon-trash"></i> Reset
                    </button>
                    <button class="btn btn-primary pull-right" style="margin: 3px" type="button"
                            id="btnUpdateEmployee"><i
                                class="glyphicon glyphicon-plus"></i> Cập nhật
                    </button>
                    <div class="panel-heading">
                        <button class="small" type="button" id="btnShowHide" onclick="fShowHide()"><i
                                    class="glyphicon glyphicon-hand-down"></i></button>
                        <b class="small">Danh mục nhân viên</b>
                    </div>
                    <div class="panel-body small" id="divpanelbody" style="display: none">
                        <div>
                            <input name="id" type="hidden" class="form-control" id="id"/>
                            <input name="userid" type="hidden" class="form-control" id="userid"/>
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
                                <input name="email" type="email" class="form-control input-sm" id="email"
                                       placeholder="Email"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="province" class="col-sm-2 control-label">Thành phố/Tỉnh</label>
                            <div class="col-sm-4">
                                <select name="province" class="form-control input-sm" id="province" required=""
                                        onChange="getListDistrict(this.value);"
                                        data-show-subtext="true" data-live-search="true">
                                    <option value="-1" selected>Chọn Thành phố/Tỉnh</option>
                                    <?php foreach ($province as $provinces) {
                                        echo '<option value="' . $provinces['id'] . '">' . $provinces['name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                            <label for="address" class="col-sm-2 control-label">Quận/Huyện</label>
                            <div class="col-sm-4">
                                <select name="district" class="form-control input-sm" id="district" required=""
                                        onChange="getListVillage(this.value);">
                                    <option value="-1" selected>Chọn Quận/Huyện</option>
                                    <!--                                        --><?php //foreach ($unit as $units) {
                                    //                                            echo '<option value="' . $units['district'] . '">' . $units['districtname'] . '</option>';
                                    //                                        } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="village" class="col-sm-2 control-label">Phường/Xã</label>
                            <div class="col-sm-4">
                                <select name="village" class="form-control input-sm" id="village" required="">
                                    <option value="-1" selected>Chọn Phường/Xã</option>
                                    <!--                                        --><?php //foreach ($unit as $units) {
                                    //                                            echo '<option value="' . $units['village'] . '">' . $units['villagename'] . '</option>';
                                    //                                        } ?>
                                </select>
                            </div>
                            <label for="identity" class="col-sm-2 control-label">Địa chỉ</label>
                            <div class="col-sm-4">
                                <input name="address" type="text" class="form-control input-sm" id="address"
                                       placeholder="Địa chỉ"/>
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
                                <input name="birthday" type="date" class="form-control input-sm" id="birthday"
                                       placeholder="Ngày sinh"
                                       required=""/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="position" class="col-sm-2 control-label">Chức vụ</label>
                            <div class="col-sm-4">
                                <select name="position" class="form-control input-sm" id="position" required=""
                                        data-show-subtext="true" data-live-search="true">
                                    <option value="-1" selected>Chọn chức vụ</option>
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
                            <label for="zalo" class="col-sm-2 control-label">Zalo</label>
                            <div class="col-sm-4">
                                <input name="zalo" type="text" class="form-control input-sm" id="zalo"
                                       placeholder="Zalo"/>
                            </div>
                            <label for="facebook" class="col-sm-2 control-label">
                                <a id="linkfacebook" target="_blank">Facebook</a></label>
                            <div class="col-sm-4">
                                <input name="facebook" type="text" class="form-control input-sm" id="facebook"
                                       placeholder="Facebook"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <!--                                <label for="createtime" class="col-sm-2 control-label">Ngày tạo</label>-->
                            <!--                                <div class="col-sm-4">-->
                            <!--                                    <input name="createtime" type="datetime-local" class="form-control input-sm" id="createtime"-->
                            <!--                                           placeholder="Ngày tạo" value="--><?php
                            //                                    echo date('Y-m-d\Th:i:s') ?><!--"-->
                            <!--                                           required=""/>-->
                            <!--                                </div>-->
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
                <th class="text-center" width="7%">User id</th>
            </tr>
            </thead>
        </table>
    </div>
    <div id="goodsgroup" class="tab-pane fade">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <!--                    <button class="btn btn-danger pull-right" style="margin: 3px" type="button" id="btnSubGroupDelete">-->
                <!--                        <i-->
                <!--                                class="glyphicon glyphicon-minus"></i> Xóa-->
                <!--                    </button>-->
                <button class="btn btn-success pull-right" style="margin: 3px" type="button" id="btnGroupSubReset"><i
                            class="glyphicon glyphicon-refresh"></i> Reset
                </button>
                <!--                    <button class="btn btn-primary pull-right" style="margin: 3px" type="button" id="btnSubGroupUpdate">-->
                <!--                        <i-->
                <!--                                class="glyphicon glyphicon-plus"></i> Cập nhật-->
                <!--                    </button>-->
                <div class="panel-heading">
                    <b class="small">Danh mục phân loại cho nhóm hàng hóa</b>
                </div>
                <div class="panel-body small">
                    <div>
                        <input name="groupsubid" type="hidden" class="form-control" id="groupsubid"/>
                    </div>
                    <div class="form-group">
                        <label for="groupsubname" class="col-sm-4 control-label">Tên phân loại</label>
                        <div class="col-sm-8">
                            <input name="groupsubname" type="text" class="form-control input-sm"
                                   id="groupsubname"
                                   placeholder="Tên phân loại nhóm hàng"
                                   required=""/>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-bordered table-hover small" id="tblGroupSub" style="width:100%">
                <thead class="bg-primary">
                <tr>
                    <th class="text-center" width="30%">Id</th>
                    <th class="text-left">Tên phân loại nhóm hàng</th>
                    <th class="text-center">Xóa</th>
                </tr>
                </thead>
            </table>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-default">
                <!--                    <button class="btn btn-danger pull-right" style="margin: 3px" type="button" id="btnGroupDelete">-->
                <!--                        <i-->
                <!--                                class="glyphicon glyphicon-minus"></i> Xóa-->
                <!--                    </button>-->
                <button class="btn btn-success pull-right" style="margin: 3px" type="button" id="btnGroupReset"><i
                            class="glyphicon glyphicon-refresh"></i> Reset
                </button>
                <!--                    <button class="btn btn-primary pull-right" style="margin: 3px" type="button" id="btnGroupUpdate">-->
                <!--                        <i-->
                <!--                                class="glyphicon glyphicon-plus"></i> Cập nhật-->
                <!--                    </button>-->
                <div class="panel-heading">
                    <b class="small">Danh mục nhóm hàng hóa</b>
                </div>
                <div class="panel-body small">
                    <div>
                        <input name="groupid" type="hidden" class="form-control" id="groupid"/>
                    </div>
                    <div class="form-group">
                        <label for="groupname" class="col-sm-4 control-label">Tên nhóm hàng</label>
                        <div class="col-sm-8">
                            <input name="groupname" type="text" class="form-control input-sm"
                                   id="groupname"
                                   placeholder="Tên nhóm hàng"
                                   required=""/>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-bordered table-hover small" id="tblGroup" style="width:100%">
                <thead class="bg-primary">
                <tr>
                    <th class="text-center" width="30%">Id</th>
                    <th class="text-left">Tên nhóm hàng</th>
                    <th class="text-left">Nhóm hàng</th>
                    <th class="text-left">Xóa</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
    <div id="goodstype" class="tab-pane fade in active">
        <div class="panel panel-default">
<!--            <button class="btn btn-danger pull-right" style="margin: 3px" type="button" id="btnTypeDelete">-->
<!--                <i-->
<!--                        class="glyphicon glyphicon-minus"></i> Xóa-->
<!--            </button>-->
<!--            <button class="btn btn-warning pull-right" style="margin: 3px" type="reset" id="btnTypeReset"><i-->
<!--                        class="glyphicon glyphicon-trash"></i> Reset-->
            <button class="btn btn-success pull-right" style="margin: 3px" type="reset" id="btnTypeReset"><i
                        class="glyphicon glyphicon-refresh"></i> Reset
            </button>
<!--            </button>-->
<!--            <button class="btn btn-primary pull-right" style="margin: 3px" type="button" id="btnTypeUpdate">-->
<!--                <i-->
<!--                        class="glyphicon glyphicon-plus"></i> Cập nhật-->
<!--            </button>-->
            <div class="panel-heading">
                <b class="small">Danh mục loại hàng hóa</b>
            </div>
            <div class="panel-body small">
                <div>
                    <input name="typeid" type="hidden" class="form-control" id="typeid"/>
                </div>
                <div class="form-group">
                    <label for="typename" class="col-sm-2 control-label">Tên loại hàng</label>
                    <div class="col-sm-10">
                        <input name="typename" type="text" class="form-control input-sm"
                               id="typename"
                               placeholder="Tên loại hàng"
                               required=""/>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped table-bordered table-hover small" id="tblType" style="width:100%">
            <thead class="bg-primary">
            <tr>
                <th class="text-center" width="30%">Id</th>
                <th class="text-left">Tên loại hàng</th>
                <th class="text-left">Xóa</th>
            </tr>
            </thead>
        </table>
    </div>
    </div>
    </div>
    <script>
        // Phân loại nhóm hàng
        $(document).ready(function () {
            $('#groupsubname').keypress(function (e) {
                if (e.keyCode == 13) {
                    var name = $('#groupsubname').val();
                    if (name) {
                        var id = $('#positionid').val();
                        $.ajax({
                            type: "POST",
                            url: "admin/controllers/goods/updateGroupSub.php",
                            data: {
                                'id': id,
                                'name': name
                            },
                            success: function (data) {
                                if (data == '0') {
                                    jAlert('Thực hiện không thành công', 'Thông báo', function (e) {
                                        $('#groupsubname').focus();
                                    });
                                } else {
                                    jAlert('Thực hiện thành công', 'Thông báo', function (e) {
                                        $('#groupsubname').focus();
                                    });
                                    $('#btnGroupSubReset').click();
                                }
                            }
                        });
                    } else {
                        jAlert('Chưa nhập tên nhóm hàng', 'Thông báo', function (e) {
                            $('#groupsubname').focus();
                        });
                    }
                }
            });

            loadGroupSub();

            function loadGroupSub() {
                $('#tblGroupSub').DataTable().destroy();
                $('#tblGroupSub').DataTable({
                    width: '100%',
                    responsive: true,
                    order: [[0, 'desc']],
                    ajax: {
                        url: "admin/controllers/goods/listGroupSub.php",
                        dataSrc: ''
                    },
                    columns: [
                        {data: "id", className: "text-center", width: '20%',},
                        {data: "name"},
                        {
                            data: null,
                            className: "text-center",
                            width: '10%',
                            defaultContent: '<button class="groupsubremove"><i class="glyphicon glyphicon-trash"></i></button>'
                        }
                    ]
                });
            }

            // Delete a record
            $('#tblGroupSub').on('click', 'button.groupsubremove', function (e) {
                var $row = $(this).closest('tr');
                var data = $('#tblGroupSub').DataTable().row($row).data();
                jConfirm('Bạn chắc chắn xóa loại nhóm hàng này?', 'Thông báo', function (e) {
                    if (e == true) {
                        $.ajax({
                            type: "POST",
                            url: "admin/controllers/goods/deleteGroupSub.php",
                            data: {
                                'id': data["id"]
                            },
                            success: function (data) {
                                if (data == '0') {
                                    jAlert('Thực hiện không thành công', 'Thông báo');
                                } else {
                                    jAlert('Thực hiện thành công', 'Thông báo');
                                    $('#btnGroupSubReset').click();
                                }
                            }
                        });
                    }
                });
            });

            $('#tblGroupSub tbody').on('click', 'tr', function (id) {
                var data = $('#tblGroupSub').DataTable().row(this).data();
                if (data["id"] !== undefined && data["id"] !== null) {
                    $("#groupsubid").val(data["id"]);
                    $("#groupsubname").val(data["name"]);
                    loadGroup(data["id"]);
                }
            });

            $('#btnGroupSubReset').click(function (e) {
                $('#groupsubid').val('');
                $('#groupsubname').val('');
                loadGroupSub();
            });

            loadGroup(0);

            function loadGroup(groupsubid) {
                $('#tblGroup').DataTable().destroy();
                $('#tblGroup').DataTable({
                    width: '100%',
                    responsive: true,
                    order: [[0, 'desc']],
                    ajax: {
                        type: 'POST',
                        url: "admin/controllers/goods/listGroup.php",
                        data: {
                            'groupsubid': groupsubid
                        },
                        dataSrc: ''
                    },
                    columns: [
                        {data: "id", className: "text-center", width: '20%'},
                        {data: "name"},
                        {data: "groupsubid", visible: false},
                        {
                            data: null,
                            className: "text-center",
                            width: '10%',
                            defaultContent: '<button class="groupdelete"><i class="glyphicon glyphicon-trash"></i></button>'
                        }
                    ]
                });
            }

            $('#tblGroup tbody').on('click', 'tr', function (id) {
                var data = $('#tblGroup').DataTable().row(this).data();
                if (data["id"] !== undefined && data["id"] !== null) {
                    $("#groupid").val(data["id"]);
                    $("#groupname").val(data["name"]);
                    $("#groupsubid").val(data["groupsubid"]);
                }
            });

            $('#groupname').keypress(function (e) {
                if (e.keyCode == 13) {
                    var name = $('#groupname').val();
                    var groupsubid = $('#groupsubid').val();
                    if (checkIf(groupsubid)) {
                        return jAlert('Chưa chọn phân loại nhóm hàng', 'Thông báo', function (e) {
                            $('#groupname').focus();
                        });
                    }
                    if (name) {
                        $.ajax({
                            type: "POST",
                            url: "admin/controllers/goods/updateGroup.php",
                            data: {
                                'id': 0,
                                'name': name,
                                'groupsubid': groupsubid
                            },
                            success: function (data) {
                                if (data == '0') {
                                    jAlert('Thực hiện không thành công', 'Thông báo', function (e) {
                                        $('#groupname').focus();
                                    });
                                } else {
                                    jAlert('Thực hiện thành công', 'Thông báo', function (e) {
                                        $('#groupname').focus();
                                    });
                                    $('#btnGroupReset').click();
                                }
                            }
                        });
                    } else {
                        jAlert('Chưa nhập tên nhóm hàng', 'Thông báo', function (e) {
                            $('#groupsubname').focus();
                        });
                    }
                }
            });

            $('#tblGroup').on('click', 'button.groupdelete', function (e) {
                var $row = $(this).closest('tr');
                var data = $('#tblGroup').DataTable().row($row).data();
                jConfirm('Bạn chắc chắn xóa nhóm hàng này?', 'Thông báo', function (e) {
                    if (e == true) {
                        $.ajax({
                            type: "POST",
                            url: "admin/controllers/goods/deleteGroup.php",
                            data: {
                                'id': data["id"]
                            },
                            success: function (data) {
                                if (data == '0') {
                                    jAlert('Thực hiện không thành công', 'Thông báo');
                                } else {
                                    jAlert('Thực hiện thành công', 'Thông báo');
                                    $('#btnGroupReset').click();
                                }
                            }
                        });
                    }
                });
            });

            $('#btnGroupReset').click(function (e) {
                $('#groupid').val('');
                $('#groupname').val('');
                var groupsubid = $('#groupsubid').val();
                loadGroup(groupsubid);
            });
        });
        // Loại hàng
        $(document).ready(function () {
            loadType();

            function loadType() {
                $('#tblType').DataTable().destroy();
                $('#tblType').DataTable({
                    width: '100%',
                    responsive: true,
                    order: [[0, 'desc']],
                    ajax: {
                        url: "admin/controllers/goods/listType.php",
                        dataSrc: ''
                    },
                    columns: [
                        {data: "id", className: "text-center", width: '20%'},
                        {data: "name"},
                        {
                            data: null,
                            className: "text-center",
                            width: '10%',
                            defaultContent: '<button class="typedelete"><i class="glyphicon glyphicon-trash"></i></button>'
                        }
                    ]
                });
            }

            $('#tblType tbody').on('click', 'tr', function (id) {
                var data = $('#tblType').DataTable().row(this).data();
                if (data["id"] !== undefined && data["id"] !== null) {
                    $("#typeid").val(data["id"]);
                    $("#typename").val(data["name"]);
                }
            });

            $('#typename').keypress(function (e) {
                if (e.keyCode == 13) {
                    var name = $('#typename').val();
                    if (name) {
                        $.ajax({
                            type: "POST",
                            url: "admin/controllers/goods/updateType.php",
                            data: {
                                'id': 0,
                                'name': name
                            },
                            success: function (data) {
                                if (data == '0') {
                                    jAlert('Thực hiện không thành công', 'Thông báo', function (e) {
                                        $('#typename').focus();
                                    });
                                } else {
                                    jAlert('Thực hiện thành công', 'Thông báo', function (e) {
                                        $('#typename').focus();
                                    });
                                    $('#btnTypeReset').click();
                                }
                            }
                        });
                    } else {
                        jAlert('Chưa nhập tên loại hàng', 'Thông báo', function (e) {
                            $('#typename').focus();
                        });
                    }
                }
            });

            $('#tblType').on('click', 'button.typedelete', function (e) {
                var $row = $(this).closest('tr');
                var data = $('#tblType').DataTable().row($row).data();
                jConfirm('Bạn chắc chắn xóa loại hàng này?', 'Thông báo', function (e) {
                    if (e == true) {
                        $.ajax({
                            type: "POST",
                            url: "admin/controllers/goods/deleteType.php",
                            data: {
                                'id': data["id"]
                            },
                            success: function (data) {
                                if (data == '0') {
                                    jAlert('Thực hiện không thành công', 'Thông báo');
                                } else {
                                    jAlert('Thực hiện thành công', 'Thông báo');
                                    $('#btnTypeReset').click();
                                }
                            }
                        });
                    }
                });
            });

            $('#btnTypeReset').click(function (e) {
                $('#typeid').val('');
                $('#typename').val('');
                loadType();
            });
        });
    </script>
    </div>
<?php require('admin/views/shared/footer.php'); ?>