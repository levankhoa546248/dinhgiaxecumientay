<?php
if (!empty($_POST)) {
    $id = intval($_POST['id']);
    $sql = "SELECT x.* FROM xe x WHERE x.trangthai = 1 AND x.id = $id ORDER BY x.ngaytao DESC";
    $data = select_1_record($sql);
    echo json_encode($data);
}
?>