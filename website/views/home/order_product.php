<script type="text/javascript" src="admin/themes/js/jquery.min.js"></script>
<script type="text/javascript" src="themes/bootstrap-select/1.13.9/js/bootstrap-select.min.js"></script>
<div class="arrivals">
    <div class="container-top">
        <div class="block-title">
            <a class="view-all-product" href="type/1-san-pham-order.html">Xem tất cả<span> </span></a>  <h5
                    class="block-title-name"><a style="color: #FFFFFF">SẢN PHẨM</a></h5>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="pull-left col-sm-12">
                    <div class="small form-horizontal">
                        <div class="form-group">
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
                            <div class="col-sm-1 control-label">Dòng xe</div>
                            <div class="col-sm-2">
                                <select name="dongxe" class="form-control input-sm" id="hangxe">
                                    <option value="0" selected>Chọn dòng xe</option>
                                    <?php foreach ($subcategories as $subcategory) {
                                        $selected = '';
                                        echo '<option value="' . $subcategory['Id'] . '" ' . $selected . '>' . $subcategory['Name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                            <div class="col-sm-1 control-label">Năm sản xuất</div>
                            <div class="col-sm-2">
                                <select name="namsanxuat" class="form-control input-sm" id="namsanxuat">
                                    <option value="0" selected>Chọn năm sản xuất</option>
                                    <?php foreach ($subcategories as $subcategory) {
                                        $selected = '';
                                        echo '<option value="' . $subcategory['Id'] . '" ' . $selected . '>' . $subcategory['Name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                            <div class="col-sm-1 control-label">Nhiên liệu</div>
                            <div class="col-sm-2">
                                <select name="nhienlieu" class="form-control input-sm" id="nhienlieu">
                                    <option value="0" selected>Chọn nhiên liệu</option>
                                    <?php foreach ($subcategories as $subcategory) {
                                        $selected = '';
                                        echo '<option value="' . $subcategory['Id'] . '" ' . $selected . '>' . $subcategory['Name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-1 control-label">Hợp số</div>
                            <div class="col-sm-2">
                                <select name="hopso" class="form-control input-sm" id="hopso">
                                    <option value="0" selected>Chọn hợp số</option>
                                    <?php foreach ($subcategories as $subcategory) {
                                        $selected = '';
                                        echo '<option value="' . $subcategory['Id'] . '" ' . $selected . '>' . $subcategory['Name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                            <div class="col-sm-1 control-label">Chỗ ngồi</div>
                            <div class="col-sm-2">
                                <select name="chongoi" class="form-control input-sm" id="chongoi">
                                    <option value="0" selected>Chọn chỗ ngồi</option>
                                    <?php foreach ($subcategories as $subcategory) {
                                        $selected = '';
                                        echo '<option value="' . $subcategory['Id'] . '" ' . $selected . '>' . $subcategory['Name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                            <div class="col-sm-1 control-label">Xuất xứ</div>
                            <div class="col-sm-2">
                                <select name="xuatxu" class="form-control input-sm" id="xuatxu">
                                    <option value="0" selected>Chọn xuất xứ</option>
                                    <?php foreach ($subcategories as $subcategory) {
                                        $selected = '';
                                        echo '<option value="' . $subcategory['Id'] . '" ' . $selected . '>' . $subcategory['Name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                            <div class="col-sm-1 control-label">Giá bán</div>
                            <div class="col-sm-2">
                                <select name="giaban" class="form-control input-sm" id="giaban">
                                    <option value="0" selected>Chọn giá bán</option>
                                    <?php foreach ($subcategories as $subcategory) {
                                        $selected = '';
                                        echo '<option value="' . $subcategory['Id'] . '" ' . $selected . '>' . $subcategory['Name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12 text-center">
                                <button type="button" class="btn btn-success" id="timkiem"><i
                                            class="glyphicon glyphicon-search"></i> Tìm kiếm
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--            <div class="feature-grids" style="background-color:#ffffff">-->
        <div class="dataTable_wrapper small" style="width: 100%">
            <?php if (empty($order_products)) : ?>
                <h3 class="col-sm-12">Không có sản phẩm nào trong danh mục này.</h3>
            <?php endif; ?>
            <?php foreach ($order_products as $order_product): ?>
                <div class="col-xs-2 feature-grid jewel m-1">
                    <a href="product/<?php echo $order_product['id']; ?>-<?php echo $order_product['mausac']; ?>.html"
                       class="screenshot"
                       rel="<?php echo PATH_IMG_PRODUCT . $order_product['imagemain'] ?>"><?php echo '<image src="' . PATH_IMG_PRODUCT . $order_product['imagemain'] . '?time=' . time() . '"alt="' . $order_product['imagemain'] . '" />'; ?>
                    </a>
                    <!--                                --><?php //if ($order_product['imagemain'] == null):?>
                    <!--                                <a href="product/-->
                    <?php //echo $order_product['id']; ?><!-----><?php //echo $order_product['mausac']; ?><!--.html"-->
                    <!--                                   class="screenshot"-->
                    <!--                                   rel="-->
                    <?php //echo "website/themes/upload/product/car-loading.jpg" ?><!--">--><?php //echo '<image src="' . "website/themes/upload/product/car-loading.jpg" . '?time=' . time() . '"alt="' . $order_product['imagemain'] . '" />'; ?>
                    <!--                                </a>-->
                    <!--                                --><?php //else: ?>
                    <!--                                <a href="product/-->
                    <?php //echo $order_product['id']; ?><!-----><?php //echo $order_product['mausac']; ?><!--.html"-->
                    <!--                                   class="screenshot"-->
                    <!--                                   rel="-->
                    <?php //echo PATH_IMG_PRODUCT . $order_product['imagemain'] ?><!--">--><?php //echo '<image src="' . PATH_IMG_PRODUCT . $order_product['imagemain'] . '?time=' . time() . '"alt="' . $order_product['imagemain'] . '" />'; ?>
                    <!--                                </a>-->
                    <!--                                --><?php //endif; ?>
                    <div class="arrival-info">
                        <h4><?php echo $order_product['tenxe'] ?></h4>

                        <p>Giá bán
                            : <?php echo $order_product ? $order_product['giaban'] == "0" ? "Liên hệ" : number_format($order_product['giaban'], 0, ',', '.') . "vnđ" : "Liên hệ"; ?>
                            </p>
                    </div>
                    <div class="viw">
                        <a href="product/view/<?php echo $order_product['id']; ?>-<?php echo $order_product['mausac']; ?>.html"><span
                                    class="glyphicon glyphicon-eye-open"
                                    aria-hidden="true"></span>Quick
                            View</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="clearfix"></div>
    </div>
    <!--    <div class="container">-->
    <!--        <div class="text-center">-->
    <!--            <ul class="pagination" style="font-size: large;">-->
    <!--                <li class="page-item pull-left"><a class="page-link" href="#"><b>Trước</b></a></li>-->
    <!--                <li class="page-item"><a class="page-link">1/-->
    <?php //echo count($order_products); ?><!--</a></li>-->
    <!--                <li class="page-item"><a class="page-link" href="#"><b>Sau</b></a></li>-->
    <!--            </ul>-->
    <!--        </div>-->
    <!--    </div>-->
</div>