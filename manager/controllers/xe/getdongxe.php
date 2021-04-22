<?php
if (!empty($_POST)) {
    $id = $_POST["id"];
    $dongxes = select("SELECT * FROM dongxe WHERE idhangxe = $id AND trangthai = 1 ORDER BY ngaytao DESC");
    ?>
    <option selected="selected" value="0">---Chọn---</option>
    <?php
    foreach ($dongxes as $dongxe) {
        ?>
        <option value="<?php echo $dongxe["id"]; ?>"><?php echo $dongxe["tendongxe"]; ?></option>
        <?php
    }
}
?>