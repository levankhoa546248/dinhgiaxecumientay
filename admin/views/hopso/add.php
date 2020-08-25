<?php require('admin/views/shared/header.php'); ?>
<!-- Navigation -->
<div id="page-wrapper">
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <b><?php echo $title ?></b>
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <div class="panel-body">
                    <form id="category-form" class="form-horizontal" method="post" enctype="multipart/form-data"
                          role="form" action="admin.php?controller=hopso&action=add">
                        <input name="id" type="hidden"/>
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">Hợp số</label>
                            <div class="col-sm-9">
                                <input name="name" type="text" class="form-control" id="name" placeholder="Hợp số"
                                       required="" autofocus/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-primary">Thêm mới</button>
                                <a class="btn btn-warning" href="admin.php?controller=hopso">Trở về</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
</div>
</div>
<!-- /#wrapper -->
<?php require('admin/views/shared/footer.php'); ?>

