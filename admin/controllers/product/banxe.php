<?php
if (!empty($_POST)) {
    $today = date('Y-m-d');
    $idxe = $_POST['idxe'];
    $giaban = $_POST['giaban'];
    $tonglai = $_POST['tonglai'];
    $sotienconlai = $_POST['sotienconlai'];
    $nhanvien = $_SESSION["user"]["Id"];
    $jsonnhadautu = json_decode($_POST["dsnhadautu"]);
    $countnhadautu = count($jsonnhadautu);
    for ($k = 0; $k < $countnhadautu; $k++) {
        $chudautu = $jsonnhadautu[$k]->chudautu;
        $vondautu = $jsonnhadautu[$k]->vondautu;
        $taidautu = $jsonnhadautu[$k]->taidautu;
        $tile = $jsonnhadautu[$k]->tile;
        $tienlai = $jsonnhadautu[$k]->tienlai;
        if (intval($taidautu) > 0) {
            $sqlsodu = "UPDATE `nhadautu` SET `sodu`= `sodu` - $vondautu WHERE `manhadautu`= $chudautu";
            $resultsodu = numRows($sqlsodu);
        }
    }
    $sqlchudautuxe = "
        UPDATE `chudautuxe` 
        SET `tienlai`= tile/100*" . $tonglai . ",
            `ngayban` =  '" . $today . "',
            `trangthai` = 1 " .
        " WHERE idxe = " . $idxe;
    $rschudautuxe = numRows($sqlchudautuxe);

    $sqlnhadautu =
        "UPDATE nhadautu n
        JOIN chudautuxe c ON n.manhadautu = c.idchudautu
        SET n.tongtien = c.vondautu + n.tongtien,
         n.sodu = c.tienlai + n.sodu
        WHERE
            c.idxe = " . $idxe;
    $resultnhadautu = numRows($sqlnhadautu);

    $banxe = array(
        'giaban' => $giaban,
        'tonglai' => $tonglai,
        'sotienconlai' => $sotienconlai,
        'nhanvien' => $nhanvien,
        'ngayban' => date('Y-m-d'),
        'trangthai' => '1'
    );
    $whbanxe = ' id = ' . $idxe;
    $result = update('xe', $banxe, $whbanxe);
    echo $result;
}
?>