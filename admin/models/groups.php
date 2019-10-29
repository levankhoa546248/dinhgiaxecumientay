<?php
function subcategories_delete($id) {
    $conn = $GLOBALS["conn"];
    $id = intval($id);
    require_once('admin/models/products.php');
    $options = array(
        'select' => 'id',
        'where' => 'SubCategoryId='.$id
    );
    $products = get_all('product', $options);
    foreach ($products as $product) {
        products_delete($product['id']);
    }
    $sql = "DELETE FROM subcategory WHERE Id=$id";
    mysqli_query($conn, $sql) or die(mysqli_error());
}