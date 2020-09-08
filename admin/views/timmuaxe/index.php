<?php require('admin/views/shared/header.php'); ?>
<div id="page-wrapper">
    <div class="panel panel-default">
        <div class="panel-heading text-center form-horizontal">
            <div class="form-group">
                <div class="col-sm-1 control-label">
                    Từ ngày
                </div>
                <div class="col-sm-2">
                    <input name="tungay" type="date" value="<?php echo date('Y-m-01'); ?>"
                           class="form-control input-sm" id="tungay"/>
                </div>
                <div class="col-sm-1 control-label"> Đến ngày</div>
                <div class="col-sm-2">
                    <input name="denngay" type="date" value="<?php echo date('Y-m-d'); ?>"
                           class="form-control input-sm" id="denngay"/>
                </div>
                <div class="col-sm-1 control-label"> Đã duyệt</div>
                <div class="col-sm-1">
                    <input name="daduyet" type="checkbox"
                           class="form-control input-sm" id="daduyet"/>
                </div>
                <div class="col-sm-2 pull-right">
                    <button type="button" class="btn btn-success" id="lammoi"><i
                                class="glyphicon glyphicon-refresh"></i> Làm mới
                    </button>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover small" id="list" style="width:100%">
                    <caption class="bg-primary text-center">Danh sách xe gửi bán</caption>
                    <thead class="bg-primary">
                    <tr>
                        <th>Id</th>
                        <th>Họ tên</th>
                        <th>Điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Thông tin</th>
                        <th>Giá mong muốn</th>
                        <th>Ngày tạo</th>
                        <th></th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<?php require('admin/views/shared/footer.php'); ?>
<script type="text/javascript">
    $(document).ready(function () {

        $('#list').on('click', 'button.xoathongtin', function (e) {
            var $row = $(this).closest('tr');
            var data = $('#list').DataTable().row($row).data();
            jConfirm('Bạn chắc chắn xóa dữ liệu này?', 'Thông báo', function (e) {
                if (e){
                    $.ajax({
                        url: "admin.php?controller=timmuaxe&action=delete",
                        type: "POST",
                        data: {
                            id: data["id"]
                        },
                        success: function (response) {
                            if (response > 0) {
                                return jAlert('Đã xóa thành công', 'Thông báo', function (e) {
                                    load();
                                });
                            }
                        }
                    });
                }
            });
        });
        $("#lammoi").click(function (e) {
            load();
        });
        load();

        function load() {
            var tungay = $('#tungay').val();
            var denngay = $('#denngay').val();
            var daduyet = $('#daduyet').is(":checked") ? "1" : "0";
            $('#list').DataTable().destroy();
            $('#list').DataTable({
                searching: true,
                lengthChange: false,
                width: '100%',
                responsive: true,
                lengthMenu: [[10, 20, 30, "All"]],
                order: [[0, 'desc']],
                ajax: {
                    type: 'POST',
                    url: "admin.php?controller=timmuaxe&action=list",
                    data: {
                        tungay: tungay,
                        denngay: denngay,
                        daduyet: daduyet
                    },
                    dataSrc: ''
                },
                columns: [
                    {data: "id", className: "text-center", width: '7%'},
                    {
                        data: "hoten", width: '15%',
                        render: function (data, type, full, meta) {
                            return '<a href=admin.php?controller=timmuaxe&action=info&id=' + full.id + '>' + data + '</a>'
                        }
                    },
                    {
                        data: "dienthoai", width: '10%', className: "text-left"
                    },
                    {
                        data: "diachi", width: '15%', className: "text-left"
                    },
                    {
                        data: "thongtinxe", width: '28%', className: "text-left"
                    },
                    {
                        data: "giamuamongmuon", width: '15%', className: "text-right"
                    },
                    {
                        data: "ngaytao", width: '10%', className: "text-right"
                    },
                    {
                        data: null,
                        className: "text-center",
                        width: '5%',
                        render: function (data, type, full, meta) {
                            if (daduyet == "0") {
                                return '<button class="xoathongtin"><i class="glyphicon glyphicon-trash"></i></button>'
                            } else {
                                return '';
                            }
                        }
                    }
                ]
            });
        }
    })

</script>
