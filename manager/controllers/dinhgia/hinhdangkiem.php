<?php
if (!empty($_POST)) {
    $id = intval($_POST['id']);
    $sql = "SELECT ha.* FROM hinhdinhgia ha WHERE ha.trangthai = 1 AND ha.iddinhgia = $id ORDER BY ha.ngaytao DESC";
    $data = select($sql);
    echo json_encode($data);
}
?>