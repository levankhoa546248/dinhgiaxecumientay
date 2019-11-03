<?php
require_once("../dbConnect.php");
$db_handle = new DBController();
if (!empty($_POST["provinceid"])) {
    $districtid = $_POST['districtid'];
    $provinceid = $_POST['provinceid'];
    $query = "SELECT * FROM district WHERE provinceid = '" . $provinceid . "'";
    $result = $db_handle->runQuery($query);
    ?>
    <option value="-1" selected>Chọn Quận/Huyện</option>
    <?php
    foreach ($result as $results) {
        $selected = '';
        if ($results && ($results['id'] == $districtid)) $selected = 'selected=""';
        ?>
        <option value="<?php echo $results["id"]; ?>" <?php echo " " . $selected ?>><?php echo $results["name"]; ?></option>
        <?php
    }
}
?>