<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
        <a href="admin.php?controller=nhadautu&amp;action=add" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus"></i> Thêm mới</a>
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <b>Danh sách nhà đầu tư</b>
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-user">
                        <thead>
                        <tr>
                            <th class="text-center">Mã</th>
                            <th>Tên nhà đầu tư</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th class="text-right">Tổng tiền</th>
                            <th class="text-right">Số dư</th>
                            <th class="text-center">Chức năng</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($dsNhaDauTu as $records): ?>
                            <tr class="odd gradeX">
                                <td class="text-center"><?php echo $records['manhadautu'] ?></td>
                                <td>
                                    <a href="admin.php?controller=user&amp;action=info&amp;uid=<?php echo $records['manhadautu']; ?>"><?php echo $records['tennhadautu']; ?></a>
                                </td>
                                <td><?php echo $records['sodienthoai'] ?></td>
                                <td class="center"><?php echo $records['diachi'] ?></td>
                                <td class="text-right"><?php echo number_format($records['tongtien'], 0, '.', ',') ?></td>
                                <td class="text-right"><?php echo number_format($records['sodu'], 0, '.', ',') ?></td>
                                <td class="text-center">
                                    <a href="admin.php?controller=nhadautu&amp;action=edit&amp;uid=<?php echo $records['manhadautu']; ?>"
                                       class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>
                                    <a href="admin.php?controller=nhadautu&amp;action=delete&amp;uid=<?php echo $records['manhadautu']; ?>"
                                       class="text-danger xoanhadautu"><i class="glyphicon glyphicon-remove"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $('#dataTables-user').DataTable({
                    responsive: true, "order": [[0, 'desc']]
                });

                $('.xoanhadautu').on('click', function () {
                    return confirm('Bạn chắc muốn xóa dữ liệu này?', 'Cảnh báo');
                });
            });
        </script>
    </div>
    </div>
<?php require('admin/views/shared/footer.php'); ?>