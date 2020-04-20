<?php require('admin/views/shared/header.php'); ?>
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>-->
<script type="text/javascript" src="admin/themes/js/jquery.min.js"></script>
<script type="text/javascript" src="themes/bootstrap-select/1.13.9/js/bootstrap-select.min.js"></script>
<!--<script type="text/javascript" src="admin/themes/combogrid/jquery/jquery-1.9.1.min.js"></script>-->
<div id="page-wrapper">
    <a href="admin.php?controller=product&amp;action=add" class="btn btn-primary pull-right"><i
                class="glyphicon glyphicon-plus"></i> Thêm mới</a>
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <b>Danh mục xe</b>
        </div>
        <div class="panel-body">
            <div class="pull-left col-sm-12">
                <div class="small form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-1 control-label">
                            Từ ngày
                        </div>
                        <div class="col-sm-2">
                            <input name="tungay" type="date" value="<?php echo date('Y-01-01'); ?>"
                                   class="form-control input-sm" id="tungay"/>
                        </div>
                        <div class="col-sm-1 control-label"> Đến ngày</div>
                        <div class="col-sm-2">
                            <input name="denngay" type="date" value="<?php echo date('Y-m-d'); ?>"
                                   class="form-control input-sm" id="denngay"/>
                        </div>
                        <div class="col-sm-1 control-label"> Hãng xe</div>
                        <div class="col-sm-2">
                            <select name="hangxe" class="form-control input-sm" id="hangxe">
                                <option value="0" selected>Chọn hãng xe</option>
                                <?php foreach ($subcategories as $subcategory) {
                                    $selected = '';
                                    echo '<option value="' . $subcategory['Id'] . '" ' . $selected . '>' . $subcategory['Name'] . '</option>';
                                } ?>
                            </select>
                        </div>
                        <label class="col-sm-1 control-label">
                            <input type="checkbox" id="daban"/> Đã bán</label>
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
                        <th>Chi phí mua</th>
                        <th>Chi phí bán</th>
                        <th>Số lượng</th>
                        <th>Chi phí khác</th>
                        <th>Giá bán</th>
                        <th>Tổng lãi</th>
                        <th>Số tiền còn lại</th>
                        <th>Ngày nhập</th>
                        <th>Ngày bán</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tfoot align="right">
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<?php require('admin/views/shared/footer.php'); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#dsxe').on('click', 'button.xoaxe', function (e) {
            var $row = $(this).closest('tr');
            var data = $('#dsxe').DataTable().row($row).data();
            jConfirm('Bạn chắc chắn xóa xe này?', 'Thông báo', function (e) {
                $.ajax({
                    url: "admin.php?controller=product&action=xoaxe",
                    type: "POST",
                    data: {
                        id: data["id"]
                    },
                    success: function (response) {
                        jAlert('Đã xóa thành công', 'Thông báo');
                        dsxe();
                    }
                });
            });
        });

        $('#daban').click(function () {
            dsxe();
        });
        $("#lammoi").click(function (e) {
            dsxe();
        });
        dsxe();

        function dsxe() {
            var tungay = $('#tungay').val();
            var denngay = $('#denngay').val();
            var hangxe = $("#hangxe").val();
            var daban = $('#daban').is(":checked") ? "1" : "0";
            $('#dsxe').DataTable().destroy();
            $('#dsxe').DataTable({
                searching: true,
                lengthChange: false,
                width: '100%',
                responsive: true,
                lengthMenu: [[15, 30, 45, "All"]],
                order: [[0, 'desc']],
                ajax: {
                    type: 'POST',
                    url: "admin.php?controller=product&action=list",
                    data: {
                        tungay: tungay,
                        denngay: denngay,
                        hangxe: hangxe,
                        daban: daban
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
                            return '<a href=admin.php?controller=product&action=edit&idxe=' + full.id + '&trangthai=' + full.trangthai + '>' + data + '</a>'
                        }
                    },
                    {data: "mausac", width: '7%', className: "text-center"},
                    {
                        data: "giavon", className: "text-right",
                        render: $.fn.dataTable.render.number(',', '.', 0)
                    },
                    {
                        data: "chietkhaumua", className: "text-right",
                        render: $.fn.dataTable.render.number(',', '.', 0),
                        width: '9%'
                    },
                    {
                        data: "chietkhauban", className: "text-right",
                        render: $.fn.dataTable.render.number(',', '.', 0),
                        width: '9%'
                    },
                    {data: "soluong", className: "text-center", width: '8%'},
                    {
                        data: "chiphiphatsinh", className: "text-right",
                        render: $.fn.dataTable.render.number(',', '.', 0),
                        visible: false
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
                        data: "sotienconlai", className: "text-right", visible: false,
                        render: $.fn.dataTable.render.number(',', '.', 0)
                    },
                    {
                        data: "ngaynhap",
                        className: "text-center",
                        width: '8%',
                        visible: $('#daban').is(":checked") ? false : true
                    },
                    {
                        data: "ngayban",
                        className: "text-center",
                        width: '8%',
                        visible: $('#daban').is(":checked") ? true : false
                    },
                    {
                        data: null,
                        className: "text-center",
                        width: '5%',
                        render: function (data, type, full, meta) {
                            return '<button class="xoaxe"><i class="glyphicon glyphicon-trash"></i></button>'
                        }
                    }
                ],
                footerCallback: function (row, data, start, end, display) {
                    var api = this.api(), data;

                    // converting to interger to find total
                    var intVal = function (i) {
                        return typeof i === 'string' ?
                            i.replace(/[\$,]/g, '') * 1 :
                            typeof i === 'number' ?
                                i : 0;
                    };

                    var tongvon = api
                        .column(5)
                        .data()
                        .reduce(function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    var soluong = api
                        .column(8)
                        .data()
                        .reduce(function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    var tonglai = api
                        .column(11)
                        .data()
                        .reduce(function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    // Update footer by showing the total with the reference of the column index
                    $(api.column(2).footer()).html('Tổng');
                    $(api.column(5).footer()).html(formatNumber(tongvon.toString()));
                    $(api.column(8).footer()).html(soluong);
                    $(api.column(11).footer()).html(formatNumber(tonglai.toString()));
                }
            });
        }
    })

</script>
