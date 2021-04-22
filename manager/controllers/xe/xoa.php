<?php
if (!empty($_POST)) {
    $id = $_POST['id'];
    $ngaytao = date('Y-m-d H:i:s');
    $sql = "UPDATE `xe` SET `trangthai`= 0, `ngaytao`= '$ngaytao'  WHERE (`id`= $id)";
    $data = update_sql($sql);
    if ($data > 0){
        $svon = "UPDATE `vondautu` SET `trangthai`= 0, `ngaytao`= '$ngaytao'  WHERE (`id`= $id)";
        $dvon = update_sql($svon);
        $shinhxe = "UPDATE `hinhanhxe` SET `trangthai`= 0, `ngaytao`= '$ngaytao'  WHERE (`id`= $id)";
        $dhinhxe = update_sql($shinhxe);
    }
    echo $data;
}
?>