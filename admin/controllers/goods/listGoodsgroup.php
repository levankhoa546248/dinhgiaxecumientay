<?php
require_once("../dbConnect.php");
$db_handle = new DBController();
if ($_POST["goodsgroupsubid"] == "0" || !empty($_POST["goodsgroupsubid"])) {
    $query = "SELECT * FROM goodsgroup WHERE groupsubid = '" . $_POST["goodsgroupsubid"] . "'";
    $result = $db_handle->runQuery($query);
    ?>
    <option value="0" selected>Chọn nhóm hàng</option>
    <?php
    foreach ($result as $results) {
        ?>
        <option value="<?php echo $results["id"]; ?>"><?php echo $results["name"]; ?></option>
        <?php
    }
}
?>