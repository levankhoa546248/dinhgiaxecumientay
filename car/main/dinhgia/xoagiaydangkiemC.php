<?php
$id = intval($_POST['key']);
$data = select_1_record("SELECT * FROM ha_giaydangkiem WHERE id = $id");
$duongdan = $data["duongdan"];
if (file_exists($duongdan)) {
    unlink($duongdan);
    $result = delete('ha_giaydangkiem', 'id=' . $id);
    echo 1;
} else {
    echo 0;
}