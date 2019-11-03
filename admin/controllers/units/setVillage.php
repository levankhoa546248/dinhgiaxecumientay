<?php
require_once("../dbConnect.php");
$db_handle = new DBController();
if (!empty($_POST["districtid"])) {
    $districtid = $_POST["districtid"];
    $villageid = $_POST['villageid'];
    $query = "SELECT * FROM village WHERE districtid = '" . $districtid . "'";
    $result = $db_handle->runQuery($query);
    ?>
    <option value="-1" selected>Chọn Phường/Xã</option>
    <?php
    foreach ($result as $results) {
        $selected = '';
        if ($results && ($results['id'] == $villageid)) $selected = 'selected=""';
        ?>
        <option value="<?php echo $results["id"]; ?>" <?php echo " " . $selected ?>><?php echo $results["name"]; ?></option>
        <?php
    }
}
?>