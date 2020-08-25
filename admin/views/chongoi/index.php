<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
        <a href="admin.php?controller=chongoi&amp;action=add" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus"></i> Thêm mới</a>

        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <b>Danh sách chỗ ngồi</b>
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-group">
                        <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th>Chỗ ngồi</th>
                            <th class="text-center">Tác vụ</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($chongois as $chongoi): ?>
                            <tr class="odd gradeX">
                                <td class="text-center"><?php echo $chongoi['id'] ?></td>
                                <td><?php echo $chongoi['name']; ?></td>
                                <td class="text-center">
                                    <a href="admin.php?controller=chongoi&amp;action=delete&amp;gid=<?php echo $chongoi['id']; ?>"
                                       class="text-danger xoachongoi"><i class="glyphicon glyphicon-remove"></i></a>
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

                $('.xoachongoi').on('click', function () {
                    return confirm('Bạn chắc muốn xóa dữ liệu này?', 'Cảnh báo');
                });
            });
        </script>
    </div>
    </div>
<?php require('admin/views/shared/footer.php'); ?>