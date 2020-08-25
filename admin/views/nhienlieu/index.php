<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
        <a href="admin.php?controller=nhienlieu&amp;action=add" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus"></i> Thêm mới</a>

        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <b>Danh sách nhiên liệu</b>
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-group">
                        <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th>Nhiên liệu</th>
                            <th class="text-center">Tác vụ</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($nhienlieus as $nhienlieu): ?>
                            <tr class="odd gradeX">
                                <td class="text-center"><?php echo $nhienlieu['id'] ?></td>
                                <td><?php echo $nhienlieu['name']; ?></td>
                                <td class="text-center">
                                    <a href="admin.php?controller=nhienlieu&amp;action=delete&amp;gid=<?php echo $nhienlieu['id']; ?>"
                                       class="text-danger xoanhienlieu"><i class="glyphicon glyphicon-remove"></i></a>
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

                $('.xoanhienlieu').on('click', function () {
                    return confirm('Bạn chắc muốn xóa dòng xe này?', 'Cảnh báo');
                });
            });
        </script>
    </div>
    </div>
<?php require('admin/views/shared/footer.php'); ?>