<?php require('admin/views/shared/header.php'); ?>
<div id="page-wrapper">
    <div class="panel panel-default">
        <div class="panel-heading bg-primary text-center"><b>THÊM NHÀ ĐẦU TƯ</b></div>
        <div class="panel-body">
            <div class="dataTable_wrapper"><?php $user['Id']; ?>
                <form id="user-form" class="form-horizontal" enctype="multipart/form-data" role="form">
                    <input name="manhadautu" id="manhadautu" type="hidden"/>

                    <div class="form-group">
                        <label for="Name" class="col-sm-3 control-label">Họ tên</label>
                        <div class="col-sm-8">
                            <input name="tennhandautu" type="text" class="form-control" id="tennhandautu" placeholder="Tên nhà đầu tư"
                                   required=""/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="sodienthoai" class="col-sm-3 control-label">Số điện thoại</label>
                        <div class="col-sm-8">
                            <input name="sodienthoai" type="text" class="form-control" id="sodienthoai" placeholder="Số điện thoại" pattern="[0-9]{10,11}"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="diachi" class="col-sm-3 control-label">Địa chỉ</label>
                        <div class="col-sm-8">
                            <input name="diachi" type="text" class="form-control" id="diachi"
                                   placeholder="Địa chỉ" required=""/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="facebook" class="col-sm-3 control-label">Facebook</label>
                        <div class="col-sm-8">
                            <input name="facebook" type="text" class="form-control" id="facebook" placeholder="Facebook"required=""/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="zalo" class="col-sm-3 control-label">Zalo</label>
                        <div class="col-sm-8">
                            <input name="zalo" type="text" class="form-control" id="zalo" placeholder="Zalo"required=""/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="image1" class="col-sm-3 control-label">Ảnh Đại Diện</label>
                        <div class="col-sm-8">
                            <input name="Image1" type="file" class="form-control" id="image1" accept="image/*"/><br>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="image1" class="col-sm-3 control-label"></label>
                        <div class="col-sm-8">
                            <button type="button" id="themnhadautu" name="themnhadautu" class="btn btn-primary">Thêm mới</button>
                            <a class="btn btn-warning" href="admin.php?controller=nhadautu&action=list">Trở về</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
<?php require('admin/views/shared/footer.php'); ?>

<script>
    $(function() {
        $("#themnhadautu").click(function (e) {

        });
    });
</script>