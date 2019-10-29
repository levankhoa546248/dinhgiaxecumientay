<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
    <a href="admin.php?controller=category&amp;action=edit" class="btn btn-primary pull-right"><i
            class="glyphicon glyphicon-plus"></i> Thêm mới</a>

        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <b>Danh mục sản phẩm</b>
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-cate">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tên danh mục</th>
                            <th>Vị trí</th>
                            <th>Dường dẫn</th>
                            <th class="text-center"><i class="fa fa-cogs"></i></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($categories as $cate): ?>
                            <tr class="odd gradeX">
                                <td class="text-center"><?php echo $cate['Id'] ?></td>
                                <td>
                                    <a href="admin.php?controller=category&amp;action=edit&amp;cid=<?php echo $cate['Id']; ?>"><?php echo $cate['Name']; ?></a>
                                <td><?php echo $cate['Position'] ?></td>
                                <td><?php echo $cate['alias'] ?></td>
                                <td class="text-center">
                                    <a href="admin.php?controller=category&amp;action=edit&amp;cid=<?php echo $cate['Id']; ?>"
                                       class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>
                                    <a href="admin.php?controller=category&amp;action=delete&amp;cid=<?php echo $cate['Id']; ?>"
                                       class="text-danger deleteitem"><i class="glyphicon glyphicon-remove"></i></a>
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
                $('#dataTables-cate').DataTable({
                    responsive: true,  "order":[[0, 'desc']]
                });
            });
        </script>
    </div>
</div>
<?php require('admin/views/shared/footer.php'); ?>