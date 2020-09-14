<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
        <a href="admin.php?controller=group&amp;action=add" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus"></i> Thêm mới</a>

        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <b>Danh sách hãng xe</b>
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-group">
                        <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th>Tên hãng xe</th>
                            <th class="text-center">Tác vụ</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($groups as $group): ?>
                            <tr class="odd gradeX">
                                <td class="text-center"><?php echo $group['Id'] ?></td>
                                <td>
                                    <a href="admin.php?controller=dongxe"><?php echo $group['Name']; ?></a>
                                </td>
                                <td class="text-center">
                                    <a href="admin.php?controller=group&amp;action=edit&amp;gid=<?php echo $group['Id']; ?>"
                                       class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>
                                    <a href="admin.php?controller=group&amp;action=delete&amp;gid=<?php echo $group['Id']; ?>"
                                       class="text-danger xoahangxe"><i class="glyphicon glyphicon-remove"></i></a>
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
                $('#dataTables-group').DataTable({
                    responsive: true, "order": [[0, 'desc']]
                });

                $('.xoahangxe').on('click', function () {
                    return confirm('Bạn chắc muốn xóa dữ liệu này?', 'Cảnh báo');
                });
            });
        </script>
    </div>
    </div>
<?php require('admin/views/shared/footer.php'); ?>