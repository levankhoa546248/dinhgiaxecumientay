<?php
$id = $_POST["key"];
$result = select_1_record("SELECT * FROM hinhanhxe WHERE id = $id");
$duongdan = $result["duongdan"];
if (file_exists($duongdan)) {
    unlink($duongdan);
    $result = delete('hinhanhxe', 'id=' . $id);
    echo 1;
} else {
    echo 0;
}?>