<?php
//load model
if (!empty($_POST)) {
    $id = intval($_POST['id']);
    $idxe = intval($_POST['idxe']);
    $duongdan = $_POST['duongdan'];
    delete("hinhanhxe", 'id = ' . $id);
    if (file_exists($duongdan)) {
        unlink($duongdan);
        echo 1;
    } else {
        echo 0;
    }
}