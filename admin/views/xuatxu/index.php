<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
        <a href="admin.php?controller=xuatxu&amp;action=add" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus"></i> Thêm mới</a>

        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <b>Danh sách xuất xứ</b>
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-group">
                        <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th>Xuất xứ</th>
                            <th class="text-center">Tác vụ</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($xuatxus as $xuatxu): ?>
                            <tr class="odd gradeX">
                                <td class="text-center"><?php echo $xuatxu['id'] ?></td>
                                <td><?php echo $xuatxu['name']; ?></td>
                                <td class="text-center">
                                    <a href="admin.php?controller=xuatxu&amp;action=delete&amp;gid=<?php echo $xuatxu['id']; ?>"
                                       class="text-danger delete"><i class="glyphicon glyphicon-remove"></i></a>
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

                $('.delete').on('click', function () {
                    return confirm('Bạn chắc muốn xóa dữ liệu này?', 'Cảnh báo');
                });
            });
        </script>
    </div>
    </div>
<?php require('admin/views/shared/footer.php'); ?>