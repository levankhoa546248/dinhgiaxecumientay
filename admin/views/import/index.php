<?php require('admin/views/shared/header.php'); ?>

<link rel="stylesheet" type="text/css" media="screen" href="admin/themes/combogrid/css/smoothness/jquery-ui-1.10.1.custom.css"/>
<script type="text/javascript" src="admin/themes/combogrid/jquery/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="admin/themes/combogrid/jquery/jquery-ui-1.10.1.custom.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="admin/themes/combogrid/css/jquery-ui-redmond.1.9.1.css"/>
<link rel="stylesheet" type="text/css" media="screen" href="admin/themes/combogrid/css/smoothness/jquery.ui.combogrid.css"/>
<script type="text/javascript" src="admin/themes/combogrid/plugin/jquery.ui.combogrid-1.6.4.js"></script>
<div class="panel panel-default form-horizontal">
    <button class="btn btn-success pull-right" style="margin: 3px" type="reset"
            id="btnRefreshImport"><i class="glyphicon glyphicon-refresh"></i> Refresh
    </button>
    <button class="btn btn-primary pull-right" style="margin: 3px" type="button"
            id="btnUpdateImport"><i
                class="glyphicon glyphicon-plus"></i> Cập nhật
    </button>
    <div class="panel-heading">
        <button class="small" type="button" id="btnShowHide" onclick="fShowHide()"><i
                    class="glyphicon glyphicon-hand-down"></i></button>
        <b class="small">Xuất hàng</b>
    </div>
    <div class="panel-body small" id="divpanelbody" style="display: block">
        <div>
            <input name="goodsid" type="hidden" class="form-control" id="goodsid"/>
        </div>
        <div class="form-group">
            <label for="goodsname" class="col-sm-2 control-label">Tên hàng</label>
            <div class="col-sm-4">
                <input name="goodsname" type="text" class="form-control input-sm" id="goodsname"
                       placeholder="Nhập tên hàng hóa"
                       required=""/>
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
<?php require('admin/views/shared/footer.php'); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $("#goodsname").combogrid({
            url: 'admin/controllers/import/listGoods.php',
            colModel: [
                {'columnName': 'id', 'width': '10', 'label': 'Id'},
                {'columnName': 'name', 'width': '20', 'label': 'Tên hàng'}
            ],
            select: function (event, ui) {
                $("#goodsname").val(ui.item.name);
                return false;
            }
        });
    });
</script>