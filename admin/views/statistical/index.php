<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <b>Thống kê theo người nhận</b>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <form id="category-form" class="form-horizontal" method="post"
                      enctype="multipart/form-data" role="form">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Từ ngày</label>
                        <div class="col-sm-4">
                            <input name="FromDate" type="date" value="<?php echo date('Y-m-d') ?>"
                                   class="form-control" id="FromDate" placeholder="Từ ngày"/>
                        </div>
                        <label for="link" class="col-sm-2 control-label">Đến ngày</label>
                        <div class="col-sm-4">
                            <input name="ToDate" type="date" value="<?php echo date('Y-m-d') ?>"
                                   class="form-control" id="ToDate" placeholder="Đến ngày"/>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button type="button" class="btn btn-primary" id="btnView" name="btnView">Xem</button>
                    </div>
                </form>
            </div>
            <table class="table table-striped table-bordered table-hover" id="tbl_statistical">
                <thead>
                <tr>
                    <th>Người nhận</th>
                    <th>Tiền nhận</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($staReveicer as $staReveicers): ?>
                    <tr class="odd gradeX">
                        <td class="text-left"><?php echo $staReveicers['uName'] ?></td>
                        <td class="text-right">
                            <?php echo number_format($staReveicers['Total'], 0, '.', ','); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $("#btnView").click(function () {
                var FromDate = $("#FromDate").val();
                var ToDate = $("#ToDate").val();
                $.ajax({
                    url: "admin/views/statistical/getStatisticalWithReceiver.php",
                    type: "POST",
                    data: {
                        'FromDate': FromDate,
                        'ToDate': ToDate
                    },
                    success: function (json) {
                        $('#tbl_statistical').DataTable().destroy();
                        $('#tbl_statistical').DataTable({
                            data: JSON.parse(json),
                            columns: [
                                {data: 'uName', align: 'center'},
                                {
                                    data: 'Total',
                                    render: $.fn.dataTable.render.number(',', '.')
                                }
                            ],
                            columnDefs: [
                                {
                                    "targets": 0, // your case first column
                                    "className": "text-left",
                                    "width": "50%"
                                }, {
                                    "targets": 1, // your case first column
                                    "className": "text-right",
                                    "width": "50%"
                                }
                            ]
                        });
                    }
                });
            });

            $('#tbl_statistical').DataTable({
                responsive: true,
                order: [[1, 'desc']]
            });

        });
    </script>
<?php require('admin/views/shared/footer.php'); ?>