<?php
if (!empty($_POST)) {
    $id = intval($_POST['id']);
    $sql = "SELECT ha.* FROM hinhanhxe ha WHERE ha.trangthai = 1 AND ha.idxe = $id ORDER BY ha.ngaytao DESC";
    $data = select($sql);
    echo json_encode($data);
}
?>