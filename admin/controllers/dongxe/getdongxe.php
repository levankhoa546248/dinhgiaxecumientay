<?php
require_once('admin/models/users.php');
if (!empty($_POST)) {
    $idhangxe = $_POST["idhangxe"];
    $query = "SELECT * FROM dongxe WHERE idhangxe = '" . $idhangxe . "' AND trangthai = 1";
    $results = get_select_nested($query);
    ?>
    <option value="0" disabled selected>Chọn dòng xe</option>
    <?php
    foreach ($results as $state) {
        ?>
        <option value="<?php echo $state["id"]; ?>"><?php echo $state["dongxe"]; ?></option>
        <?php
    }
}
?>