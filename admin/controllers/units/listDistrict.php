<?php
require_once("../dbConnect.php");
$db_handle = new DBController();
if (!empty($_POST["provinceid"])) {
    $query = "SELECT * FROM district WHERE provinceid = '" . $_POST["provinceid"] . "'";
    $result = $db_handle->runQuery($query);
    ?>
    <option value disabled selected>Chọn Quận/Huyện</option>
    <?php
    foreach ($result as $results) {
        ?>
        <option value="<?php echo $results["id"]; ?>"><?php echo $results["name"]; ?></option>
        <?php
    }
}
?>