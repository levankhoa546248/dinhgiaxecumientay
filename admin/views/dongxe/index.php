<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
        <a href="admin.php?controller=dongxe&amp;action=add" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus"></i> Thêm mới</a>

        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <b>Danh sách dòng xe</b>
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-group">
                        <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th>Tên dòng xe</th>
                            <th>Tên hãng xe</th>
                            <th class="text-center">Tác vụ</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($dongxes as $dongxe): ?>
                            <tr class="odd gradeX">
                                <td class="text-center"><?php echo $dongxe['id'] ?></td>
                                <td><?php echo $dongxe['dongxe'] ?></td>
                                <td><?php echo $dongxe['tenhangxe']; ?></td>
                                <td class="text-center">
                                    <a href="admin.php?controller=dongxe&amp;action=edit&amp;gid=<?php echo $dongxe['id']; ?>"
                                       class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>
                                    <a href="admin.php?controller=dongxe&amp;action=delete&amp;gid=<?php echo $dongxe['id']; ?>"
                                       class="text-danger xoadongxe"><i class="glyphicon glyphicon-remove"></i></a>
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

                $('.xoadongxe').on('click', function () {
                    return confirm('Bạn chắc muốn xóa dòng xe này?', 'Cảnh báo');
                });
            });
        </script>
    </div>
    </div>
<?php require('admin/views/shared/footer.php'); ?>