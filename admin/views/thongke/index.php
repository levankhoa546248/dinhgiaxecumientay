<?php require('admin/views/shared/header.php'); ?>
<div id="page-wrapper">
    <div class="panel panel-default">
        <div class="panel-heading text-center form-horizontal">
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
                <div class="col-sm-2 pull-right">
                    <button type="button" class="btn btn-success" id="lammoi"><i
                                class="glyphicon glyphicon-refresh"></i> Làm mới
                    </button>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover small" id="dsnhadautu" style="width:100%">
                    <caption class="bg-primary text-center">Thống kê theo nhà đầu tư</caption>
                    <thead class="bg-primary">
                    <tr>
                        <th>Id</th>
                        <th>Họ tên</th>
                        <th>Tổng tiền</th>
                        <th>Số dư</th>
                        <th>Tiền lãi</th>
                        <th>Tiền vốn</th>
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
            thongketheonhadautu();
        });
        thongketheonhadautu();

        function thongketheonhadautu() {
            var tungay = $('#tungay').val();
            var denngay = $('#denngay').val();
            $('#dsnhadautu').DataTable().destroy();
            $('#dsnhadautu').DataTable({
                searching: true,
                lengthChange: false,
                width: '100%',
                responsive: true,
                lengthMenu: [[5, 10, 30, "All"]],
                order: [[0, 'desc']],
                ajax: {
                    type: 'POST',
                    url: "admin.php?controller=thongke&action=nhadautu",
                    data: {
                        tungay: tungay,
                        denngay: denngay
                    },
                    dataSrc: ''
                },
                columns: [
                    {data: "manhadautu", className: "text-center", width: '10%'},
                    {
                        data: "tennhadautu", width: '35%',
                        render: function (data, type, full, meta) {
                            return '<a href=admin.php?controller=thongke&action=dsxe&idxe=' + full.manhadautu + '>' + data + '</a>'
                        }
                    },
                    {
                        data: "tongtien", className: "text-right",
                        render: $.fn.dataTable.render.number(',', '.', 0)
                    },
                    {
                        data: "sodu", className: "text-right",
                        render: $.fn.dataTable.render.number(',', '.', 0)
                    },
                    {
                        data: "tienlai", className: "text-right",
                        render: $.fn.dataTable.render.number(',', '.', 0)
                    },
                    {
                        data: "vondautu", className: "text-right",
                        render: $.fn.dataTable.render.number(',', '.', 0)
                    }
                ]
            });
        }
    })

</script>
