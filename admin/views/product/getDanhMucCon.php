<?php
require_once("../dbcontroller.php");
$db_handle = new DBController();
if (!empty($_POST["category_id"])) {
    $query = "SELECT * FROM subcategory WHERE CategoryId = '" . $_POST["category_id"] . "'";
    $results = $db_handle->runQuery($query);
    ?>
    <option value disabled selected>Chọn danh mục</option>
    <?php
    foreach ($results as $state) {
        ?>
        <option value="<?php echo $state["Id"]; ?>"><?php echo $state["Name"]; ?></option>
        <?php
    }
}
?>