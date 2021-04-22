<?php
if (!empty($_POST)) {
    $id = intval($_POST['id']);
    $sql = "SELECT
            v.id,
            v.trangthai,
            v.ngaytao,
            v.idchudautu,
            v.idxe,
            v.taidautu,
            v.taidautu as taidautushow,
            v.tiendautu,
            c.hoten
            FROM
            vondautu AS v JOIN chudautu AS c ON c.id = v.idchudautu
            WHERE 
            v.idxe = $id AND
            c.trangthai = 1 AND
            v.trangthai = 1
            ORDER BY v.ngaytao DESC";
    $data = get_select_nested($sql);
    echo json_encode($data);
}
?>