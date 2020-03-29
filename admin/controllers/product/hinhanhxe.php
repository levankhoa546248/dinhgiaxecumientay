<?php
if (!empty($_POST)) {
    $idxe = $_POST['idxe'];
    $hinhanhxe = select('SELECT * FROM hinhanhxe WHERE idxe =' . $idxe);
    $hinhanhxe_json = json_encode($hinhanhxe);
    echo $hinhanhxe_json;
}
?>