<?php
$options = array(
//    'where' => 'TypeId = 2',
    'order_by' => 'Createdate'
);
$products = get_all('product', $options);
?>
<div class="panel panel-default">
    <div class="panel-heading text-center">
        <b>Danh mục sản phẩm</b>
    </div>
    <div class="panel-body">

        <div class="dataTable_wrapper">
            <table class="table table-striped table-bordered table-hover" id="dataTables-new">
                <thead>
                <!--                <tr>-->
                <!--                    <th>Id</th>-->
                <!--                    <th>Tên SP</th>-->
                <!--                    <th>Giá</th>-->
                <!--                    <th>Ngày tạo</th>-->
                <!--                    <th>Số lượng</th>-->
                <!--                    <th>Nhóm danh mục</th>-->
                <!--                    <th>Danh mục</th>-->
                <!--                    <th>Chức năng</th>-->
                <!--                </tr>-->
                <tr>
                    <th>Id</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Ngày tạo</th>
                    <th>Số lượng</th>
                    <th>Nhóm danh mục</th>
                    <th>Danh mục</th>
                    <th>Img</th>
                    <th>Chức năng</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td class="text-center"><?php echo $product['Id'] ?></td>
                        <td>
                            <a href="admin.php?controller=product&amp;action=edit&amp;pid=<?php echo $product['Id']; ?>"><?php echo $product['Name']; ?></a>
                        </td>
                        <td class="text-right"><?php echo $product ? number_format($product['Price'], 0, ',', '.') : 0; ?></td>
                        <td class="text-right"><?php echo date_format(new DateTime($product['Createdate']),'d-m-Y') ?></td>
                        <td class="text-center"><?php echo $product['Amount'] ?></td>
                        <td class="text-center">
                            <?php
                            $category = get_a_record('categories', $product['CategoryId']);
                            if ($category['Id'] != 0) {
                                echo $category['Name'];
                            }
                            ?></td>
                        <td class="text-center">
                            <?php
                            $subcategory = get_a_record('subcategory', $product['SubCategoryId']);
                            if ($subcategory['Id'] != 0) {
                                echo $subcategory['Name'];
                            }
                            ?>
                        </td>
                        <td class="text-center">
                            <?php
                            echo $product['Image1'] ? '<image src="public/upload/product/' . $product['Image1'] . '?time=' . time() . '" style="max-width:50px;" />': '';
                            ?>
                        </td>
                        <td class="text-center">
                            <a href="admin.php?controller=product&amp;action=edit&amp;pid=<?php echo $product['Id']; ?>"
                               class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="admin.php?controller=product&amp;action=delete&amp;pid=<?php echo $product['Id']; ?>"
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
        var table =
            $('#dataTables-new').DataTable({
                "order": [[0, 'desc']],
                responsive: true,
                "columnDefs": [
                    { "width": "20%", "targets": 1},
                    { "width": "5%", "targets": 4},
                    { "width": "10%", "targets": 5},
                    { "width": "10%", "targets": 8}
                ]
                // initComplete: function () {
                //     this.api().columns().every(function () {
                //         var column = this;
                //         var select = $('<select><option value="">Select</option></select>')
                //             .appendTo($(column.header()).empty())
                //             .on('change', function () {
                //                 var val = $.fn.dataTable.util.escapeRegex(
                //                     $(this).val()
                //                 );
                //
                //                 column
                //                     .search(val ? '^' + val + '$' : '', true, false)
                //                     .draw();
                //             });
                //
                //         column.data().unique().sort().each(function (d, j) {
                //             select.append('<option value="' + d + '">' + d + '</option>')
                //         });
                //     });
                // }
            });
    });
</script>
