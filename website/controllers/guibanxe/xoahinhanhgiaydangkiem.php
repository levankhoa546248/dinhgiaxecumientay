<?php
//load model
if (!empty($_GET)) {
    $id = $_GET['id'];
    $idguiban = intval($_GET['idguiban']);

    delete("hinhanhguibanxe", 'id = ' . $id);
    if (file_exists($duongdan)) {
        unlink($duongdan);
        echo 1;
    } else {
        echo 0;
    }
}