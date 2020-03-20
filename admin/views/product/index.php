<?php require('admin/views/shared/header.php'); ?>
<div id="page-wrapper" style="min-height: 200px">
    <a href="admin.php?controller=product&amp;action=add" class="btn btn-primary pull-right"><i
                class="glyphicon glyphicon-plus"></i> Thêm mới</a>
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <b>Danh mục sản phẩm</b>
        </div>
        <div class="panel-body">
            <div class="pull-left col-sm-12">
                <div class="small form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-1 control-label">
                            Từ ngày
                        </div>
                        <div class="col-sm-2">
                            <input name="tungay" type="date" value="<?php echo date('Y-m-d'); ?>"
                                   class="form-control input-sm" id="tungay"/>
                        </div>
                        <div class="col-sm-1 control-label"> Đến ngày</div>
                        <div class="col-sm-2">
                            <input name="denngay" type="date" value="<?php echo date('Y-m-d'); ?>"
                                   class="form-control input-sm" id="denngay"/>
                        </div>
                        <div class="col-sm-1 control-label"> Hãng xe</div>
                        <div class="col-sm-3">
                            <select name="hangxe" class="form-control input-sm" id="hangxe">
                                <option value="0" selected>Chọn hãng xe</option>
                                <?php foreach ($subcategories as $subcategory) {
                                    $selected = '';
                                    echo '<option value="' . $subcategory['Id'] . '" ' . $selected . '>' . $subcategory['Name'] . '</option>';
                                } ?>
                            </select>
                        </div>
                        <div class="col-sm-2 pull-right">
                            <button type="button" class="btn btn-success" id="lammoi"><i
                                        class="glyphicon glyphicon-refresh"></i> Làm mới
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover small" id="dsxe" style="width:100%">
                    <caption class="bg-primary text-center">Danh sách xe</caption>
                    <thead class="bg-primary">
                    <tr>
                        <th>Id</th>
                        <th>Id Hãng xe</th>
                        <th>Hãng xe</th>
                        <th>Tên xe</th>
                        <th>Màu sắc</th>
                        <th>Giá vốn</th>
                        <th>Chiết khấu mua</th>
                        <th>Chiết khấu bán</th>
                        <th>Số lượng</th>
                        <th>Chi phí khác</th>
                        <th>Giá bán</th>
                        <th>Tổng lãi</th>
                        <th>Số tiền còn lại</th>
                        <th>Ngày nhập</th>
                        <th></th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<?php require('admin/views/shared/footer.php'); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $("#lammoi").click(function (e) {
            dsxe();
        });
        dsxe();

        function dsxe() {
            var tungay = $('#tungay').val();
            var denngay = $('#denngay').val();
            var hangxe = $("#hangxe").val();
            $('#dsxe').DataTable().destroy();
            $('#dsxe').DataTable({
                    searching: true,
                    lengthChange: false,
                    width: '100%',
                    responsive: true,
                    lengthMenu: [[5, 10, 30, "All"]],
                    order: [[0, 'desc']],
                    ajax: {
                        type: 'POST',
                        url: "admin.php?controller=product&action=list",
                        data: {
                            tungay: tungay,
                            denngay: denngay,
                            hangxe: hangxe
                        },
                        dataSrc: ''
                    },
                    columns: [
                        {data: "id", className: "text-center", width: '5%'},
                        {data: "hangxe", visible: false},
                        {
                            data: "tenhangxe"
                        },
                        {
                            data: "tenxe", width: '15%',
                            render: function (data, type, full, meta) {
                                return '<a href=admin.php?controller=product&action=edit&idxe=' + full.id + '>' + data + '</a>'
                            }
                        },
                        {data: "mausac"},
                        {
                            data: "giavon", className: "text-right",
                            render: $.fn.dataTable.render.number(',', '.', 0)
                        },
                        {
                            data: "chietkhaumua", className: "text-right",
                            render: $.fn.dataTable.render.number(',', '.', 0)
                        },
                        {
                            data: "chietkhauban", className: "text-right",
                            render: $.fn.dataTable.render.number(',', '.', 0)
                        },
                        {data: "soluong", className: "text-center"},
                        {
                            data: "chiphiphatsinh", className: "text-right",
                            render: $.fn.dataTable.render.number(',', '.', 0)
                        },
                        {
                            data: "giaban", className: "text-right",
                            render: $.fn.dataTable.render.number(',', '.', 0)
                        },
                        {
                            data: "tonglai", className: "text-right",
                            render: $.fn.dataTable.render.number(',', '.', 0)
                        },
                        {
                            data: "sotienconlai", className: "text-right",
                            render: $.fn.dataTable.render.number(',', '.', 0)
                        },
                        {
                            data: "ngaynhap",
                            className: "text-center",
                        },
                        {
                            data: null,
                            className: "text-center",
                            width: '5%',
                            defaultContent: '<button class="coupondelete"><i class="glyphicon glyphicon-trash"></i></button>'
                        }
                    ]
                }
            )
        }
    })

</script>
