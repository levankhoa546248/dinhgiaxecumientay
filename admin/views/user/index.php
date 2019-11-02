<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
        <a href="admin.php?controller=user&amp;action=add" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus"></i> Thêm mới</a>
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <b>Danh mục nhân viên</b>
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-user">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tên đăng nhập</th>
                            <th>Tên user</th>
                            <th>Email</th>
                            <th>Loại user</th>
                            <th hidden>RoleId</th>
                            <th>Số dư</th>
                            <th class="text-center">Chức năng</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($list_user as $user): ?>
                            <tr class="odd gradeX">
                                <td class="text-center"><?php echo $user['Id'] ?></td>
                                <td>
                                    <a href="admin.php?controller=user&amp;action=info&amp;uid=<?php echo $user['Id']; ?>"><?php echo $user['Username']; ?></a>
                                </td>
                                <td><?php echo $user['Name'] ?></td>
                                <td class="center"><?php echo $user['Email'] ?></td>
                                <td class="center">
                                    <?php switch ($user['TypeUser']) {
                                        case "1":
                                            echo 'Nhân viên';
                                            break;
                                        case "2":
                                            echo 'Nhà đầu tư';
                                            break;
                                        case "3" :
                                            echo 'Khách hàng';
                                            break;
                                        default:
                                            echo 'Chọn loại user';
                                    }
                                    ?>
                                </td>
                                <td class="center" hidden>
                                    <?php switch ($user['RoleId']) {
                                        case "1":
                                            echo 'Quyền Admin';
                                            break;
                                        case "2":
                                            echo 'Quyền nhân viên';
                                            break;
                                        case "3" :
                                            echo 'Không có quyền';
                                            break;
                                        default:
                                            echo 'Chọn quyền quản trị';
                                    }
                                    ?>
                                </td>
                                <td class="text-right"><?php echo number_format($user['Surplus'], 0, '.', ',') ?></td>
                                <td class="text-center">
                                    <a href="admin.php?controller=user&amp;action=edit&amp;uid=<?php echo $user['Id']; ?>"
                                       class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>
                                    <a href="admin.php?controller=user&amp;action=delete&amp;uid=<?php echo $user['Id']; ?>"
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
                $('#dataTables-user').DataTable({
                    responsive: true, "order": [[0, 'desc']]
                });
            });
        </script>
    </div>
    </div>
<?php require('admin/views/shared/footer.php'); ?>