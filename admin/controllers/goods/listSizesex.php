<?php
require_once("../dbConnect.php");
$db_handle = new DBController();
if ($_POST["goodssizesexid"] == "0" || !empty($_POST["goodssizesexid"])) {
    $query = "SELECT * FROM size WHERE sex = '" . $_POST["goodssizesexid"] . "'";
    $result = $db_handle->runQuery($query);
    ?>
    <option value="0" selected>Chọn kích thước</option>
    <?php
    foreach ($result as $results) {
        ?>
        <option value="<?php echo $results["id"]; ?>"><?php echo $results["name"]; ?></option>
        <?php
    }
}
?>