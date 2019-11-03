<?php
require_once("../dbConnect.php");
$db_handle = new DBController();
if (!empty($_POST["districtid"])) {
    $query = "SELECT * FROM village WHERE districtid = '" . $_POST["districtid"] . "'";
    $result = $db_handle->runQuery($query);
    ?>
    <option value="-1" selected>Chọn Phường/Xã</option>
    <?php
    foreach ($result as $results) {
        ?>
        <option value="<?php echo $results["id"]; ?>"><?php echo $results["name"]; ?></option>
        <?php
    }
}
?>