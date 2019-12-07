<?php require('admin/views/shared/header.php'); ?>
    <!--    <div id="page-wrapper">-->
    <ul class="nav nav-tabs small bg-info">
        <li class="active"><a data-toggle="tab" href="#goodstab">Hàng hóa</a></li>
        <li><a data-toggle="tab" href="#goodsgrouptab">Nhóm hàng</a></li>
        <li><a data-toggle="tab" href="#goodstypetab">Loại hàng</a></li>
        <li><a data-toggle="tab" href="#goodspropertytab">Thuộc tính</a></li>
        <li><a data-toggle="tab" href="#goodssuppliertab">Nhà cung cấp</a></li>
    </ul>

    <div class="tab-content">
        <div id="goodstab" class="tab-pane fade in active">
            <div class="panel panel-default form-horizontal">
                <button class="btn btn-success pull-right" style="margin: 3px" type="reset"
                        id="btnRefreshGoods"><i class="glyphicon glyphicon-refresh"></i> Refresh
                </button>
                <button class="btn btn-primary pull-right" style="margin: 3px" type="button"
                        id="btnUpdateGoods"><i
                            class="glyphicon glyphicon-plus"></i> Cập nhật
                </button>
                <div class="panel-heading">
                    <button class="small" type="button" id="btnShowHide" onclick="fShowHide()"><i
                                class="glyphicon glyphicon-hand-down"></i></button>
                    <b class="small">Danh mục hàng hóa</b>
                </div>
                <div class="panel-body small" id="divpanelbody" style="display: block">
                    <div>
                        <input name="goodsid" type="hidden" class="form-control" id="goodsid"/>
                    </div>
                    <div class="form-group">
                        <label for="goodsname" class="col-sm-2 control-label">Tên hàng</label>
                        <div class="col-sm-4">
                            <input name="goodsname" type="text" class="form-control input-sm" id="goodsname"
                                   placeholder="Tên hàng"
                                   required=""/>
                        </div>
                        <label for="goodsunit" class="col-sm-2 control-label">Đơn vị tính</label>
                        <div class="col-sm-4">
                            <select name="goodsunit" class="form-control input-sm" id="goodsunit" required="">
                                <option value="0" selected>Chọn đơn vị tính</option>
                                <?php foreach ($unit as $units) {
                                    echo '<option value="' . $units['id'] . '">' . $units['name'] . '</option>';
                                } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="goodssizesex" class="col-sm-2 control-label">Giới tính</label>
                        <div class="col-sm-4">
                            <select name="goodssizesex" class="form-control input-sm" id="goodssizesex" required="">
                                <option value="0" selected>Chọn giới tính</option>
                                <option value="1">Nam</option>
                                <option value="2">Nữ</option>
                            </select>
                        </div>
                        <label for="goodssize" class="col-sm-2 control-label">Kích thước</label>
                        <div class="col-sm-4">
                            <select name="goodssize" class="form-control btn btn-group-sm" id="goodssize" required=""
                                    data-show-subtext="true" data-live-search="true">
                                <option value="0" selected>Chọn kích thước</option>
                                <?php foreach ($size as $sizes) {
                                    echo '<option value="' . $sizes['id'] . '">' . $sizes['name'] . '</option>';
                                } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="goodscolor" class="col-sm-2 control-label">Màu sắc</label>
                        <div class="col-sm-4">
                            <!--                            <select name="goodscolor" class="form-control btn btn-group-sm" id="goodscolor" required=""-->
                            <!--                                    data-show-subtext="true" multiple>-->
                            <!--                                <option value="" disabled >Chọn màu sắc</option>-->
                            <!--                                --><?php //foreach ($color as $colors) {
                            //                                    echo '<option value="' . $colors['id'] . '">' . $colors['name'] . '</option>';
                            //                                } ?>
                            <!--                            </select>-->
                            <input name="goodscolor" id="goodscolor" type="text" value="" data-role="tagsinput"
                                   placeholder="" class="form-control input-sm"/>
                        </div>
                        <label for="goodstype" class="col-sm-2 control-label">Loại hàng</label>
                        <div class="col-sm-4">
                            <select name="goodstype" class="form-control btn btn-group-sm" id="goodstype" required=""
                                    data-show-subtext="true" data-live-search="true">
                                <option value="0" selected>Chọn loại</option>
                                <?php foreach ($goodstype as $goodstypes) {
                                    echo '<option value="' . $goodstypes['id'] . '">' . $goodstypes['name'] . '</option>';
                                } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="goodsgroupsub" class="col-sm-2 control-label">Loại nhóm hàng</label>
                        <div class="col-sm-4">
                            <select name="goodsgroupsub" class="form-control btn btn-group-sm" id="goodsgroupsub"
                                    required="" data-show-subtext="true" data-live-search="true">
                                <option value="0" selected>Chọn loại nhóm hàng</option>
                                <?php foreach ($goodsgroupsub as $goodsgroupsubs) {
                                    echo '<option value="' . $goodsgroupsubs['id'] . '">' . $goodsgroupsubs['name'] . '</option>';
                                } ?>
                            </select>
                        </div>
                        <label for="goodsgroup" class="col-sm-2 control-label">Nhóm hàng</label>
                        <div class="col-sm-4">
                            <select name="goodsgroup" class="form-control btn btn-group-sm" id="goodsgroup" required=""
                                    data-show-subtext="true" data-live-search="true">
                                <option value="0" selected>Chọn nhóm hàng</option>
                                <?php foreach ($goodsgroup as $goodsgroups) {
                                    echo '<option value="' . $goodsgroups['id'] . '">' . $goodsgroups['name'] . '</option>';
                                } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="country" class="col-sm-2 control-label">Nước sản xuất</label>
                        <div class="col-sm-4">
                            <select name="country" class="form-control btn btn-group-sm" id="country"
                                    required="" data-show-subtext="true" data-live-search="true">
                                <option value="0" selected>Chọn nước</option>
                                <?php foreach ($country as $countrys) {
                                    echo '<option value="' . $countrys['id'] . '">' . $countrys['name'] . '</option>';
                                } ?>
                            </select>
                        </div>
                        <label for="supplier" class="col-sm-2 control-label">Nhà cung cấp</label>
                        <div class="col-sm-4">
                            <select name="supplier" class="form-control btn btn-group-sm" id="supplier"
                                    required="" data-show-subtext="true" data-live-search="true">
                                <option value="0" selected>Chọn nhà cung cấp</option>
                                <?php foreach ($supplier as $suppliers) {
                                    echo '<option value="' . $suppliers['id'] . '">' . $suppliers['name'] . '</option>';
                                } ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-bordered table-hover small" id="tblGoods" style="width:100%">
                <thead class="bg-primary">
                <tr>
                    <th class="text-center" width="7%">Id</th>
                    <th class="text-left">Tên hàng</th>
                    <th class="text-left">ĐVT id</th>
                    <th class="text-left">ĐVT</th>
                    <th class="text-left">Giới tính id</th>
                    <th class="text-left">Giới tính</th>
                    <th class="text-left">Kích thước id</th>
                    <th class="text-left">Kích thước</th>
                    <!--                    <th class="text-left">Màu sắc id</th>-->
                    <th class="text-left">Màu sắc</th>
                    <th class="text-left">Loại id</th>
                    <th class="text-left">Loại</th>
                    <th class="text-left">Loại nhóm id</th>
                    <th class="text-left">Loại nhóm</th>
                    <th class="text-left">Nhóm id</th>
                    <th class="text-left">Nhóm</th>
                    <th class="text-left">Nước sản xuất id</th>
                    <th class="text-left">NSX</th>
                    <th class="text-left">Nhà cung cấp id</th>
                    <th class="text-left">NCC</th>
                    <th class="text-left"><i class="fa fa-gears"></i></th>
                </tr>
                </thead>
            </table>
        </div>
        <div id="goodsgrouptab" class="tab-pane fade">
            <div class="col-sm-6 right">
                <div class="panel panel-default">
                    <!--                    <button class="btn btn-danger pull-right" style="margin: 3px" type="button" id="btnSubGroupDelete">-->
                    <!--                        <i-->
                    <!--                                class="glyphicon glyphicon-minus"></i> Xóa-->
                    <!--                    </button>-->
                    <button class="btn btn-success pull-right" style="margin: 3px" type="button" id="btnGroupSubReset">
                        <i
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
        <div id="goodstypetab" class="tab-pane fade">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <button class="btn btn-success pull-right" style="margin: 3px" type="reset" id="btnTypeReset"><i
                                class="glyphicon glyphicon-refresh"></i> Reset
                    </button>
                    <div class="panel-heading">
                        <b class="small">Danh mục loại hàng hóa</b>
                    </div>
                    <div class="panel-body small">
                        <div>
                            <input name="typeid" type="hidden" class="form-control" id="typeid"/>
                        </div>
                        <div class="form-group">
                            <label for="typename" class="col-sm-4 control-label">Tên loại hàng</label>
                            <div class="col-sm-8">
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
                        <th class="text-center" width="20%">Id</th>
                        <th class="text-left">Tên loại hàng</th>
                        <th class="text-left">Xóa</th>
                    </tr>
                    </thead>
                </table>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <button class="btn btn-success pull-right" style="margin: 3px" type="reset" id="btnUnitReset"><i
                                class="glyphicon glyphicon-refresh"></i> Reset
                    </button>
                    <div class="panel-heading">
                        <b class="small">Danh mục đơn vị tính</b>
                    </div>
                    <div class="panel-body small">
                        <div>
                            <input name="unitid" type="hidden" class="form-control" id="unitid"/>
                        </div>
                        <div class="form-group">
                            <label for="unitname" class="col-sm-4 control-label">Tên đơn vị tính</label>
                            <div class="col-sm-8">
                                <input name="unitname" type="text" class="form-control input-sm"
                                       id="unitname" placeholder="Tên đơn vị tính" required=""/>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover small" id="tblUnit" style="width:100%">
                    <thead class="bg-primary">
                    <tr>
                        <th class="text-center" width="20%">Id</th>
                        <th class="text-left">Tên đơn vị tính</th>
                        <th class="text-left">Xóa</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div id="goodspropertytab" class="tab-pane fade">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <button class="btn btn-success pull-right" style="margin: 3px" type="button" id="btnColorReset"><i
                                class="glyphicon glyphicon-refresh"></i> Reset
                    </button>
                    <div class="panel-heading">
                        <b class="small">Danh mục màu</b>
                    </div>
                    <div class="panel-body small">
                        <div>
                            <input name="colorid" type="hidden" class="form-control" id="colorid"/>
                        </div>
                        <div class="form-group">
                            <label for="colorname" class="col-sm-4 control-label">Tên màu</label>
                            <div class="col-sm-8">
                                <input name="colorname" type="text" class="form-control input-sm"
                                       id="colorname"
                                       placeholder="Tên màu"
                                       required=""/>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover small" id="tblColor" style="width:100%">
                    <thead class="bg-primary">
                    <tr>
                        <th class="text-center" width="30%">Id</th>
                        <th class="text-left">Tên màu</th>
                        <th class="text-center">Xóa</th>
                    </tr>
                    </thead>
                </table>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-default form-horizontal">
                    <button class="btn btn-success pull-right" style="margin: 3px" type="button" id="btnSizeReset"><i
                                class="glyphicon glyphicon-refresh"></i> Reset
                    </button>
                    <div class="panel-heading">
                        <b class="small">Danh mục kích thước</b>
                    </div>
                    <div class="panel-body small ">
                        <div>
                            <input name="sizeid" type="hidden" class="form-control" id="sizeid"/>
                        </div>
                        <div class="form-group">
                            <label for="sex" class="col-sm-4 control-label">Giới tính</label>
                            <div class="col-sm-8">
                                <select name="sizesex" class="form-control input-sm" id="sizesex" required="">
                                    <option value="0" selected>Không chọn</option>
                                    <option value="1">Nam</option>
                                    <option value="2">Nữ</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sizename" class="col-sm-4 control-label">Tên kích thước</label>
                            <div class="col-sm-8">
                                <input name="sizename" type="text" class="form-control input-sm"
                                       id="sizename" placeholder="Tên kích thước" required=""/>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover small" id="tblSize" style="width:100%">
                    <thead class="bg-primary">
                    <tr>
                        <th class="text-center" width="30%">Id</th>
                        <th class="text-left">Tên kích thước</th>
                        <th class="text-left">Giới tính</th>
                        <th class="text-left">Xóa</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div id="goodssuppliertab" class="tab-pane fade">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <button class="btn btn-success pull-right" style="margin: 3px" type="button" id="btnCountryReset"><i
                                class="glyphicon glyphicon-refresh"></i> Reset
                    </button>
                    <div class="panel-heading">
                        <b class="small">Danh mục Nước sản xuẩt</b>
                    </div>
                    <div class="panel-body small">
                        <div>
                            <input name="countryid" type="hidden" class="form-control" id="countryid"/>
                        </div>
                        <div class="form-group">
                            <label for="countryname" class="col-sm-4 control-label">Tên Nước</label>
                            <div class="col-sm-8">
                                <input name="countryname" type="text" class="form-control input-sm"
                                       id="countryname" placeholder="Tên Nước" required=""/>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover small" id="tblCountry" style="width:100%">
                    <thead class="bg-primary">
                    <tr>
                        <th class="text-center" width="30%">Id</th>
                        <th class="text-left">Tên Nước</th>
                        <th class="text-left">Xóa</th>
                    </tr>
                    </thead>
                </table>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <button class="btn btn-success pull-right" style="margin: 3px" type="button" id="btnSupplierReset">
                        <i
                                class="glyphicon glyphicon-refresh"></i> Reset
                    </button>
                    <div class="panel-heading">
                        <b class="small">Danh mục Nhà cung cấp</b>
                    </div>
                    <div class="panel-body small">
                        <div>
                            <input name="supplierid" type="hidden" class="form-control" id="supplierid"/>
                        </div>
                        <div class="form-group">
                            <label for="sizename" class="col-sm-4 control-label">Tên nhà cung cấp</label>
                            <div class="col-sm-8">
                                <input name="suppliername" type="text" class="form-control input-sm"
                                       id="suppliername" placeholder="Tên nhà cung cấp" required=""/>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover small" id="tblSupplier" style="width:100%">
                    <thead class="bg-primary">
                    <tr>
                        <th class="text-center" width="30%">Id</th>
                        <th class="text-left">Tên nhà cung cấp</th>
                        <th class="text-left">Xóa</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>

        <script>
            //Hàng hóa
            $(document).ready(function () {
                $('#goodsgroup').selectpicker();
                $('#goodsgroupsub').selectpicker();
                $('#goodstype').selectpicker();
                $('#country').selectpicker();
                $('#supplier').selectpicker();
                $('#goodssize').selectpicker();
                $('#goodssizesex').change(function () {
                    var goodssizesexid = $('#goodssizesex').val();
                    getSizesex(goodssizesexid, "0");
                });
                $('#goodsgroupsub').change(function () {
                    var goodsgroupsubid = $('#goodsgroupsub').val();
                    getGoodsgroup(goodsgroupsubid, "0");
                });

                function getSizesex(goodssizesexid, selected) {
                    $.ajax({
                        type: "POST",
                        url: "admin/controllers/goods/listSizesex.php",
                        data: {
                            'goodssizesexid': goodssizesexid
                        },
                        success: function (data) {
                            $('#goodssize').html(data);
                            $('#goodssize').addClass('selectpicker');
                            $('#goodssize').attr('data-live-search', 'true');
                            $('select[name=goodssize]').val(selected);
                            $('#goodssize').selectpicker('refresh');
                        }
                    });
                    return true;
                }

                loadGoods();

                function loadGoods() {
                    $('#tblGoods').DataTable().destroy();
                    $('#tblGoods').DataTable({
                        width: '100%',
                        responsive: true,
                        order: [[0, 'desc']],
                        ajax: {
                            url: "admin/controllers/goods/listGoods.php",
                            dataSrc: ''
                        },
                        columns: [
                            {data: "id", className: "text-center", width: '5%'},
                            {data: "name"},
                            {data: "unit", visible: false},
                            {data: "unitname", width: '5%', className: "text-center"},
                            {data: "sizesex", visible: false},
                            {data: "sizesexname"},
                            {data: "sizeid", visible: false},
                            {data: "sizename", width: '5%', className: "text-center"},
                            // {data: "colorid", visible: false},
                            {data: "color"},
                            {data: "typeid", visible: false},
                            {data: "typename"},
                            {data: "groupsubid", visible: false},
                            {data: "groupsubname"},
                            {data: "groupid", visible: false},
                            {data: "groupname"},
                            {data: "countryid", visible: false},
                            {data: "countryname"},
                            {data: "supplierid", visible: false},
                            {data: "suppliername"},
                            {
                                data: null,
                                className: "text-center",
                                width: '5%',
                                defaultContent: '<button class="goodsdelete"><i class="glyphicon glyphicon-trash"></i></button>'
                            }
                        ]
                    });
                }

                $('#btnRefreshGoods').click(function (e) {
                    $('#goodsid').val('');
                    $('#goodsname').val('');
                    $('#goodsunit').val('0');
                    $('#goodssizesex').val('0');
                    $('#goodssize').selectpicker('val', '0');
                    $('#goodscolor').tagsinput('removeAll');
                    $('#goodstype').selectpicker('val', '0');
                    $('#goodsgroupsub').selectpicker('val', '0');
                    $('#goodsgroup').selectpicker('val', '0');
                    $('#country').selectpicker('val', '0');
                    $('#supplier').selectpicker('val', '0');
                    loadGoods();
                });

                $('#tblGoods tbody').on('click', 'tr', function (id) {
                    var data = $('#tblGoods').DataTable().row(this).data();
                    if (data["id"] !== undefined && data["id"] !== null) {
                        $("#goodsid").val(data["id"]);
                        $("#goodsname").val(data["name"]);
                        $("#goodsunit").val(data["unit"]);
                        $("#goodssizesex").val(data["sizesex"]);
                        getSizesex(data["sizesex"], data["sizeid"]);
                        // $("#goodscolor").val(data["color"]);
                        $("#goodstype").selectpicker('val', data["typeid"]);
                        $("#goodsgroupsub").selectpicker('val', data["groupsubid"]);
                        getGoodsgroup(data["groupsubid"], data["groupid"]);
                        $("#country").selectpicker('val', data["countryid"]);
                        $("#supplier").selectpicker('val', data["supplierid"]);
                        $('#goodscolor').tagsinput('removeAll');
                        $('#goodscolor').tagsinput('add', data["color"]);
                    }
                });

                $('#btnUpdateGoods').click(function (e) {
                    var id = $('#goodsid').val();
                    var name = $('#goodsname').val();
                    var goodsunit = $('#goodsunit').val();
                    var goodssizesex = $('#goodssizesex').val();
                    var goodssize = $('#goodssize').val();
                    var goodscolor = $('#goodscolor').val().toUpperCase();
                    var goodstype = $('#goodstype').val();
                    var goodsgroupsub = $('#goodsgroupsub').val();
                    var goodsgroup = $('#goodsgroup').val();
                    var country = $('#country').val();
                    var supplier = $('#supplier').val();
                    if (name) {
                        $.ajax({
                            type: "POST",
                            url: "admin/controllers/goods/updateGoods.php",
                            data: {
                                'id': id,
                                'name': name,
                                'goodsunit': goodsunit,
                                'goodssizesex': goodssizesex,
                                'goodssize': goodssize,
                                'goodscolor': goodscolor,
                                'goodstype': goodstype,
                                'goodsgroupsub': goodsgroupsub,
                                'goodsgroup': goodsgroup,
                                'country': country,
                                'supplier': supplier
                            },
                            success: function (data) {
                                if (data == '0') {
                                    jAlert('Thực hiện không thành công', 'Thông báo', function (e) {
                                        $('#goodsname').focus();
                                    });
                                } else {
                                    jAlert('Thực hiện thành công', 'Thông báo', function (e) {
                                        $('#goodsname').focus();
                                    });
                                    $('#btnRefreshGoods').click();
                                }
                            }
                        });
                    } else {
                        jAlert('Chưa nhập tên hàng hóa', 'Thông báo', function (e) {
                            $('#goodsname').focus();
                        });
                    }
                });

                $('#tblGoods').on('click', 'button.goodsdelete', function (e) {
                    var $row = $(this).closest('tr');
                    var data = $('#tblGoods').DataTable().row($row).data();
                    jConfirm('Bạn chắc chắn xóa hàng hóa này?', 'Thông báo', function (e) {
                        if (e == true) {
                            $.ajax({
                                type: "POST",
                                url: "admin/controllers/goods/deleteGoods.php",
                                data: {
                                    'id': data["id"]
                                },
                                success: function (data) {
                                    if (data == '0') {
                                        jAlert('Thực hiện không thành công', 'Thông báo', function (e) {
                                            $('#goodsname').focus();
                                        });
                                    } else {
                                        jAlert('Thực hiện thành công', 'Thông báo', function (e) {
                                            $('#goodsname').focus();
                                        });
                                        $('#btnRefreshGoods').click();
                                    }
                                }
                            });
                        }
                    });
                });
            });
            //Nhà cung cấp
            $(document).ready(function () {
                loadSupplier();

                function loadSupplier() {
                    $('#tblSupplier').DataTable().destroy();
                    $('#tblSupplier').DataTable({
                        width: '100%',
                        responsive: true,
                        order: [[0, 'desc']],
                        ajax: {
                            url: "admin/controllers/goods/listSupplier.php",
                            dataSrc: ''
                        },
                        columns: [
                            {data: "id", className: "text-center", width: '20%'},
                            {data: "name"},
                            {
                                data: null,
                                className: "text-center",
                                width: '10%',
                                defaultContent: '<button class="supplierdelete"><i class="glyphicon glyphicon-trash"></i></button>'
                            }
                        ]
                    });
                }

                $('#btnSupplierReset').click(function (e) {
                    $('#supplierid').val('');
                    $('#suppliername').val('');
                    loadSupplier();
                });

                $('#tblSupplier tbody').on('click', 'tr', function (id) {
                    var data = $('#tblSupplier').DataTable().row(this).data();
                    if (data["id"] !== undefined && data["id"] !== null) {
                        $("#supplierid").val(data["id"]);
                        $("#suppliername").val(data["name"]);
                    }
                });

                $('#suppliername').keypress(function (e) {
                    if (e.keyCode == 13) {
                        var name = $('#suppliername').val();
                        if (name) {
                            $.ajax({
                                type: "POST",
                                url: "admin/controllers/goods/updateSupplier.php",
                                data: {
                                    'id': 0,
                                    'name': name
                                },
                                success: function (data) {
                                    if (data == '0') {
                                        jAlert('Thực hiện không thành công', 'Thông báo', function (e) {
                                            $('#suppliername').focus();
                                        });
                                    } else {
                                        jAlert('Thực hiện thành công', 'Thông báo', function (e) {
                                            $('#suppliername').focus();
                                        });
                                        $('#btnSupplierReset').click();
                                    }
                                }
                            });
                        } else {
                            jAlert('Chưa nhập tên Nhà cung cấp', 'Thông báo', function (e) {
                                $('#suppliername').focus();
                            });
                        }
                    }
                });

                $('#tblSupplier').on('click', 'button.supplierdelete', function (e) {
                    var $row = $(this).closest('tr');
                    var data = $('#tblSupplier').DataTable().row($row).data();
                    jConfirm('Bạn chắc chắn xóa Nhà cung cấp này?', 'Thông báo', function (e) {
                        if (e == true) {
                            $.ajax({
                                type: "POST",
                                url: "admin/controllers/goods/deleteSupplier.php",
                                data: {
                                    'id': data["id"]
                                },
                                success: function (data) {
                                    if (data == '0') {
                                        jAlert('Thực hiện không thành công', 'Thông báo', function (e) {
                                            $('#suppliername').focus();
                                        });
                                    } else {
                                        jAlert('Thực hiện thành công', 'Thông báo', function (e) {
                                            $('#suppliername').focus();
                                        });
                                        $('#btnSupplierReset').click();
                                    }
                                }
                            });
                        }
                    });
                });

                loadCountry();

                function loadCountry() {
                    $('#tblCountry').DataTable().destroy();
                    $('#tblCountry').DataTable({
                        width: '100%',
                        responsive: true,
                        order: [[0, 'desc']],
                        ajax: {
                            url: "admin/controllers/goods/listCountry.php",
                            dataSrc: ''
                        },
                        columns: [
                            {data: "id", className: "text-center", width: '20%'},
                            {data: "name"},
                            {
                                data: null,
                                className: "text-center",
                                width: '10%',
                                defaultContent: '<button class="countrydelete"><i class="glyphicon glyphicon-trash"></i></button>'
                            }
                        ]
                    });
                }

                $('#btnCountryReset').click(function (e) {
                    $('#countryid').val('');
                    $('#countryname').val('');
                    loadCountry();
                });

                $('#tblCountry tbody').on('click', 'tr', function (id) {
                    var data = $('#tblCountry').DataTable().row(this).data();
                    if (data["id"] !== undefined && data["id"] !== null) {
                        $("#countryid").val(data["id"]);
                        $("#countryname").val(data["name"]);
                    }
                });

                $('#countryname').keypress(function (e) {
                    if (e.keyCode == 13) {
                        var name = $('#countryname').val();
                        if (name) {
                            $.ajax({
                                type: "POST",
                                url: "admin/controllers/goods/updateCountry.php",
                                data: {
                                    'id': 0,
                                    'name': name
                                },
                                success: function (data) {
                                    if (data == '0') {
                                        jAlert('Thực hiện không thành công', 'Thông báo', function (e) {
                                            $('#countryname').focus();
                                        });
                                    } else {
                                        jAlert('Thực hiện thành công', 'Thông báo', function (e) {
                                            $('#countryname').focus();
                                        });
                                        $('#btnCountryReset').click();
                                    }
                                }
                            });
                        } else {
                            jAlert('Chưa nhập tên Nước sản xuất', 'Thông báo', function (e) {
                                $('#countryname').focus();
                            });
                        }
                    }
                });

                $('#tblCountry').on('click', 'button.countrydelete', function (e) {
                    var $row = $(this).closest('tr');
                    var data = $('#tblCountry').DataTable().row($row).data();
                    jConfirm('Bạn chắc chắn xóa Nước sản xuất này?', 'Thông báo', function (e) {
                        if (e == true) {
                            $.ajax({
                                type: "POST",
                                url: "admin/controllers/goods/deleteCountry.php",
                                data: {
                                    'id': data["id"]
                                },
                                success: function (data) {
                                    if (data == '0') {
                                        jAlert('Thực hiện không thành công', 'Thông báo', function (e) {
                                            $('#countryname').focus();
                                        });
                                    } else {
                                        jAlert('Thực hiện thành công', 'Thông báo', function (e) {
                                            $('#countryname').focus();
                                        });
                                        $('#btnCountryReset').click();
                                    }
                                }
                            });
                        }
                    });
                });

            });
            // Thuộc tính
            $(document).ready(function () {
                loadColor();

                function loadColor() {
                    $('#tblColor').DataTable().destroy();
                    $('#tblColor').DataTable({
                        width: '100%',
                        responsive: true,
                        order: [[0, 'desc']],
                        ajax: {
                            url: "admin/controllers/goods/listColor.php",
                            dataSrc: ''
                        },
                        columns: [
                            {data: "id", className: "text-center", width: '20%'},
                            {data: "name"},
                            {
                                data: null,
                                className: "text-center",
                                width: '10%',
                                defaultContent: '<button class="colordelete"><i class="glyphicon glyphicon-trash"></i></button>'
                            }
                        ]
                    });
                }

                $('#tblColor tbody').on('click', 'tr', function (id) {
                    var data = $('#tblColor').DataTable().row(this).data();
                    if (data["id"] !== undefined && data["id"] !== null) {
                        $("#colorid").val(data["id"]);
                        $("#colorname").val(data["name"]);
                    }
                });

                $('#colorname').keypress(function (e) {
                    if (e.keyCode == 13) {
                        var name = $('#colorname').val();
                        if (name) {
                            $.ajax({
                                type: "POST",
                                url: "admin/controllers/goods/updateColor.php",
                                data: {
                                    'id': 0,
                                    'name': name
                                },
                                success: function (data) {
                                    if (data == '0') {
                                        jAlert('Thực hiện không thành công', 'Thông báo', function (e) {
                                            $('#colorname').focus();
                                        });
                                    } else {
                                        jAlert('Thực hiện thành công', 'Thông báo', function (e) {
                                            $('#colorname').focus();
                                        });
                                        $('#btnColorReset').click();
                                    }
                                }
                            });
                        } else {
                            jAlert('Chưa nhập tên loại hàng', 'Thông báo', function (e) {
                                $('#colorname').focus();
                            });
                        }
                    }
                });

                $('#btnColorReset').click(function (e) {
                    $('#colorid').val('');
                    $('#colorname').val('');
                    loadColor();
                });

                $('#tblColor').on('click', 'button.colordelete', function (e) {
                    var $row = $(this).closest('tr');
                    var data = $('#tblColor').DataTable().row($row).data();
                    jConfirm('Bạn chắc chắn xóa màu này?', 'Thông báo', function (e) {
                        if (e == true) {
                            $.ajax({
                                type: "POST",
                                url: "admin/controllers/goods/deleteColor.php",
                                data: {
                                    'id': data["id"]
                                },
                                success: function (data) {
                                    if (data == '0') {
                                        jAlert('Thực hiện không thành công', 'Thông báo', function (e) {
                                            $('#colorname').focus();
                                        });
                                    } else {
                                        jAlert('Thực hiện thành công', 'Thông báo', function (e) {
                                            $('#colorname').focus();
                                        });
                                        $('#btnColorReset').click();
                                    }
                                }
                            });
                        }
                    });
                });

                loadSize(-1);

                function loadSize(sex) {
                    $('#tblSize').DataTable().destroy();
                    $('#tblSize').DataTable({
                        width: '100%',
                        responsive: true,
                        order: [[0, 'desc']],
                        ajax: {
                            type: 'POST',
                            url: "admin/controllers/goods/listSize.php",
                            data: {
                                sex: sex
                            },
                            dataSrc: ''
                        },
                        columns: [
                            {data: "id", className: "text-center", width: '20%'},
                            {data: "name"},
                            {data: "sex"},
                            {
                                data: null,
                                className: "text-center",
                                width: '10%',
                                defaultContent: '<button class="sizedelete"><i class="glyphicon glyphicon-trash"></i></button>'
                            }
                        ]
                    });
                }

                document.getElementById('sizesex').addEventListener('change', function () {
                    var sex = $('#sizesex').val();
                    loadSize(sex);
                });

                $('#tblSize tbody').on('click', 'tr', function (id) {
                    var data = $('#tblSize').DataTable().row(this).data();
                    if (data["id"] !== undefined && data["id"] !== null) {
                        $("#sizeid").val(data["id"]);
                        $("#sizename").val(data["name"]);
                    }
                });

                $('#sizename').keypress(function (e) {
                    if (e.keyCode == 13) {
                        var name = $('#sizename').val();
                        var sizesex = $('#sizesex').val();
                        if (name) {
                            $.ajax({
                                type: "POST",
                                url: "admin/controllers/goods/updateSize.php",
                                data: {
                                    'id': 0,
                                    'name': name,
                                    'sizesex': sizesex
                                },
                                success: function (data) {
                                    if (data == '0') {
                                        jAlert('Thực hiện không thành công', 'Thông báo', function (e) {
                                            $('#sizename').focus();
                                        });
                                    } else {
                                        jAlert('Thực hiện thành công', 'Thông báo', function (e) {
                                            $('#sizename').focus();
                                        });
                                        $('#btnSizeReset').click();
                                    }
                                }
                            });
                        } else {
                            jAlert('Chưa nhập tên loại hàng', 'Thông báo', function (e) {
                                $('#sizename').focus();
                            });
                        }
                    }
                });

                $('#btnSizeReset').click(function (e) {
                    loadSize(-1);
                    $('#sizeid').val('');
                    $('#sizename').val('');
                    $('#sizesex').val(0);
                });

            });
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

                loadUnit();

                function loadUnit() {
                    $('#tblUnit').DataTable().destroy();
                    $('#tblUnit').DataTable({
                        width: '100%',
                        responsive: true,
                        order: [[0, 'desc']],
                        ajax: {
                            url: "admin/controllers/goods/listUnit.php",
                            dataSrc: ''
                        },
                        columns: [
                            {data: "id", className: "text-center", width: '20%'},
                            {data: "name"},
                            {
                                data: null,
                                className: "text-center",
                                width: '10%',
                                defaultContent: '<button class="unitdelete"><i class="glyphicon glyphicon-trash"></i></button>'
                            }
                        ]
                    });
                }

                $('#tblUnit tbody').on('click', 'tr', function (id) {
                    var data = $('#tblUnit').DataTable().row(this).data();
                    if (data["id"] !== undefined && data["id"] !== null) {
                        $("#unitid").val(data["id"]);
                        $("#unitname").val(data["name"]);
                    }
                });

                $('#unitname').keypress(function (e) {
                    if (e.keyCode == 13) {
                        var name = $('#unitname').val();
                        if (name) {
                            $.ajax({
                                type: "POST",
                                url: "admin/controllers/goods/updateUnit.php",
                                data: {
                                    'id': 0,
                                    'name': name
                                },
                                success: function (data) {
                                    if (data == '0') {
                                        jAlert('Thực hiện không thành công', 'Thông báo', function (e) {
                                            $('#unitname').focus();
                                        });
                                    } else {
                                        jAlert('Thực hiện thành công', 'Thông báo', function (e) {
                                            $('#unitname').focus();
                                        });
                                        $('#btnUnitReset').click();
                                    }
                                }
                            });
                        } else {
                            jAlert('Chưa nhập đơn vị tính', 'Thông báo', function (e) {
                                $('#unitname').focus();
                            });
                        }
                    }
                });

                $('#btnUnitReset').click(function (e) {
                    $('#unitid').val('');
                    $('#unitname').val('');
                    loadUnit();
                });

                $('#tblUnit').on('click', 'button.unitdelete', function (e) {
                    var $row = $(this).closest('tr');
                    var data = $('#tblUnit').DataTable().row($row).data();
                    jConfirm('Bạn chắc chắn xóa đơn vị tính này?', 'Thông báo', function (e) {
                        if (e == true) {
                            $.ajax({
                                type: "POST",
                                url: "admin/controllers/goods/deleteUnit.php",
                                data: {
                                    'id': data["id"]
                                },
                                success: function (data) {
                                    if (data == '0') {
                                        jAlert('Thực hiện không thành công', 'Thông báo', function (e) {
                                            $('#unitname').focus();
                                        });
                                    } else {
                                        jAlert('Thực hiện thành công', 'Thông báo', function (e) {
                                            $('#unitname').focus();
                                        });
                                        $('#btnUnitReset').click();
                                    }
                                }
                            });
                        }
                    });
                });

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