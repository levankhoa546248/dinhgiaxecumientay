<?php require('admin/views/shared/header.php'); ?>
<div id="page-wrapper">
    <a href="admin.php?controller=user&action=dangky" class="btn btn-primary pull-right"><i
                class="glyphicon glyphicon-plus"></i> Đăng ký</a>
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <b>Danh sách nhân viên</b>
        </div>
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover small" id="dsnhanvien" style="width:100%">
                    <caption class="bg-primary text-center">Danh sách nhân viên</caption>
                    <thead class="bg-primary">
                    <tr>
                        <th>Id</th>
                        <th>Tài khoản</th>
                        <th>Mật khẩu</th>
                        <th>Họ tên</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th></th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require('admin/views/shared/footer.php'); ?>
<script>
    $(document).ready(function () {
        $('#dsnhanvien').DataTable().destroy();
        $('#dsnhanvien').DataTable({
            searching: true,
            lengthChange: false,
            width: '100%',
            responsive: true,
            lengthMenu: [[5, 10, 30, "All"]],
            order: [[0, 'desc']],
            ajax: {
                type: 'POST',
                url: "admin.php?controller=user&action=dsnhanvien",
                dataSrc: ''
            },
            columns: [
                {data: "Id", className: "text-center", width: '5%'},
                {
                    data: "Username",
                    render: function (data, type, full, meta) {
                        return '<a href=admin.php?controller=user&action=edit&id=' + full.Id +'>' + data + '</a>'
                    }
                },
                {data: "Password", visible: false},
                {data: "Name"},
                {data: "Phone"},
                {data: "Address"},
                {
                    data: null,
                    className: "text-center",
                    width: '5%',
                    render: function (data, type, full, meta) {
                        return '<button class="xoaxe"><i class="glyphicon glyphicon-trash"></i></button>'
                    }
                }
            ]
        });
    });
</script>
