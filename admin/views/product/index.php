<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper" style="min-height: 200px">
        <a href="admin.php?controller=product&amp;action=edit" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus"></i> Thêm mới</a>
<!--        --><?php //require('tableNewproduct.php'); ?>
<!--        --><?php //require('tableOrderproduct.php'); ?>
<!--        --><?php //require('tableSaleproduct.php'); ?>
        <?php require('product.php'); ?>
    </div>
    </div>
<?php require('admin/views/shared/footer.php'); ?>