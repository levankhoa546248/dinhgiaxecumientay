<div class="panel-body">
    <form id="product-form" class="form-horizontal" method="post" action="admin.php?controller=product&amp;action=edit"
          enctype="multipart/form-data" role="form">
        <input name="id" type="hidden" value="<?php echo $product ? $product['Id'] : '0'; ?>"/>
        <div class="form-group">
            <label for="category_id" class="col-sm-3 control-label">Danh mục</label>

            <div class="col-sm-9">
                <select name="category_id" class="form-control" id="category_id" onChange="getDanhMucCon(this.value);">
                    <option value disabled selected>Chọn danh mục</option>
                    <?php foreach ($categories as $category) {
                        $selected = '';
                        if ($product && ($product['CategoryId'] == $category['Id'])) $selected = 'selected=""';
                        echo '<option value="' . $category['Id'] . '" ' . $selected . '>' . $category['Name'] . '</option>';
                    } ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="subcategory_id" class="col-sm-3 control-label">Danh mục con</label>

            <div class="col-sm-9">
                <select name="subcategory_id" class="form-control" id="subcategory_id">
                    <?php foreach ($subcategories as $subcategory) {
                        $selected = '';
                        if ($product && ($product['SubCategoryId'] == $subcategory['Id'])) $selected = 'selected=""';
                        echo '<option value="' . $subcategory['Id'] . '" ' . $selected . '>' . $subcategory['Name'] . '</option>';
                    } ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Tên sản phẩm</label>

            <div class="col-sm-9">
                <input name="name" type="text" value="<?php echo $product ? $product['Name'] : ''; ?>"
                       class="form-control" id="name" placeholder="Tên sản phẩm" required=""/>
            </div>
        </div>

        <div class="form-group">
            <label for="price" class="col-sm-3 control-label">Giá sản phẩm</label>

            <div class="col-sm-9">
                <input name="price" type="text"
                       data-type="currency"
                       value="<?php echo $product ? number_format($product['Price'], 0, '.', ',') : ''; ?>"
                       class="form-control" id="price" placeholder="0" required=""
                       pattern="^\d{1,3}(,\d{3})*(\)"
                />
            </div>
        </div>

        <div class="form-group">
            <label for="price" class="col-sm-3 control-label">Số lượng</label>

            <div class="col-sm-9">
                <input name="amount" type="number"
                       value="<?php echo $product ? $product['Amount'] : '1'; ?>"
                       class="form-control" id="amount" placeholder="0" required=""
                />
            </div>
        </div>

        <div class="form-group">
            <label for="color" class="col-sm-3 control-label">Màu sắc</label>

            <div class="col-sm-9">
                <input name="color" type="text" value="<?php echo $product ? $product['Color'] : ''; ?>"
                       class="form-control" id="color" placeholder="Màu sắc"/>
            </div>
        </div>
<!---->
<!--        <div class="form-group">-->
<!--            <label for="material" class="col-sm-3 control-label">Chất liệu</label>-->
<!---->
<!--            <div class="col-sm-9">-->
<!--                <input name="material" type="text" value="--><?php //echo $product ? $product['Material'] : ''; ?><!--"-->
<!--                       class="form-control" id="material" placeholder="Chất liệu"/>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="form-group">-->
<!--            <label for="size" class="col-sm-3 control-label">Size</label>-->
<!---->
<!--            <div class="col-sm-9">-->
<!--                <input name="size" type="text" value="--><?php //echo $product ? $product['Size'] : ''; ?><!--"-->
<!--                       class="form-control" id="size" placeholder="Size"/>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="form-group">-->
<!--            <label for="createdate" class="col-sm-3 control-label">Ngày tạo</label>-->
<!---->
<!--            <div class="col-sm-9">-->
<!---->
<!--                <input name="createdate" type="date" value="--><?php //echo $product ? $product['Createdate'] : date('Y-m-d'); ?><!--"-->
<!--                       class="form-control" id="createdate" />-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="form-group">-->
<!--            <label for="isSaleOff" class="col-sm-3 control-label">Sale off</label>-->
<!---->
<!--            <div class="col-sm-9">-->
<!--                <input type="radio" name="status"-->
<!--                    --><?php //if (isset($product) && $product['isSaleOff'] == "1") echo "checked"; ?>
<!--                       value="1">Bật-->
<!--                <input type="radio" name="status" checked-->
<!--                    --><?php //if (isset($product) && $product['isSaleOff'] == "0") echo "checked"; ?>
<!--                       value="0">Tắt-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="form-group">-->
<!--            <label for="percent_off" class="col-sm-3 control-label">Phần trăm giảm giá</label>-->
<!---->
<!--            <div class="col-sm-9">-->
<!--                <input name="percent_off" type="text" value="--><?php //echo $product ? $product['Percent_off'] : ''; ?><!--"-->
<!--                       class="form-control" id="Percent_off" placeholder="Phần trăm giảm giá"/>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="form-group">-->
<!--            <label for="description" class="col-sm-3 control-label">Thông tin chi tiết</label>-->
<!---->
<!--            <div class="col-sm-9">-->
<!--                <textarea name="description"  class="form-control" id="description"-->
<!--                          placeholder="Thông tin sản phẩm"/>--><?php //echo $product ? $product['Description'] : ''; ?><!--</textarea>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="form-group">-->
<!--            <label for="totalview" class="col-sm-3 control-label">Lượt View</label>-->
<!---->
<!--            <div class="col-sm-9">-->
<!--                <input name="totalview" type="text" value="--><?php //echo $product ? $product['TotalView'] : ''; ?><!--"-->
<!--                       class="form-control" id="totalview" placeholder="Lượt view"/>-->
<!--            </div>-->
<!--        </div>-->

        <div class="form-group">

            <div class="col-sm-3">
                <label for="image1" class="col-sm-9 control-label">Ảnh 1</label>
                <input name="Image1" type="file" class="form-control" id="image1" accept="image/*"/>
                <?php if ($product && is_file('public/upload/product/' . $product['Image1'])) {
                    echo '<image src="public/upload/product/' . $product['Image1'] . '?time=' . time() . '" style="max-width:150px;" />';
                }
                ?>
            </div>

            <div class="col-sm-3">
                <label for="image2" class="col-sm-9 control-label">Ảnh 2</label>
                <input name="Image2" type="file" class="form-control" id="image2" accept="image/*"/>
                <?php if ($product && is_file('public/upload/product/' . $product['Image2'])) {
                    echo '<image src="public/upload/product/' . $product['Image2'] . '?time=' . time() . '" style="max-width:150px;" />';
                }
                ?>
            </div>

            <div class="col-sm-3">
                <label for="image3" class="col-sm-9 control-label">Ảnh 3</label>
                <input name="Image3" type="file" class="form-control" id="image3" accept="image/*"/>
                <?php if ($product && is_file('public/upload/product/' . $product['Image3'])) {
                    echo '<image src="public/upload/product/' . $product['Image3'] . '?time=' . time() . '" style="max-width:150px;" />';
                }
                ?>
            </div>

            <div class="col-sm-3">
                <label for="image4" class="col-sm-9 control-label">Ảnh 4</label>
                <input name="Image4" type="file" class="form-control" id="image4" accept="image/*"/>
                <?php if ($product && is_file('public/upload/product/' . $product['Image4'])) {
                    echo '<image src="public/upload/product/' . $product['Image4'] . '?time=' . time() . '" style="max-width:150px;" />';
                }
                ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-primary"><?php echo $product ? 'Cập nhật' : 'Thêm mới'; ?></button>
                <a class="btn btn-warning" href="admin.php?controller=product">Trở về</a>
            </div>
        </div>
    </form>
</div>
<script>
    $(document).ready(function(){
        // $("#category_id").change(function(){
        //     var cid = $(this).val();
        //     $.get("admin/controllers/product/edit.php",{cid:cid},function(data){
        //         $("#subcategory_id").html(data);
        //     });
        // });
        $("input[data-type='currency']").on({
            keyup: function() {
                formatCurrency($(this));
            },
            blur: function() {
                formatCurrency($(this), "blur");
            }
        });
    });
</script>
<script>

    function formatNumber(n) {
        // format number 1000000 to 1,234,567
        return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    }


    function formatCurrency(input, blur) {
        // appends $ to value, validates decimal side
        // and puts cursor back in right position.

        // get input value
        var input_val = input.val();

        // don't validate empty input
        if (input_val === "") { return; }

        // original length
        var original_len = input_val.length;

        // initial caret position
        var caret_pos = input.prop("selectionStart");

        // check for decimal
        if (input_val.indexOf(".") >= 0) {

            // get position of first decimal
            // this prevents multiple decimals from
            // being entered
            var decimal_pos = input_val.indexOf(".");

            // split number by decimal point
            var left_side = input_val.substring(0, decimal_pos);
            var right_side = input_val.substring(decimal_pos);

            // add commas to left side of number
            left_side = formatNumber(left_side);

            // validate right side
            right_side = formatNumber(right_side);

            // On blur make sure 2 numbers after decimal
            if (blur === "blur") {
                right_side;
            }

            // Limit decimal to only 2 digits
            right_side = right_side.substring(0, 2);

            // join number by .
            input_val = left_side;

        } else {
            // no decimal entered
            // add commas to number
            // remove all non-digits
            input_val = formatNumber(input_val);
            input_val = input_val;

            // final formatting
            if (blur === "blur") {
                input_val;
            }
        }

        // send updated string to input
        input.val(input_val);

        // put caret back in the right position
        var updated_len = input_val.length;
        caret_pos = updated_len - original_len + caret_pos;
        input[0].setSelectionRange(caret_pos, caret_pos);
    }

    function getDanhMucCon(val) {
        $.ajax({
            type: "POST",
            url: "admin/views/product/getDanhMucCon.php",
            data: 'category_id=' + val,
            success: function (data) {
                $("#subcategory_id").html(data);
                // getCity();
            }
        });
    }
    function getState(val) {
        $.ajax({
            type: "POST",
            url: "admin/views/product/getState.php",
            data: 'country_id=' + val,
            success: function (data) {
                $("#state-list").html(data);
                getCity();
            }
        });
    }
    function getCity(val) {
        $.ajax({
            type: "POST",
            url: "admin/views/product/getCity.php",
            data: 'state_id=' + val,
            success: function (data) {
                $("#city-list").html(data);
            }
        });
    }

</script>
<script src="admin/themes/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="admin/themes/ckfinder/ckfinder.js"></script>
<script type="text/javascript">CKEDITOR.replace('description',{height: '800px'});</script>
