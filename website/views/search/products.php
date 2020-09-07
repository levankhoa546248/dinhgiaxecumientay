<script type="text/javascript" src="admin/themes/js/jquery.min.js"></script>
<script type="text/javascript" src="themes/bootstrap-select/1.13.9/js/bootstrap-select.min.js"></script>
<?php
if (isset($_GET["search"])) {
    $arrsearch = preg_split("/\,/", $_GET["search"]);
    $s_hangxe = intval($arrsearch[0]);
    $s_dongxe = intval($arrsearch[1]);
    $s_nhienlieu = intval($arrsearch[2]);
    $s_hopso = intval($arrsearch[3]);
    $s_chongoi = intval($arrsearch[4]);
    $s_namsanxuat = intval($arrsearch[5]);
    $s_xuatxu = intval($arrsearch[6]);
    $s_mausac = intval($arrsearch[7]);
    $s_giaban = intval($arrsearch[8]);
}
?>
<div class="arrivals">
    <div class="container-top">
        <div class="block-title"><h5 class="block-title-name">SẢN PHẨM</h5>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="pull-left col-sm-12">
                    <div class="small form-horizontal">
                        <div class="form-group">
                            <div class="col-sm-1 control-label"> Hãng xe</div>
                            <div class="col-sm-2">
                                <select name="hangxe" class="form-control" id="hangxe"
                                        onChange="getDongXe(this.value);">
                                    <option value="" selected>Chọn hãng xe</option>
                                    <?php foreach ($subcategories as $subcategory) {
                                        $selected = '';
                                        if ($s_hangxe == $subcategory['Id']) $selected = 'selected=""';
                                        echo '<option value="' . $subcategory['Id'] . '" ' . $selected . '>' . $subcategory['Name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                            <div class="col-sm-1 control-label">Dòng xe</div>
                            <div class="col-sm-2">
                                <select name="dongxe" class="form-control" id="dongxe">
                                    <option value="" selected>Chọn dòng xe</option>
                                    <?php foreach ($dongxes as $dongxe) {
                                        $selected = '';
                                        if ($s_dongxe == $dongxe['id']) $selected = 'selected=""';
                                        echo '<option value="' . $dongxe['id'] . '" ' . $selected . '>' . $dongxe['dongxe'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                            <div class="col-sm-1 control-label">Nhiên liệu</div>
                            <div class="col-sm-2">
                                <select name="nhienlieu" class="form-control" id="nhienlieu">
                                    <option value="" selected>Chọn nhiên liệu</option>
                                    <?php foreach ($nhienlieus as $nhienlieu) {
                                        $selected = '';
                                        if ($s_nhienlieu == $nhienlieu['id']) $selected = 'selected=""';
                                        echo '<option value="' . $nhienlieu['id'] . '" ' . $selected . '>' . $nhienlieu['name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                            <div class="col-sm-1 control-label">Hợp số</div>
                            <div class="col-sm-2">
                                <select name="hopso" class="form-control" id="hopso">
                                    <option value="" selected>Chọn hợp số</option>
                                    <?php foreach ($hopsos as $hopso) {
                                        $selected = '';
                                        if ($s_hopso == $hopso['id']) $selected = 'selected=""';
                                        echo '<option value="' . $hopso['id'] . '" ' . $selected . '>' . $hopso['name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-1 control-label">Chỗ ngồi</div>
                            <div class="col-sm-2">
                                <select name="chongoi" class="form-control" id="chongoi">
                                    <option value="" selected>Chọn chỗ ngồi</option>
                                    <?php foreach ($chongois as $chongoi) {
                                        $selected = '';
                                        if ($s_chongoi == $chongoi['id']) $selected = 'selected=""';
                                        echo '<option value="' . $chongoi['id'] . '" ' . $selected . '>' . $chongoi['name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                            <div class="col-sm-1 control-label">Xuất xứ</div>
                            <div class="col-sm-2">
                                <select name="xuatxu" class="form-control" id="xuatxu">
                                    <option value="" selected>Chọn xuất xứ</option>
                                    <?php foreach ($xuatxus as $xuatxu) {
                                        $selected = '';
                                        if ($s_xuatxu == $xuatxu['id']) $selected = 'selected=""';
                                        echo '<option value="' . $xuatxu['id'] . '" ' . $selected . '>' . $xuatxu['name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                            <div class="col-sm-1 control-label">Màu sắc</div>
                            <div class="col-sm-2">
                                <select name="mausac" class="form-control" id="mausac">
                                    <option value="" selected>Chọn màu sắc</option>
                                    <?php foreach ($mausacs as $mausac) {
                                        $selected = '';
                                        if ($s_mausac == $mausac['id']) $selected = 'selected=""';
                                        echo '<option value="' . $mausac['id'] . '" ' . $selected . '>' . $mausac['name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                            <div class="col-sm-1 control-label">Năm sản xuất</div>
                            <div class="col-sm-2">
                                <select name="namsanxuat" class="form-control" id="namsanxuat">
                                    <option value="" selected>Chọn năm sản xuất</option>
                                    <?php foreach ($namsanxuats as $namsanxuat) {
                                        $selected = '';
                                        if ($s_namsanxuat == $namsanxuat['id']) $selected = 'selected=""';
                                        echo '<option value="' . $namsanxuat['id'] . '" ' . $selected . '>' . $namsanxuat['name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-1 control-label">Giá bán</div>
                            <div class="col-sm-2">
                                <select name="giaban" class="form-control" id="giaban">
                                    <?php if($s_giaban == 0){echo '<option value="" selected>Chọn giá bán</option>';}else{ echo '<option value="">Chọn giá bán</option>';} ?>
                                    <?php if($s_giaban == 1){echo '<option value="1" selected>Dưới 300</option>';}else{ echo '<option value="1">Dưới 300</option>';} ?>
                                    <?php if($s_giaban == 2){echo '<option value="2" selected>Từ 300 - 500</option>';}else{ echo '<option value="2">Từ 300 - 500</option>';} ?>
                                    <?php if($s_giaban == 3){echo '<option value="3" selected>Từ 500 - 700</option>';}else{ echo '<option value="3">Từ 500 - 700</option>';} ?>
                                    <?php if($s_giaban == 4){echo '<option value="4" selected>Từ 700 - 900</option>';}else{ echo '<option value="4">Từ 700 - 900</option>';} ?>
                                    <?php if($s_giaban == 5){echo '<option value="5" selected>Trên 900</option>';}else{ echo '<option value="5">Trên 900</option>';} ?>
                                </select>
                            </div>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-8 text-right">
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
        <div class="dataTable_wrapper small" style="width: 100%" id="div_sanpham">
            <?php if (empty($order_products)) : ?>
                <h3 class="col-sm-12">Không có sản phẩm nào trong danh mục này.</h3>
            <?php endif; ?>
            <?php foreach ($order_products as $order_product): ?>
                <div class="col-xs-2 feature-grid jewel m-1" style="height: 250px">
                    <!--                    <a href="product/--><?php //echo $order_product['id']; ?><!----->
                    <?php //echo $order_product['mausac']; ?><!--.html"-->
                    <!--                       class="screenshot"-->
                    <!--                       rel="-->
                    <?php //echo $order_product['duongdan'] ?><!--">--><?php //echo '<image src="' . $order_product['duongdan'] . '?time=' . time() . '"alt="' . $order_product['duongdan'] . '" />'; ?>
                    <!--                    </a>-->
                    <?php if ($order_product['duongdan'] == null): ?>
                        <a href="product/<?php echo $order_product['id']; ?>-<?php echo $order_product['mausac']; ?>.html"
                           class="screenshot" rel="<?php echo "website/themes/upload/product/car-loading.jpg" ?>">
                            <?php echo '<image style="height: 150px;" src="' . "website/themes/upload/product/car-loading.jpg" . '?time=' . time() . '"alt="' . $order_product['duongdan'] . '" />'; ?>
                        </a>
                    <?php else: ?>
                        <a href="product/
                    <?php echo $order_product['id']; ?>-<?php echo $order_product['mausac']; ?>.html"
                           class="screenshot" rel="<?php echo $order_product['duongdan'] ?>">
                            <?php echo '<image style="height: 150px;" src="' . $order_product['duongdan'] . '?time=' . time() . '"alt="' . $order_product['duongdan'] . '" />'; ?>
                        </a>
                    <?php endif; ?>
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
<script>
    $(document).ready(function () {
        $('#timkiem').click(function (e) {
            var hangxe = $("#hangxe").val();
            var dongxe = $("#dongxe").val();
            var namsanxuat = $("#namsanxuat").val();
            var nhienlieu = $("#nhienlieu").val();
            var hopso = $("#hopso").val();
            var chongoi = $("#chongoi").val();
            var xuatxu = $("#xuatxu").val();
            var mausac = $("#mausac").val();
            var giaban = $("#giaban").val();
            var search = [hangxe, dongxe, nhienlieu, hopso, chongoi, namsanxuat, xuatxu, mausac, giaban];
            location.href = "website.php?controller=search&search=" + search;
        });
    });

    function getDongXe(val) {
        $.ajax({
            type: "POST",
            url: "admin.php?controller=dongxe&action=getdongxe",
            data: 'idhangxe=' + val,
            success: function (data) {
                $("#dongxe").html(data);
                // getCity();
            }
        });
    }
</script>